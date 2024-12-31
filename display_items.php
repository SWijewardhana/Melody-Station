<?php
// Include the database connection file
include 'include/db.php'; 

// Fetch items from the database
function fetchItems() {
    global $conn;

    $sql = "SELECT id, name, image, description FROM items"; // Adjust table name if needed
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Fetch all items
$items = fetchItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .item-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .item {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .item h3 {
            margin: 10px 0;
            color: #444;
        }
        .item p {
            color: #555;
        }
        .no-items {
            text-align: center;
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>

<h1>Available Items</h1>

<div class="item-container">
    <?php if (!empty($items)): ?>
        <?php foreach ($items as $item): ?>
            
            
            <div class="item">
                    <?php 
    $imagePath = file_exists('uploads/' . $item['image']) 
                 ? 'uploads/' . $item['image'] 
                 : 'uploads/placeholder.png'; 
    ?>
    <img src="<?= htmlspecialchars($imagePath) ?>" alt="<?= htmlspecialchars($item['name'] ?: 'Image') ?>">
    <h3><?= htmlspecialchars($item['name']) ?></h3>
    <p><?= htmlspecialchars($item['description']) ?></p>
</div>

            
            
            
            <div class="item">


            
                <img src="<?= htmlspecialchars($imagePath) ?>" alt="<?= htmlspecialchars($item['name'] ?: 'Image') ?>">

                <h3><?= htmlspecialchars($item['name']) ?></h3>
                <p><?= htmlspecialchars($item['description']) ?></p>
            </div>


            
        <?php endforeach; ?>
    <?php else: ?>
        <p class="no-items">No items found.</p>
    <?php endif; ?>
</div>

</body>
</html>
