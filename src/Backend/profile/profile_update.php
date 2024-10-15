<?php
require '../db.php';
session_start();

$id = $_SESSION['access'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$photo = $_FILES['photo'];

$select = "SELECT * FROM users WHERE id = $id";
$select_exec = mysqli_query($db_connect, $select);
$select_assoc  = mysqli_fetch_assoc($select_exec);

if(!$photo['name'] == ''){
    $photo_name = $photo['name'];
    $explode = explode('.', $photo_name);
    $extension = end($explode);
    $allowed_extension = ['png', 'jpg', 'jpeg'];
    if(!in_array($extension, $allowed_extension)){
        $_SESSION['photo_err'] = 'Only PNG, JPG and JPEG is allowed';
        header('location:profile.php');
    }
    else{
        if(!$select_assoc['photo'] == ''){
            $location = "../uploads/users/".$select_assoc['photo'];
            $prev_filename = $select_assoc['photo'];
            unlink($location);

            $filename = uniqid().'.'.$extension;
            $new_location = '../uploads/users/'.$filename;
            move_uploaded_file($photo['tmp_name'], $new_location);

            $update = "UPDATE users SET name = '$name', gender = '$gender', photo = '$filename' WHERE id = $id";
            $update_exec = mysqli_query($db_connect, $update);
            $_SESSION['success'] = 'Profile updated successfully';
            header('location:profile.php');
        }
        else{
            $filename = uniqid().'.'.$extension;
            $new_location = '../uploads/users/'.$filename;
            move_uploaded_file($photo['tmp_name'], $new_location);

            $update = "UPDATE users SET name = '$name', gender = '$gender', photo = '$filename' WHERE id = $id";
            $update_exec = mysqli_query($db_connect, $update);
            $_SESSION['success'] = 'Profile updated successfully';
            header('location:profile.php');
        }



        
    }
}
else{
    $update = "UPDATE users SET name = '$name', gender = '$gender' WHERE id = $id";
    $update_exec = mysqli_query($db_connect, $update);
    $_SESSION['success'] = 'Profile updated successfully';
    header('location:profile.php');
}


?>