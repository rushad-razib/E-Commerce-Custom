<?php
session_start();
require 'db.php';

$select = "SELECT * FROM users";

$email = $_POST['email'];
$passsword = $_POST['password'];
$flag = false;

if(empty($email)){
    $_SESSION['email_err'] = 'Please Enter Email';
    $flag = true;
}
else{

}
if(empty($password)){
    $_SESSION['password_err'] = 'Please Enter Password';
    $flag = true;
}

if($flag){
    header('location:login.php');
}

?>