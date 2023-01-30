<?php

class HKBank
{
    private  $soTk;
    private $tenTk;
    private  $tienTk;

    public function __construct($soTk, $tenTk, $tienTk)
    {
        $this->soTk = $soTk;
        $this->tenTk = $tenTk;
        $this->tienTk = $tienTk;
        if ($tienTk < 0 || !is_numeric($tienTk)) {
            $this->tienTk = 0;
        }
        if ($soTk < 0 || !is_numeric($soTk)) {
            $this->soTk = 0;
        }
    }
    public function getsoTK()
    {
        return $this->soTk;
    }
    public function setsoTk($b)
    {
        $this->soTk = $b;
    }
    public function gettienTk()
    {
        return $this->tienTk;
    }
    public function settienTk($b)
    {
        $this->tienTk = $b;
    }
    public function gettenTk()
    {
        return $this->tenTk;
    }
    public function settenTK($b)
    {
        $this->tenTk = $b;
    }
    public function napTk($tienNap)
    {
        if (!is_numeric($tienNap)) {
            echo "Error: Không phải là số";
        }
        $this->tienTk = $tienNap + $this->tienTk;
        echo "Bạn đã nạp : " . $tienNap . " vào số tài khoản {$this->soTk} số dư hiện tại là : {$this->tienTk}"." ₫";
    }
    public function rutTk($tienRut)
    {
        if (!is_numeric($tienRut)) {
            echo "Error: Không phải là số";
        }
        if ($this->tienTk < $tienRut) {
            echo "Error : Sô dư hiện tại là $this->tienTk,Rút vượt quá số dư";
            return;
        }
        $this->tienTk = $this->tienTk - $tienRut;
        echo "Bạn đã rút : " . $tienRut . " vào số tài khoản {$this->soTk} số dư hiện tại là : {$this->tienTk}"." ₫";
    }
    public function getInfo()
    {
        echo "Số tài khoản : {$this->soTk} <br />
        Tên tài khoản : {$this->tenTk} <br />
        Số dư tài khoản : {$this->tienTk} " . " ₫" . "<br />";
    }
}

$new = new HKBank(12212, 'duong', 120);
$new->rutTk(140);
