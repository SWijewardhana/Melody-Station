<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = 'localhost';       // Hostname of the database server
$username = 'root';        // Database username (default for XAMPP is 'root')
$password = '';            // Database password (default for XAMPP is empty)
$dbname = 'melody_station'; // Name of your database

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Function to fetch all items
function getItems() {
    global $conn;
    $sql = "SELECT * FROM items"; // Assuming you have a table named 'items'
    $result = $conn->query($sql);
    $items = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
    }
    return $items;
}

// Function to fetch item details by ID
function getItemById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Function to add an item
function addItem($name, $imagePath, $description) {
    global $conn;
    $query = "INSERT INTO items (name, image, description) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $name, $imagePath, $description);
    return $stmt->execute();
}

// Function to update an item
function updateItem($id, $name, $imagePath, $description) {
    global $conn;
    $query = "UPDATE items SET name = ?, image = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $name, $imagePath, $description, $id);
    return $stmt->execute();
}

// Function to delete an item
function deleteItem($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM items WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Close the database connection
function closeConnection() {
    global $conn;
    $conn->close();
}
