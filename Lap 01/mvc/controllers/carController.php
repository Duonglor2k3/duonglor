<?php

function listCar()
{
    $products = getData("SELECT * FROM car");
    include_once "views/list.php";
}
function createCar()
{
    $result = getData('SELECT * FROM brand');
    include_once "views/create.php";
}

function storeCar()
{
    $carName = $_POST['carName'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $img_tmp = $_FILES['image']['tmp_name'];
    $description = $_POST['description'];
    $version = $_POST['version'];
    $gear = $_POST['gear'];
    $origin = $_POST['origin'];
    $brand_id = $_POST['brand_id'];
    exeQuery("INSERT INTO `car`( `carName`, `image`, `price`, `description`, `version`, `gear`, `origin`, `brand_id`) VALUES ('$carName','$image','$price','$description',' $version','$gear',' $origin','$brand_id')");
    move_uploaded_file("$img_tmp", "uploads/$image");
    header("Location:?ctr=list");
}
function editCar()
{
    $id = $_GET['id'];
    $all = getData('SELECT * FROM brand');
    $result = getOne('car', $id);
    include_once "./views/update.php";
}
function updateCar()
{
    $carName = $_POST['carName'];
    $id = $_POST['id'];
    $prev = $_POST['prev'];
    $image = $_FILES['image']['name'];
    $img_tmp = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $version = $_POST['version'];
    $gear = $_POST['gear'];
    $origin = $_POST['origin'];
    $brand_id = $_POST['brand_id'];
    if ($img_size <= 0) {
        $image = $prev;
    }
    exeQuery("UPDATE `car` SET `carName`='$carName',`image`='$image',`price`='$price',`description`='$description',`version`='$version',`gear`='$gear',`origin`='$origin',`brand_id`='$brand_id' WHERE id = '$id'");
    move_uploaded_file("$img_tmp", "uploads/$image");
    header("Location: ?ctr=list");
}

function deleteCar()
{
    $id = $_GET['id'];
    exeQuery("DELETE FROM `car` WHERE id=$id");
    header("Location: ?ctr=list");
}
function showCar()
{
    $id = $_GET['id'];
    $result = getOne('car', $id);
    include_once "./views/show.php";
}
