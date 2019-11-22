<?php

header("Access-Control-Allow-Origin: *");

$method = $_GET['action'];

require_once "../controller/PhotoController.php";

$photoController = new PhotoController();
if (method_exists($photoController, $method)) {
    $photoController->$method();
} else {
    echo json_encode(['error' => 'method not found']);
}
