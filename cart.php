<?php
session_start();

//Them vao gio hang
if(isset($_GET['iid'])){
	$id = $_GET['iid'];
    $url = 'http://localhost' . $_GET['url'];
    $pqty = 0;

	if(isset($_SESSION["cart"][$id])){
		$_SESSION["cart"][$id]++;
	}else{
		$_SESSION["cart"][$id] = 1;
	}

	$qty = $_SESSION["cart"][$id];

    // var_dump($_SESSION['cart']);
    header("location: $url");
}