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
      $this->conn = new PDO("mysql:host=localhost;dbname=php2;charset=utf8", "root", "");
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
}
