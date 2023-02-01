<?php

// spl_autoload_register(function($class){
//     $path = lcfirst(str_replace("\\","/",$class));
//     require_once __DIR__ . "/../" . $path . ".php";
// });
require "..//vendor/autoload.php";
use App\BankHD;

$bank = new BankHD;

$bank -> tranfer(100);

echo "<br />".BankHD::PI;
echo "<br />Static".BankHD::$name;

$classA = new App\ClassA;
$classB = new App\ClassB;
$classDog = new App\ClassDog;
$classCat = new App\ClassCat;

$classA -> show();
$classB -> show();

$classCat->talk();
$classDog->talk();