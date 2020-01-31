<?php
include 'DataBase.php';
include 'Product.php';
$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->read();
$num = $stmt->rowCount();
if ($num > 0) {
    $products_arr = array();
    $products_arr["records"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $product_item = array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
        );
        array_push($products_arr["records"], $product_item);
    }
    echo json_encode($products_arr);
    echo "\n\n";
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No  products  found.")
    );
}
$create = $product->create();
if ($create) {
    echo json_encode(array("message" => " Product was created.")), "\n";
} else {
    echo json_encode(array("message" => " Unable to create product.")), "\n";
}

if ($product->Update()) {
    echo "done\n\n";
} else {
    echo "not \n\n";
}
