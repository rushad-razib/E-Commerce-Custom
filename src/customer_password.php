<?php require "includes/header.php"; ?>

<!-- Breadcrumbs Start -->
    <section id="bread" class="pt-2">
        <div class="w-[90%] lg:max-w-container mx-auto justify-start">
            <ul class="flex space-x-2">
                <li class="inline-block"><a href="index.php" class="text-base font-normal text-black hover:text-[#5093F7]">Home</a></li>
                <li class="inline-block"><i class="fas fa-chevron-right text-[12px]"></i></li>
                <li class="inline-block"><a href="customer_password.php" class="text-base font-normal text-black hover:text-[#5093F7]">Password</a></li>
            </ul>
        </div>
    </section>
<!-- Breadcrumbs End -->

<!-- Dashboard Start -->

    <section id="dashboard" class="py-8">
        <div class="max-w-container mx-auto flex flex-col lg:flex-row gap-x-4 px-2 gap-y-4">
            <div class="w-full lg:w-1/3 flex flex-col p-8 border rounded gap-y-4">
                <h2 class="text-2xl font-semibold relative after:absolute after:content-'' after:-bottom-2 after:left-0 after:w-full after:h-[1px] after:bg-gray-400 px-4">Navigation</h2>
                <ul class="flex flex-col">
                    <li class="text-base font-[500] relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="customer_dashboard.php">Dashboard</a></li>
                    <li class="text-base font-[500] relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="customer_profile.php">Profile Update</a></li>
                    <li class="text-base font-[500] relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="customer_address.php">Edit Address</a></li>
                    <li class="text-base font-[500] relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="customer_password.php">Password</a></li>
                    <li class="text-base font-[500] relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="">Logout</a></li>
                </ul>
            </div>
            <div class="w-full lg:w-2/3 flex flex-col gap-y-4 border rounded p-4">
                <h3 class="font-[500] text-xl">Change Password</h3>
                <p class="font-normal text-base">Here you can change your password please fill up the form.</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="flex flex-col gap-y-2 w-full">
                        <label for="current_pass" class="text-sm">Current Password</label>
                        <div class="relative">
                            <input type="password" name="current_pass" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Current Password">
                            <i class="fas fa-eye p-[13px] rounded bg-[#F7931E] text-white absolute right-0 bottom-0"></i>
                        </div>
                        <label for="password" class="text-sm">New Password</label>
                        <div class="relative">
                            <input type="password" name="password" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter New  Password">
                            <i class="fas fa-eye p-[13px] rounded bg-[#F7931E] text-white absolute right-0 bottom-0"></i>
                        </div>
                        <label for="confirm_pass" class="text-sm">Confirm Password</label>
                        <div class="relative">
                            <input type="password" name="confirm_pass" class="border rounded w-full px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Confirm Your Password">
                            <i class="fas fa-eye p-[13px] rounded bg-[#F7931E] text-white absolute right-0 bottom-0"></i>
                        </div>
                        
                    </div>
                    <button class="mt-4 px-6 py-2 rounded bg-[#F7931E] hover:bg-[#FFCA2C] font-normal text-base text-white" type="submit">Update</button>
                </form>
            </div>
        </div>
    </section>

<!-- Dashboard End -->

<?php require 'includes/footer.php' ?>
                