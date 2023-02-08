<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
  protected $conn;

  public function __construct()
  {
    try {
      $this->conn = new PDO("mysql:host=localhost;dbname=lap03;charset=utf8", "root", "");
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
  // all function
  public static function all()
  {
    $model = new static;
    $model->sqlBuilder = "select * from $model->tableName";
    $stmt = $model->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result  = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result;
  }
  public static function get($id)
  {
    $model = new static;
    $model->sqlBuilder = "select * from $model->tableName where id = $id";
    $stmt = $model->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result  = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result[0];
  }
  public function insert($data = [])
  {
    $this->sqlBuilder = "INSERT INTO $this->tableName(";
    $colName = '';
    $params = '';
    //lấy tên cột và tên tham số date
    foreach ($data as $key => $value) {
      $colName .= "`$key`, ";
      $params .= "$key, ";
    }
    $colName = rtrim($colName, ", ");
    $params = rtrim($params, ", ");
    $this->sqlBuilder .= $colName . ") Values(" . $params . ")";
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute($data);
  }
  public function update($data = [],$id){
    $this->sqlBuilder = "UPDATE $this->tableName SET" ;
    $colName = '';

    foreach ($data as $key => $value) {
      $colName .= "`$key` =  :$key , ";
    }
    $colName = rtrim($colName, ", ");
    $this->sqlBuilder .= $colName ." Where id = $id";
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute($data);
  }
  public function delete($id){
    $this->sqlBuilder = "DELETE FROM $this->tableName WHERE id = $id";
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute();
  }
}
