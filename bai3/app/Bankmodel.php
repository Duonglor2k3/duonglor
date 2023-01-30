<?php
namespace App;

abstract class Bankmodel
{
    abstract public  function tranfer($money);
    abstract public function withdrawls($money);
}
