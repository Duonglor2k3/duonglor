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
      $this->conn = new PDO("mysql:host=localhost;dbname=duong;charset=utf8", "root", "");
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function all()
  {
    $model = new static;
    $model->sqlBuilder = "Select * from $model->tableName ";
    $stmt = $this->conn->prepare($model->sqlBuilder);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result;
  }
  public function findOne($id)
  {
    $model = new static;
    $this->model = "Select * from $model->tableName where id = $id ";
    $stmt = $this->conn->prepare($model->sqlBulider);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    if ($result) {
      return $result[0];
    }
    return $model;
  }
  public function insert($data = [])
  {
    $this->sqlBuilder = "INSERT INTO $this->tableName(";
    $colName = "";
    $params = "";
    foreach ( $data as $key  => $value){
      $colName = "`$key`, ";
      $params = ":$key, ";
    }
    $colName = rtrim($colName,", ");
    $params = rtrim($params,", ");
    $this->sqlBuilder .= $colName .")value(" . $params .")";
    $stmt = $this->conn->prepare($this->sqlBuilder);
    $stmt->execute($data);
  }
}
