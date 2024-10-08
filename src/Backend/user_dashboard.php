<?php
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Start -->
    <section id="header" class="bg-gray-200 shadow-xl py-4 border-b-1 border-gray-900">
        <div class="w-11/12 flex flex-row mx-auto justify-between items-center">
            <img src="/Ecommerce/images/logo.png" height="50px" width="50px" alt="">
            <div class="inline-block space-x-2">
                <i class="fas fa-envelope p-2 rounded-full bg-gray-700 text-white hover:bg-white hover:shadow-sm hover:text-black transition-all duration-300"></i>
                <i class="fas fa-bell p-2 rounded-full bg-gray-700 text-white hover:bg-white hover:shadow-sm hover:text-black transition-all duration-300"></i>
                <i class="fas fa-user p-2 rounded-full bg-gray-700 text-white hover:bg-white hover:shadow-sm hover:text-black transition-all duration-300"></i>
            </div>
        </div>
    </section>
    <!-- Header End -->
    <!-- Body Start -->

        <div class="flex flex-row gap-x-4">
            <div class="w-1/5 flex flex-col shadow-xl border-r-1 border-gray-900 bg-gray-200 py-8 px-4 gap-y-2 min-h-[100vh]">
                <h3 class="text-lg font-semibold hover:cursor-pointer px-4 py-2 hover:bg-gray-800 hover:text-white transition-all duration-300">Dashboard</h3>
                <h3 class="text-lg font-semibold relative after:absolute after:content-'' after:bottom-0 after:left-0 after:w-full after:h-[1px] after:bg-gray-600">User Panel</h3>
                <ul class="w-full">
                    <li class="text-base font-semibold hover:cursor-pointer px-4 py-2 hover:bg-gray-800 hover:text-white transition-all duration-300 text-black "><a href="">Profile</a></li>
                </ul>
            </div>
            <div class="w-4/5"></div>
        </div>
    
    <!-- Body End -->
    

<script src="https://kit.fontawesome.com/c732b25177.js" crossorigin="anonymous"></script>
</body>
</html>

