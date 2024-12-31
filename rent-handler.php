<?php
$host = 'localhost';       // Hostname of the database server
$username = 'root';        // Database username (default for XAMPP is 'root')
$password = '';            // Database password (default for XAMPP is empty)
$dbname = 'melody_station'; // Name of your database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone_no = htmlspecialchars(trim($_POST['phoneNo']));
    $nic = htmlspecialchars(trim($_POST['NIC']));
    $date_of_pickup = $_POST['DateOfPickup'];
    $date_of_return = $_POST['DateOfReturn'];
    $price = intval(preg_replace('/[^0-9]/', '', $_POST['price'])); // Extract numeric value from price
    $note = "Price: Rs. 600 per day. Payment methods: cash or upload slip.";

    // Handle file upload
    $slip_path = null;
    if (isset($_FILES['slip']) && $_FILES['slip']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $slip_name = uniqid('slip_') . '_' . basename($_FILES['slip']['name']);
        $slip_path = $upload_dir . $slip_name;

        if (!move_uploaded_file($_FILES['slip']['tmp_name'], $slip_path)) {
            die('Failed to upload the file. Please try again.');
        }
    }

    // Insert data into the database
    $sql = "INSERT INTO rent (name, email, phone_no, nic, date_of_pickup, date_of_return, price, slip_path, note) 
            VALUES (:name, :email, :phone_no, :nic, :date_of_pickup, :date_of_return, :price, :slip_path, :note)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_no', $phone_no);
    $stmt->bindParam(':nic', $nic);
    $stmt->bindParam(':date_of_pickup', $date_of_pickup);
    $stmt->bindParam(':date_of_return', $date_of_return);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':slip_path', $slip_path);
    $stmt->bindParam(':note', $note);

    if ($stmt->execute()) {
        echo 'Details submitted successfully!';
    } else {
        echo 'Failed to submit details.';
    }
} else {
    die('Invalid request method.');
}
?>
