<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/manufacture.php";
require "model/protype.php";
require "model/cart.php";

$cart = new Cart;
$product = new Product;

//Them vao gio hang
if (isset($_GET['cid'])) {
	$cid = $_GET['cid'];
	$cname = $_GET['cname'];
	$cprice = $_GET['cprice'];
	$cimg = $_GET['cimg'];
	$url = 'http://localhost' . $_GET['url'];
	$cqty;

	$check = $cart->getIdProductCart($cid);

	if(!$check){
		$cqty = 1;
		$cart->insertProductToCart($cid, $cname, $cprice, $cimg, $cqty);
	}else{
		$productcart = $cart->getIdProductCart($cid);

		$uqty = $productcart[0]['qty']++;

		$cart->editQtyProductInCart($cid, $uqty);
		
	}
	// var_dump($check);
	header("location: $url");
	exit();
  }

//Xoa san pham khoi gio hang
if(isset($_GET['del'])){
	$id = $_GET['id'];

	$cart->delProductInCart($id);

	header("location: cartview.php");
}
