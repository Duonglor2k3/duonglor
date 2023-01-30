<?php
namespace App;

class BankHD extends Bankmodel {
    public const PI = 3.14;
    public static $name = 'BankHD';
    public function tranfer($money)
    {
        echo "<br/>Ban vau chuyen tien thanh cong";
    }
    public function withdrawls($money)
    {
        echo "<br/>Ban rut tien thanh cong";
    }
}