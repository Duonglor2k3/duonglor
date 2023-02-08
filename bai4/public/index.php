<?php
require_once __DIR__ . "/../vendor/autoload.php";

use App\Models\CategoryModel;
use App\Router;

$cate = new CategoryModel;
// var_dump($cate->all());
// $data = ['cate_name' => 'duong'];
// $result = CategoryModel::findOne(16)->update($data);
// var_dump($result);
// $result = $cate->where('cate_name', '=', 'duong');

// var_dump($result->get());

$router = new Router;
Router::get('/', function(){
  echo "HOME PAGE";
});
Router::get('/contact', function(){
  echo "CONTACT PAGE";
});
$router->resolve();
