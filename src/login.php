<?php
    require 'header.php';
?>
    <!-- Body Start -->
    <!-- Breadcrumbs Start-->
    <section id="bread" class="pt-2">
        <div class="w-[90%] lg:max-w-container mx-auto justify-start">
            <ul class="flex space-x-2">
                <li class="inline-block"><a href="index.php" class="text-base font-normal text-black hover:text-[#5093F7]">Home</a></li>
                <li class="inline-block"><i class="fas fa-chevron-right text-[12px]"></i></li>
                <li class="inline-block"><a href="" class="text-base font-normal text-black hover:text-[#5093F7]">login</a></li>
            </ul>
        </div>
    </section>
    <!-- Breadcrumbs End -->
    <section id="login" class="py-3 lg:py-6">
        <div class="w-4/5 lg:w-3/5 mx-auto flex justify-start border border-[#F4F0F1] rounded">
            <div class="w-2/5 hidden lg:block">
                <img src="../images/login.png" alt="" class="rounded-s h-full">
            </div>
            <div class="w-full lg:w-3/5 p-[25px] lg:p-[50px] flex-col space-y-4">
                <div class="flex gap-x-5">
                    <h3 class="py-2 px-3 bg-[#F7F7F7] rounded text-[22px] font-normal relative after:absolute after:content-'' after:h-1 after:w-full after:left-0 after:bottom-0 after:bg-red-500">Login</h3>
                    <h3 class="py-2 px-3 rounded text-[22px] font-normal hover:bg-[#F7F7F7] relative after:absolute after:content-'' after:h-1 after:w-full after:left-0 after:bottom-0 after:bg-transparent hover:after:bg-red-500 transition-all duration-500"><a href="register.php">Register</a></h3>
                </div>
                <h3 class="text-base font-normal text-black">If you have an account, sign in with your username or email address.</h3>
                <form action="" method="">
                    <div class="flex flex-col">
                        <div class="py-2 space-y-2">
                            <label for="" class="block text-base font-normal text-black">Username or Email Address *</label>
                            <input type="text" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter your user name">
                        </div>
                        <div class="py-2 space-y-2">
                            <label for="" class="block text-base font-normal text-black">Your Password *</label>
                            <input type="password" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter your password">
                        </div>
                        <div class="py-2 flex flex-col lg:flex-row justify-between">
                            <div class="flex flex-row items-center gap-x-2">
                                <input type="checkbox" id="remember" name="remember" value="Bike">
                                <label for="remember" class="text-[#212529]">Remember</label>
                            </div>
                            <h3 class="text-base font-normal text-blue-500 underline flex"><a href="">Lost Your Password?</a></h3>
                        </div>
                        <div class="py-2">
                            <button type="submit" class="w-full rounded px-4 py-2 bg-[#F7931E] text-white teext-base font-semibold">Login</button>
                        </div>
                    </div>
                </form>
                <div class="flex gap-x-1">
                    <h3 class="text-base font-normal">Don't have an account?</h3>
                    <h3 class="text-base font-semibold text-blue-500"><a href="register.php">Register</a></h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Body End -->


<?php
    require 'footer.php';
?>