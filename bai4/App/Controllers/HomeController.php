<?php
namespace App\Controllers;

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
}