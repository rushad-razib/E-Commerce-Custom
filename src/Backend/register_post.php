<?php
session_start();
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_pass = password_hash($password, PASSWORD_DEFAULT);
$con_password = $_POST['con_password'];
$gender = $_POST['gender'];
$upper = preg_match('*[A-Z]*', $password);
$lower = preg_match('*[a-z]*', $password);
$numbers = preg_match('*[0-9]*', $password);
$symbol = preg_match('*[!,@,#,$,%,,^,&,(,)]*', $password);

$flag = false;

if(empty($name)){
    $_SESSION['name_err'] = 'Please Enter Your Full Name';
    $flag = true;
}
else{
    $_SESSION['name'] = $name;
}

if(empty($email)){
    $_SESSION['email_err'] = 'Please Enter Email Address';
    $flag = true;
}
else{
    $select = "SELECT COUNT(*) as total FROM users where email = '$email'";
    $select_query = mysqli_query($db_connect, $select);
    $select_fetch = mysqli_fetch_assoc($select_query);

    if($select_fetch['total'] != 0){
        $_SESSION['email_err'] = 'Email Already Exists';
        $flag = true;
    }
    else{
        $_SESSION['email'] = $email;
    }
    
}
if(empty($email)){
    $_SESSION['gender_err'] = 'Please Select Your Gender';
    $flag = true;
}
else{
    $_SESSION['gender'] = $gender;
}
if(empty($password)){
    $_SESSION['password_err'] = 'Please Enter Password';
    $flag = true;
}
else{
    if(!$upper || !$lower || !$numbers || !$symbol || (strlen($password) < 8)){
        $_SESSION['password_err'] = 'Minimum password size is 8 characters and must atleast one uppercase, lowercase, special character and number';
        $flag = true;
    }
}
if(empty($con_password)){
    $_SESSION['con_password_err'] = 'Please Confirm Your Password';
    $flag = true;
}
else{
    if($con_password != $password){
        $_SESSION['con_password_err'] = 'Confirm Password Does Not Match';
        $flag = true;
    }
}



if($flag){
    header('location:register.php');
}
else{
    $insert = "INSERT INTO users(name, email, password, gender) VALUE('$name', '$email', '$hash_pass', '$gender')";
    mysqli_query($db_connect, $insert);
    $_SESSION['success'] = 'User Registration Successful!';
    header('location:register.php');
}

?>