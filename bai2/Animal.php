<?php

class Animal
{
    public $name;
    public $weight;
    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }
    public function getInfo()
    {
        echo "name: {$this->name} weight: {$this->weight}";
    }
}

$animal = new Animal("phu thi", "50kg");
var_dump($animal);
$animal->getInfo();
class Dog extends Animal
{
    public $color;
    public function __construct($name, $weight, $color)
    {
        parent::__construct($name, $weight);
        $this->color = $color;
    }
}