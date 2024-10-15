<?php
session_start();

if(!isset($_SESSION['access'])){
    header('location:login.php');
}
else{
    $id = $_SESSION['access'];

    $select = "SELECT * FROM users where id='$id'";
    $select_query = mysqli_query($db_connect, $select);
    $select_fetch_assoc = mysqli_fetch_assoc($select_query);
}
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/Ecommerce/src/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Start -->
    <section>
        <div id="header" class="flex flex-row bg-white shadow-xl">
            <div class="w-3/12 flex flex-col shadow-xl bg-white border-r-1 border-gray-900 py-4 px-4 gap-y-2 min-h-[100vh] justify-start">
                    <img src="/Ecommerce/images/logo.png" width="70px" alt="">
                    <div class="flex flex-col gap-y-2 pt-8">
                        <h3 class="text-lg font-semibold hover:cursor-pointer px-4 py-2 hover:bg-gray-800 hover:text-white transition-all duration-300"><a href="/Ecommerce/src/backend/user_dashboard.php">Dashboard</a></h3>
                        <h3 class="text-lg font-semibold relative after:absolute after:content-'' after:bottom-0 after:left-0 after:w-full after:h-[1px] after:bg-gray-600">User Panel</h3>
                        <ul class="w-full">
                            <li class="text-base font-semibold hover:cursor-pointer px-4 py-2 hover:bg-gray-800 hover:text-white transition-all duration-300 text-black "><a href="../profile/profile">Profile</a></li>
                        </ul>
                    </div>
            </div>
            <div class="w-9/12 flex flex-col gap-y-2">
                <div class="w-full flex flex-row mx-auto justify-end items-center max-h-[50px] px-8 py-8 bg-white shadow-xl border-b-1 border-gray-900">
                    <div class="flex flex-row items-center space-x-2">
                        <i class="fas fa-envelope p-2 rounded-full bg-gray-700 text-white hover:bg-white hover:shadow-xl hover:text-black transition-all duration-300"></i>
                        <i class="fas fa-bell p-2 rounded-full bg-gray-700 text-white hover:bg-white hover:shadow-xl hover:text-black transition-all duration-300"></i>
                        <div class="relative">

                            <?php if($select_fetch_assoc['photo'] == null){?>
                                <i class="fas fa-user p-2 rounded-full bg-gray-700 text-white hover:bg-white hover:shadow-xl hover:text-black transition-all duration-300" id="user_profile_focus"></i>
                            <?php }else{?>
                                    <img src="/Ecommerce/src/backend/uploads/users/<?=$select_fetch_assoc['photo']?>" width="50" height="50" class="rounded-full p-2" id="user_profile_focus">
                            <?php }?>
                            <div class="flex flex-col justify-center gap-y-2 py-4 px-4 shadow-xl bg-white absolute top-full right-0 min-h-[100px] min-w-[150px] invisible z-10" id="profile_min">
                                <img src="/Ecommerce/src/backend/uploads/users/<?=$select_fetch_assoc['photo']?>" width="150" class="rounded-full p-2">
                                <h3 class="text-base font-semibold relative after:absolute after:content-'' after:h-[1px] after:w-full after:bg-gray-200 after:-top-2 after:left-0"><a href="" class="text-black hover:text-blue-500">Profile Edit</a></h3>
                                <h3 class="text-base font-semibold"><a href="../logout.php" class="text-black hover:text-blue-500">Log Out</a></h3>
                            </div>
                        </div>
                    </div>
                </div>