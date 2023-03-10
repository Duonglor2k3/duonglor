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
        return $this->view('admin/products/list', ['products' => $products]);
    }
    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view('admin/products/add', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $product = $request->getBody();
        $image = $_FILES['image']['name'];
        $product['image'] = $image;
        //Upload file
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);
        //insert
        $p = new ProductModel();
        $p->insert($product);
        header("location:/product");
    }
    public function show(Request $request)
    {
        $p = $request->getBody();
        $product = ProductModel::findOne($p['id']);
        $categories = CategoryModel::all();
        return $this->view('admin/products/edit', ['product' => $product, 'categories' => $categories]);
    }
    public function update(Request $request)
    {
        $product = $request->getBody();
        if ($_FILES['image']['size'] > 0) {
            $image = $_FILES['image']['name'];
            $product['image'] = $image;
            //Upload file
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $product['image']);
        }
        //update
        ProductModel::findOne($product['id'])->update($product);
        header("location:/product");
        exit;
    }
    public function delete(Request $request)
    {
        $product = $request->getBody();
        $new = new ProductModel;
        $new->delete($product['id']);
        header("location:/product");
        exit;
    }
}
