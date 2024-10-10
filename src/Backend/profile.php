<?php 
require 'includes/header.php';


$select = "SELECT * FROM users where id='$id'";
$select_query = mysqli_query($db_connect, $select);
$select_fetch_assoc = mysqli_fetch_assoc($select_query);
?>

<div class="flex flex-row gap-x-4 m-4">
    <div class="w-1/2 flex flex-col bg-white shadow-xl rounded gap-y-3 p-8">
        <h3 class="font-semibold text-lg relative after:absolute after:content-'' after:left-0 after:-bottom-1 after:w-full after:h-[1px] after:bg-gray-200">Profile Edit</h3>
        <form action="register_post.php" method="POST"">
                <div class="flex flex-col gap-y-2">
                    <div class="flex flex-col gap-y-1">
                        <label for="name" class="text-base font-semibold">User Name</label>
                        <input type="text" name="name" value="<?=$select_fetch_assoc['name']?>" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Full Name">
                        <?php if(isset($_SESSION['name_err'])){ ?>
                            <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['name_err']?></strong>
                        <?php }unset($_SESSION['name_err']) ?>
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
                        <label for="photo" class="text-base font-semibold">Profile Image</label>
                        <input type="file" name="photo" value="<?=(isset($_SESSION['photo'])?$_SESSION['name']:'')?>" class="px-4 py-2">
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <button type="submit" class="px-4 py-2 bg-blue-500 shadow-lg rounded text-white font-semibold w-full hover:bg-cyan-500 transition-all duration-300">Update</button>
                    </div>
                </div>
            </form>
    </div>
</div>


<?php require 'includes/footer.php' ?>