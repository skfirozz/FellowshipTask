<?php

include_once 'Config.php';
include_once 'Product.php';
$database = new Database();
$db = $database->getConnection();
$product = new Product($db);