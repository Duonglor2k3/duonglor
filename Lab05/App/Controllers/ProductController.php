<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
  public function index()
  {
    $products = ProductModel::all();
    return $this->view('admin/list', ['products' => $products]);
  }
  public function create()
  {
    $categories = CategoryModel::all();
    return $this->view('admin/add', ['categories' => $categories]);
  }
  public function create_product(Request $request)
  {
    $product = $request->getBody();
    $image = $_FILES['hinh']['name'];
    $product['hinh'] = $image;
    //Upload file
    move_uploaded_file($_FILES['hinh']['tmp_name'], 'images/' . $image);
    //insert
    $p = new ProductModel();
    $p->insert($product);
    header("location:/list");
  }
  public function show(Request $request)
  {
    $p = $request->getBody();
    $product = ProductModel::findOne($p['id']);
    $categories = CategoryModel::all();
    return $this->view('admin/edit', ['product' => $product, 'categories' => $categories]);
  }
  public function update(Request $request)
  {
    $product = $request->getBody();
    if ($_FILES['hinh']['size'] > 0) {
      $image = $_FILES['hinh']['name'];
      $product['hinh'] = $image;
      //Upload file
      move_uploaded_file($_FILES['hinh']['tmp_name'], 'images/' . $product['hinh']);
    }
    //update
    ProductModel::findOne($product['id'])->update($product);
    header("location:/list");
    exit;
  }
  public function delete(Request $request)
  {
    $product = $request->getBody();
    $new = new ProductModel;
    $new->delete($product['id']);
    header("location:/list");
    exit;
  }
}
