<?php
require_once "models/database.php";
require_once "controllers/carController.php";

$ctr = $_GET['ctr'] ?? ''; // toán tử 2 ngôi php8

switch ($ctr) {
    case '':
        listCar();
        break;
    case 'list':
        listCar();
        break;
    case 'create':
        createCar();
        break;
    case 'createProduct':
        storeCar();
        break;
    case 'edit-car':
        editCar();
        break;
    case 'update-car':
        updateCar();
        break;
    case 'delete-car':
        deleteCar();
        break;
    case 'show-car':
        showCar();
        break;
    default:
        include_once "views/404.php";
        break;
}
