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
    var_dump($checkLogin);

    if ($checkLogin) {
        $dataUser = $user->getDataUser($username);
        $checkRole = $dataUser[0]['role'];
        $_SESSION['name'] = $dataUser[0]['name'];

        // echo "dataUser = ";  var_dump($dataUser);
        // echo "role = "; var_dump($checkRole);
        // echo "name = "; var_dump($_SESSION['name']);

        if ($checkRole == 1) {
            $_SESSION['admin'];
            $_SESSION['name'];

            header("location: http://localhost/SG_Project_BE1/admin/index.php");
        } else {
            $_SESSION['name'];
            header("location:index.php");
        }
    } else {
        header("location:login.php");
    }
}