<?php 

class Student {
    public $name = "duong";
    public $email = "duong@gmail.com";
    public function construct($name, $email){
        echo "em {$this->name} co email {$this->email}";
    }
}

$student = new Student;
var_dump($student);