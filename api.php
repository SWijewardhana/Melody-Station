<?php
header("Content-Type: application/json");

include 'include/db.php';

// Allow cross-origin requests for testing
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

// Parse the request method
$requestMethod = $_SERVER['REQUEST_METHOD'];
parse_str(file_get_contents("php://input"), $input); // Parse body for PUT/DELETE

// Initialize response
$response = [
    "status" => "error",
    "message" => "Invalid Request"
];

if ($requestMethod == 'GET') {
    if (isset($_GET['id'])) {
        // Fetch single item
        $item = getItemById($_GET['id']);
        if ($item) {
            $response = [
                "status" => "success",
                "data" => $item
            ];
        } else {
            $response['message'] = "Item not found";
        }
    } else {
        // Fetch all items
        $items = getItems();
        $response = [
            "status" => "success",
            "data" => $items
        ];
    }
} elseif ($requestMethod == 'POST') {
    // Add new item
    $input = json_decode(file_get_contents('php://input'), true);
    $name = $input['name'] ?? null;
    $image = $input['image'] ?? null;
    $description = $input['description'] ?? null;

    if ($name && $image && $description) {
        if (addItem($name, $image, $description)) {
            $response = [
                "status" => "success",
                "message" => "Item added successfully"
            ];
        } else {
            $response['message'] = "Failed to add item";
        }
    } else {
        $response['message'] = "Missing required fields";
    }
} elseif ($requestMethod == 'PUT') {
    // Update existing item
    $input = json_decode(file_get_contents('php://input'), true);
    $id = $input['id'] ?? null;
    $name = $input['name'] ?? null;
    $image = $input['image'] ?? null;
    $description = $input['description'] ?? null;

    if ($id && $name && $image && $description) {
        if (updateItem($id, $name, $image, $description)) {
            $response = [
                "status" => "success",
                "message" => "Item updated successfully"
            ];
        } else {
            $response['message'] = "Failed to update item";
        }
    } else {
        $response['message'] = "Missing required fields";
    }
} elseif ($requestMethod == 'DELETE') {
    // Delete item
    $id = $input['id'] ?? null;

    if ($id) {
        if (deleteItem($id)) {
            $response = [
                "status" => "success",
                "message" => "Item deleted successfully"
            ];
        } else {
            $response['message'] = "Failed to delete item";
        }
    } else {
        $response['message'] = "Missing item ID";
    }
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);

?>
