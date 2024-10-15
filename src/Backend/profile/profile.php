<?php 

require '../db.php';
require '../includes/header.php';


$select = "SELECT * FROM users where id='$id'";
$select_query = mysqli_query($db_connect, $select);
$select_fetch_assoc = mysqli_fetch_assoc($select_query);
?>

<div class="flex flex-row gap-x-4 m-4">
    <div class="w-1/2 flex flex-col bg-white shadow-xl rounded gap-y-3 p-8">
        <h3 class="font-semibold text-lg relative after:absolute after:content-'' after:left-0 after:-bottom-1 after:w-full after:h-[1px] after:bg-gray-200">Profile Edit</h3>
        <?php if(isset($_SESSION['success'])){ ?>
            <h3 class="w-full px-4 py-2 bg-green-300 text-white font-semibold text-center"><?=$_SESSION['success']?></h3>
        <?php }unset($_SESSION['success']) ?>
        <form action="profile_update.php" method="POST" enctype="multipart/form-data">
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-1">
                    <label for="name" class="text-base font-semibold">User Name</label>
                    <input type="text" name="name" value="<?=$select_fetch_assoc['name']?>" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Full Name">
                </div>
                <div class="flex flex-col gap-y-1">
                    <label for="gender" class="text-base font-semibold block">Gender</label>
                    <div class="flex flex-row gap-x-4">
                        <div>
                        <input  <?=($select_fetch_assoc['gender']=='male'?'checked':'')?> type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        </div>
                        <div>
                        <input <?=($select_fetch_assoc['gender']=='female'?'checked':'')?> type="radio" id="female" name="gender" value="female">
                        <label for="female">female</label>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['gender_err'])){ ?>
                        <strong class="text-red-500 font-semibold text-sm"><?=$_SESSION['gender_err']?></strong>
                    <?php }unset($_SESSION['gender_err']) ?>
                </div>
                <div class="flex flex-col gap-y-1">
                    <label for="photo" class="text-base font-semibold">Profile Image</label>
                    <input type="file" name="photo" class="px-4 py-2" onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0])">
                    <img src="../uploads/users/<?=$select_fetch_assoc['photo']?>" width="200" alt="" id="photo">
                    <?php if(isset($_SESSION['photo_err'])){ ?>
                        <strong class="w-full py-2 text-red-700"><?=$_SESSION['photo_err']?></strong>
                    <?php }unset($_SESSION['photo_err']) ?>
                </div>
                <div class="flex flex-col gap-y-1">
                    <button type="submit" class="px-4 py-2 bg-blue-500 shadow-lg rounded text-white font-semibold w-full hover:bg-cyan-500 transition-all duration-300">Update</button>
                </div>
            </div>
        </form>
    </div>
    <div class="w-1/2 flex flex-col bg-white shadow-xl rounded gap-y-3 p-8">
        <h3 class="font-semibold text-lg relative after:absolute after:content-'' after:left-0 after:-bottom-1 after:w-full after:h-[1px] after:bg-gray-200">Update Password</h3>
        <?php if(isset($_SESSION['password_success'])){ ?>
            <h3 class="w-full px-4 py-2 bg-green-300 text-white font-semibold text-center"><?=$_SESSION['password_success']?></h3>
        <?php }unset($_SESSION['password_success']) ?>
        <form action="password_update.php" method="POST">
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-1">
                    <label for="current_pass" class="text-base font-semibold">Current Password</label>
                    <div class="relative">
                        <input type="password" name="current_pass" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Current Password">
                        <i class="fas fa-eye p-[13px] rounded bg-blue-500 text-white absolute right-0 bottom-0"></i>
                    </div>
                    <?php if(isset($_SESSION['current_pass_err'])){ ?>
                        <strong class="text-red-500 font-bold text-sm"><?=$_SESSION['current_pass_err']?></strong>
                    <?php }unset($_SESSION['current_pass_err']) ?>
                </div>
                <div class="flex flex-col gap-y-1">
                    <label for="password" class="text-base font-semibold">New Password</label>
                    <div class="relative">
                        <input type="password" name="password" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter New Password">
                        <i class="fas fa-eye p-[13px] rounded bg-blue-500 text-white absolute right-0 bottom-0"></i>
                    </div>
                    <?php if(isset($_SESSION['password_err'])){ ?>
                        <strong class="text-red-500 font-bold text-sm"><?=$_SESSION['password_err']?></strong>
                    <?php }unset($_SESSION['password_err']) ?>
                </div>
                <div class="flex flex-col gap-y-1">
                    <label for="confirm_pass" class="text-base font-semibold">Confirm Password</label>
                    <div class="relative">
                        <input type="password" name="confirm_pass" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Current Password">
                        <i class="fas fa-eye p-[13px] rounded bg-blue-500 text-white absolute right-0 bottom-0"></i>
                    </div>
                    <?php if(isset($_SESSION['confirm_pass_err'])){ ?>
                        <strong class="text-red-500 font-bold text-sm"><?=$_SESSION['confirm_pass_err']?></strong>
                    <?php }unset($_SESSION['confirm_pass_err']) ?>
                </div>
                <div class="flex flex-col gap-y-1 pt-2">
                    <button type="submit" class="px-4 py-2 bg-blue-500 shadow-lg rounded text-white font-semibold w-full hover:bg-cyan-500 transition-all duration-300">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require '../includes/footer.php' ?>