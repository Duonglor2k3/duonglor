<?php
namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends Controller{
  public function index(){
    $product = [
      'name' => 'iphone',
      'price' => 'USD',
    ];
    $this->view('Home',['product' => $product]);
  }

  public function contact(){
    $this->view('contact',[]);

  }

  public function show(){
    $products = ProductModel::all();
    $this->view('site/showProduct',['products' => $products]);
  }
}