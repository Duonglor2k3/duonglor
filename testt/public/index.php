<?php



use App\Models\CategoryModel;

require_once __DIR__ . "/../vendor/autoload.php";



$cate = new CategoryModel();

var_dump($cate->all());
