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
    <section id="admin_login" class="bg-gradient-to-t from-cyan-200 to-blue-500 min-h-[100vh]">
        <div class="w-5/6 lg:max-w-container mx-auto flex justify-center items-center h-full py-4">
            <div class="w-1/2 flex flex-col bg-white p-4 lg:px-8 shadow-xl border rounded">
                <h3 class="text-lg font-bold text-center">Admin Panel</h3>
                <h3 class="text-sm font-normal text-center pb-1">Create Account</h3>
                <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert px-4 py-2 rounded bg-green-400 text-white text-center"><?=$_SESSION['success']?></div>
                <?php }unset($_SESSION['success']) ?>
                <form action="register_post.php" method="POST"">
                    <div class="flex flex-col gap-y-2">
                    <div class="flex flex-col gap-y-1">
                        <label for="name" class="text-base font-semibold">User Name</label>
                        <input type="text" name="name" value="<?=(isset($_SESSION['name'])?$_SESSION['name']:'')?>" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Full Name">
                        <?php if(isset($_SESSION['name_err'])){ ?>
                            <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['name_err']?></strong>
                        <?php }unset($_SESSION['name_err']) ?>
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <label for="email" class="text-base font-semibold">Admin Email</label>
                        <input type="email" name="email" value="<?=(isset($_SESSION['email'])?$_SESSION['email']:'')?>" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Valid Email">
                        <?php if(isset($_SESSION['email_err'])){ ?>
                            <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['email_err']?></strong>
                        <?php }unset($_SESSION['email_err']) ?>
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <label for="password" class="text-base font-semibold">Password</label>
                        <div class="relative">
                            <input type="password" name="password" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password">
                            <i class="fas fa-eye p-[13px] rounded bg-blue-500 text-white absolute right-0 bottom-0"></i>
                        </div>
                        <?php if(isset($_SESSION['password_err'])){ ?>
                            <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['password_err']?></strong>
                        <?php }unset($_SESSION['password_err']) ?>
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <label for="password" class="text-base font-semibold">Confirm Password</label>
                        <div class="relative">
                            <input type="password" name="con_password" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Confirm Password">
                            <i class="fas fa-eye p-[13px] rounded bg-blue-500 text-white absolute right-0 bottom-0"></i>
                        </div>
                        <?php if(isset($_SESSION['con_password_err'])){ ?>
                            <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['con_password_err']?></strong>
                        <?php }unset($_SESSION['con_password_err']) ?>
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <label for="gender" class="text-base font-semibold block">Gender</label>
                        <div class="flex flex-row gap-x-4">
                            <?php
                                $gender = '';
                                if(isset($_SESSION['gender'])){
                                    $gender =  $_SESSION['gender'];
                                }
                                else{
                                    $gender = '';
                                }
                                unset($_SESSION['gender']);
                            ?>
                            <div>
                            <input  <?=($gender=='male'?'checked':'')?> type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            </div>
                            <div>
                            <input <?=($gender=='female'?'checked':'')?> type="radio" id="female" name="gender" value="female">
                            <label for="female">female</label>
                            </div>
                        </div>
                        <?php if(isset($_SESSION['gender_err'])){ ?>
                            <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['gender_err']?></strong>
                        <?php }unset($_SESSION['gender_err']) ?>
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <button type="submit" class="px-4 py-2 bg-blue-500 shadow-lg rounded text-white font-semibold w-full hover:bg-cyan-500 transition-all duration-300">Register</button>
                    </div>
                    </div>
                </form>
                <h3 class="text-sm font-normal text-center pt-4">Already have an account? <a class="text-red-800 font-semibold hover:text-blue-600" href="login.php">Login</a></h3>
                <h3 class="text-sm font-normal text-center text-red-600">* Please do not share this Credientials with anyone *</h3>
            </div>
        </div>
    </section>


    <?php
        unset($_SESSION['name']);
        unset($_SESSION['email']);
    ?>

    <script src="https://kit.fontawesome.com/c732b25177.js" crossorigin="anonymous"></script>
</body>
</html>