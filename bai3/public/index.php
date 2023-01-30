<?php

require_once __DIR__ ." /../app/Bankmodel.php";
require_once __DIR__ ." /../app/BankHD.php";
require_once __DIR__ ." /../app/ClassA.php";
require_once __DIR__ ." /../app/ClassB.php";

use App\BankHD;

$bank = new BankHD;

$bank -> tranfer(100);

echo "<br />".BankHD::PI;
echo "<br />Static".BankHD::$name;

$classA = new App\ClassA;
$classB = new App\ClassB;

$classA->getClass();
$classB->getClass();