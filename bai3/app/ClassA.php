<?php

namespace App;

class ClassA implements InterfaceModel
{
    public function show()
    {
        echo "<br/>hien thi thong tin san pham";
    }
    public function create($color)
    {
        echo "<br/>tao thoc tinh voi  mau la " . $color;
    }
    public function insert($name)
    {
        echo "<br/>them 1 bai viet co ten : $name";
    }
}
