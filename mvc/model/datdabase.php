<?php 
function connection() {
    try {
        $conn = new PDO("mysql:host=localhost; dbname=duong; charset=utf8" , "root" , "");
        return $conn;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>