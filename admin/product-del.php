<?php
require "config.php";
require "model/db.php";
require "model/product.php";


$product = new Product;

if(isset($_GET['id'])){
   $id = $_GET['id'];
    
    //goi phuong thuc xoa
    $product->delProduct($id);
    header('location:product.php');
}