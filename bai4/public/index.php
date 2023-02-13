<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Models\CategoryModel;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";
$router = new Router;

Router::get('/', function () {
    echo "HOME PAGE";
});
Router::get('/contact', [HomeController::class, 'contact']);
Router::get('/home', [HomeController::class, 'index']);
Router::get('/product', [ProductController::class, 'index']);
Router::get('/create-product', [ProductController::class, 'create']);
Router::post('/create-product', [ProductController::class, 'store']);

$router->resolve();