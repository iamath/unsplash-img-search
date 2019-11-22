<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\PhotoController;

header("Access-Control-Allow-Origin: *");

function loadMethod(string $method): void
{
    $photoController = new PhotoController();

    if (method_exists($photoController, $method)) {
        $photoController->$method();
    } else {
        echo json_encode(['error' => 'method not found']);
    }
}

loadMethod($_GET['action']);
