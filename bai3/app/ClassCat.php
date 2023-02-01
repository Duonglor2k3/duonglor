<?php 
namespace App;
class ClassCat implements InterfaceAnimal{
   public function talk(){
      echo "<br />no keu meo meo";
   }
   public function run(){
      echo "<br />no chay cham";
   }
   public function eat(){
      echo "<br />an pate";
   }
}