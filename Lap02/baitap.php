<?php
class People
{
    public $fullName;
    public $birthday;
    public $address;
    function __construct($fullName, $birthday, $address)
    {
        $this->fullName = $fullName;
        $this->birthday = $birthday;
        $this->address = $address;
    }

    function getInfo()
    {
        echo "Nhân Viên : {$this->fullName}  <br />
        Ngay Sinh : {$this->birthday} <br />
        Dia chi : {$this->address}". "<br />";
    }
}

// create class Employee extends People have attributes id , workingDays , totalLeaveTaken , dalyWage
class Employee extends People
{
    public $id;
    public $workingDays;
    public $totalLeaveTaken;
    public $dalyWage;
    function __construct($fullName, $birthday, $address, $id, $workingDays, $totalLeaveTaken, $dalyWage)
    {
        parent::__construct($fullName, $birthday, $address);
        $this->id = $id;
        $this->workingDays = $workingDays;
        $this->totalLeaveTaken = $totalLeaveTaken;
        $this->dalyWage = $dalyWage;
    }
    function getSalaryAmount() {
        $totalWage =  ($this->workingDays - $this->totalLeaveTaken) * $this->dalyWage;
        echo "Tổng số lương của nhân viên {$this->fullName} là : " . $totalWage ." ₫";
    }
}

$duong = new Employee("duong","12/01/2003","Ha Noi",1,25,5,500000);
$duong->getInfo();
$duong->getSalaryAmount();
