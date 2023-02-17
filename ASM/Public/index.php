<?php


require_once __DIR__ . "/../vendor/autoload.php";

use App\Models\HelloModel;
use App\Controllers\HelloController;

$helloController = new HelloController();
$helloModel = new HelloModel();

$helloController->Hello();
echo "<br/><br/>";
$helloModel->Hello();
