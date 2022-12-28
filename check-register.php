<?php
require "config.php";
require "model/db.php";
require "model/user.php";
include "login.php";

$user = new User;

if (isset($_POST["btn_submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confpassword = $_POST["confpassword"];

    // $checkEmail = $user->checkEmailExists($email);
    // $checkUsername = $user->checkUsernameExists($username);

    // if ($checkEmail) {
    //     alert("Please enter");
    //     //header("location:index.php");
    // } elseif($checkUsername){
    //     // alert('Login failed');
    //     header("location:login.php");
    // }elseif($password != $confpassword){
    //     alert('Password wrong !!');
    //     header("location:login.php");
    // }else{

      
    // }
    $user->insertUser($name, $username, $password, $phone, $email);

    $checkEmail = $user->checkEmailExists($email);
    $checkUsername = $user->checkUsernameExists($username);

    if ($checkEmail) {
        alert("This email is already in use");        
    } 
    elseif($checkUsername){
        alert("This username is already in use");       
    }
    elseif($password != $confpassword){
        alert("Password and ConfPassword are not the same");       
    }
    else{
        $user->checkRegister($name, $phone, $email, $username, $password);
        $user->checkLogin($username,$password);
    }
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}