<?php 
class Sinhvien {
    public $id;
    public $name;
    public int $point;
    public function __construct($id, $name, $point) {
        $this->id = $id;
        $this->name = $name;
        $this->point = $point;
    } 
    public function checkPoint() {
        if ($this->point >= 0 && $this->point <= 100) {
            if ($this->point > 45){
                echo "Sinh vien : {$this->name} Ma SV : {$this->id} Da pass mon voi diem : {$this->point}";
            } else {
                echo "Sinh vien : {$this->name} Ma SV : {$this->id} Da fail mon voi diem : {$this->point}";
            }
        } else {
            echo "Error: Diem duoi 0 Hoac tren 100";
        }
    }
}  

$sinhvien1 = new Sinhvien("ph24374","duong",42);
$sinhvien1->checkPoint();