<?php
session_start();
require 'db.php';

$select = "SELECT * FROM users";

$email = $_POST['email'];
$password = $_POST['password'];
$flag = false;

// echo $password;
// die();

if(empty($email)){
    $_SESSION['email_err'] = 'Please Enter Email';
    $flag = true;
}
else{
    $select = "SELECT COUNT(*) as total FROM users where email = '$email'";
    $select_query = mysqli_query($db_connect, $select);
    $select_fetch = mysqli_fetch_assoc($select_query);

    if($select_fetch['total'] == 0){
        $_SESSION['email_err'] = 'Email Does Not Exist';
        $flag = true;
    }
    else{
        if(empty($password)){
            $_SESSION['password_err'] = 'Please Enter Password';
            $flag = true;
        }
        else{
            $select_all = "SELECT * FROM users where email = '$email'";
            $select_all_query = mysqli_query($db_connect, $select_all);
            $select_all_fetch = mysqli_fetch_assoc($select_all_query);
            if(!password_verify($password, $select_all_fetch['password'])){
                $_SESSION['password_err'] = 'Password Does Not Match';
                $flag = true;
            }
        }
    }
}

if($flag){
    header('location:login.php');
}
else{
    $_SESSION['access'] = $select_all_fetch['id'];
    header('location:user_dashboard.php');
}

?>