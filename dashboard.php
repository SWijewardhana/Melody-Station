<?php
include 'include/db.php'; // Include the database connection file

// Initialize a feedback message variable
$message = "";

// Fetch logged-in user's name from the session
$user = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest';

// Check if the update or delete button is clicked
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        // Delete item
        $itemId = $_POST['id'];
        if (deleteItem($itemId)) {
            $message = "Item deleted successfully!";
            echo '<script>setTimeout(() => { document.querySelector(".message").remove(); }, 3000);</script>';
        } else {
            $message = "Failed to delete item.";
            echo '<script>setTimeout(() => { document.querySelector(".message").remove(); }, 3000);</script>';
        }
    } elseif (isset($_POST['save'])) {
        // Add or update item
        $name = $_POST['name'];
        $imagePath = $_POST['image'];
        $description = $_POST['description'];
        $id = isset($_POST['id']) ? $_POST['id'] : null;
       

        // Handle file upload
        if (!empty($_FILES['image']['name'])) {
            $targetDir = "uploads/images/";
            $targetFile = $targetDir . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $imagePath = $targetFile;
            } else {
                $message = "Failed to upload image.";
            }
        }

        if ($id) {
            // Update existing item
            if (updateItem($id, $name, $imagePath, $description)) {
                $message = "Item updated successfully!";
                echo '<script>setTimeout(() => { document.querySelector(".message").remove(); }, 3000);</script>';


            } else {
                $message = "Failed to update item.";
                echo '<script>setTimeout(() => { document.querySelector(".message").remove(); }, 3000);</script>';


            }
        } else {
            // Add new item
            if (addItem($name, $imagePath, $description)) {
                $message = "Item added successfully!";
                echo '<script>setTimeout(() => { document.querySelector(".message").remove(); }, 3000);</script>';

            } else {
                $message = "Failed to add item.";
                echo '<script>setTimeout(() => { document.querySelector(".message").remove(); }, 3000);</script>';

            }
        }
    }
}

// Fetch all items
$items = getItems();

// Close connection
closeConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Item Dashboard</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
    font-family: Arial, sans-serif;
    background-color: hsl(0, 0.00%, 3.90%);
    
    /* Use relative path */
    background-image: url('assets/img/bg.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
    color: #333;
    padding: 20px;
}


        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: rgb(61, 154, 253);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #555;
        }

        /* Message Styles */
        .message {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            color: white;
            background-color:rgb(144, 76, 175);
            border-radius: 5px;
        }

        .message.error {
            background-color: #FF6347;
        }

        /* Button Styles */
        button {
            background-color:rgb(79, 76, 175);
            color: white;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color:rgb(151, 69, 160);
        }

        .delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button i {
            margin-right: 5px; /* Add some space between the icon and the text */
        }

        .delete-button:hover {
            background-color: darkred;
        }

        .edit-button {
            background-color: yellow;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .edit-button:hover {
            background-color: gold; /* A darker shade of yellow for hover */
        }

        .signout-button {
            background-color:rgb(72, 2, 105);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            float: right;
        }

        .signout-button:hover {
            background-color:rgb(102, 153, 248);
        }

        /* Form Styles */
        #itemForm {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: none;
        }

        #formTitle {
            color:rgb(76, 130, 175);
            margin-bottom: 20px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        input[type="text"]:focus, textarea:focus {
            border-color:rgb(91, 76, 175);
            outline: none;
        }

        /* Table Styles */
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color:rgb(160, 76, 175);
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f0f0f0; /* Table background color */
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            body {
                padding: 10px;
            }

            table, th, td {
                font-size: 14px;
                padding: 6px;
            }
        }
    </style>
</head>
<body>

<h1>Welcome, <?= htmlspecialchars($user) ?>!</h1>

<h2>Item Dashboard</h2>

<!-- Feedback Message -->
<!-- Feedback Message -->
<?php if (!empty($message)): ?>
    <div class="message <?= strpos($message, 'Failed') !== false ? 'error' : '' ?>">
        <?= htmlspecialchars($message) ?>
    </div>
    <?php $message = ""; // Clear the message ?>
<?php endif; ?>


<!-- Sign Out Button -->
<form method="POST" action="logout.php" style="float: right; margin-bottom: 20px;">
    <button type="submit" class="signout-button">Sign Out</button>
</form>

<!-- Add Item Button -->
<button onclick="showForm()">Add Item</button>

<!-- Add or Update Item Form -->
<div id="itemForm">
    <h2 id="formTitle">Add Item</h2>
    <form method="POST" id="form">
        <input type="hidden" name="id" id="itemId">
        <label for="name">Name</label>
        <input type="text" name="name" id="itemName" required><br><br>

        <label for="image">Upload Image</label>
<input type="file" name="image" id="itemImage" accept="image/*"><br><br>



        <label for="description">Description</label>
        <textarea name="description" id="itemDescription" required></textarea><br><br>

        <button type="submit" name="save" id="saveBtn">Save</button>
    </form>
</div>

<!-- View Items Button -->
<button onclick="viewItems()">View Items</button>

<!-- View Items Table -->
<div id="itemsTable" style="display:none;">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr data-id="<?= $item['id'] ?>">
                    <td class="name"><?= htmlspecialchars($item['name']) ?></td>
                    <td class="image"><?= htmlspecialchars($item['image']) ?></td>
                    <td class="description"><?= htmlspecialchars($item['description']) ?></td>
                    <td>
                        <button onclick="editItem(<?php echo $item['id']; ?>)" class="edit-button">Edit</button>
                    </td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                            <button type="submit" name="delete" class="delete-button">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    function showForm() {
        document.getElementById("itemForm").style.display = 'block';
        document.getElementById("itemsTable").style.display = 'none';
        document.getElementById("saveBtn").style.display = 'block';
        document.getElementById("formTitle").innerText = 'Add Item';
        document.getElementById("form").reset();
        document.getElementById("itemId").value = ''; 
        //alert("Add Item form is now visible.");
    }

    function viewItems() {
        document.getElementById("itemsTable").style.display = 'block';
        document.getElementById("itemForm").style.display = 'none';
    }

    function editItem(itemId) {
        const itemRow = document.querySelector(`tr[data-id="${itemId}"]`);
        const name = itemRow.querySelector(".name").innerText;
        const image = itemRow.querySelector(".image img").src;
        const description = itemRow.querySelector(".description").innerText;

        // Populate the form with data for updating
        document.getElementById("itemId").value = itemId;
        document.getElementById("itemName").value = name;
        document.getElementById("itemImage").value = image;
        document.getElementById("itemDescription").value = description;

        // Change form title to update
        document.getElementById("formTitle").innerText = 'Update Item';
        document.getElementById("itemForm").style.display = 'block';
        document.getElementById("itemsTable").style.display = 'none';
    }

    const form = document.getElementById("form");
    form.addEventListener("input", function() {
        document.getElementById("saveBtn").style.display = 'block';
    });
</script>

</body>
</html>
