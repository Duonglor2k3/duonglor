<?php
function connection()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=lap01; charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function getData($sql)
{
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function exeQuery($sql)
{
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function getOne($table, $id)
{
    $conn = connection();
    $sql = "SELECT * FROM $table where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
