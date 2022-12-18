<?php
require "config.php";
require "model/db.php";
require "model/user.php";
include "login.php";

$user = new User;

if (isset($_POST["btn_submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $checkLogin = $user->checkLogin($username, $password);

    if ($checkLogin) {
        $_SESSION["username"] = $username;
        header("location:index.php");
    } else {
        // alert('Login failed');
        header("location:login.php");
    }
}