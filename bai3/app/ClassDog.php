<?php 
namespace App;
class ClassDog implements InterfaceAnimal{
   public function talk(){
      echo "<br />no keu gau gau";
   }
   public function run(){
      echo "<br />no chay nhanh";
   }
   public function eat(){
      echo "<br />an cut";
   }
}