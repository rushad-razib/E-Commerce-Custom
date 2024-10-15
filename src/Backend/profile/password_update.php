<?php

session_start();
require '../db.php';

$id = $_SESSION['access'];
$current_pass = $_POST['current_pass'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];
$hash_pass = password_hash($password, PASSWORD_DEFAULT);
$upper = preg_match('*[A-Z]*', $password);
$lower = preg_match('*[a-z]*', $password);
$numbers = preg_match('*[0-9]*', $password);
$symbol = preg_match('*[!,@,#,$,%,,^,&,(,)]*', $password);
$flag = false;

if(empty($current_pass)){
    $_SESSION['current_pass_err'] = 'Please enter current password';
    $flag = true;
}
else{
    $select = "SELECT password FROM users WHERE id = $id";
    $select_exec = mysqli_query($db_connect, $select);
    $select_assoc = mysqli_fetch_assoc($select_exec);
    if(!password_verify($current_pass, $select_assoc['password'])){
        $_SESSION['current_pass_err'] = 'Current password do not match';
        $flag = true;
    }
}
if(empty($password)){
    $_SESSION['password_err'] = 'Please enter new password';
    $flag = true;
}
else{
    if(!$upper || !$lower || !$numbers || !$symbol || (strlen($password) < 8)){
        $_SESSION['password_err'] = 'Minimum password size is 8 characters and must contain atleast one uppercase, lowercase, special character and number';
        $flag = true;
    }
}

if(empty($confirm_pass)){
    $_SESSION['confirm_pass_err'] = 'Please confirm your password';
    $flag = true;
}
else{
    if($confirm_pass != $password){
        $_SESSION['confirm_pass_err'] = 'Password and confirm password doesnot match';
        $flag = true;
    }
}

if($flag){
    header('location:profile.php');
}
else{
    $update = "UPDATE users SET password = '$hash_pass' WHERE id = $id";
    $update_exec = mysqli_query($db_connect, $update);
    $_SESSION['password_success'] = 'Password updated successfully';
    header('location:profile.php');
}

?>