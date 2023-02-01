<?php 
require_once __DIR__ . "/../vendor/autoload.php";

use App\Models\CategoryModel;
$cate = new CategoryModel;
var_dump($cate->all());