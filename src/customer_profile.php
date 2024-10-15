<?php require "includes/header.php"; ?>

<!-- Breadcrumbs Start -->
    <section id="bread" class="pt-2">
        <div class="w-[90%] lg:max-w-container mx-auto justify-start">
            <ul class="flex space-x-2">
                <li class="inline-block"><a href="index.php" class="text-base font-normal text-black hover:text-[#5093F7]">Home</a></li>
                <li class="inline-block"><i class="fas fa-chevron-right text-[12px]"></i></li>
                <li class="inline-block"><a href="customer_profile.php" class="text-base font-normal text-black hover:text-[#5093F7]">Profile</a></li>
            </ul>
        </div>
    </section>
<!-- Breadcrumbs End -->

<!-- Dashboard Start -->

    <section id="dashboard" class="py-8">
        <div class="max-w-container mx-auto flex flex-col lg:flex-row gap-x-4 gap-y-4 px-2">
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
            <div class="w-full lg:w-2/3 flex flex-col gap-y-4 px-4 lg:px-0">
                <h3 class="font-[500] text-xl">Edit Profile</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="flex flex-col gap-y-2 w-full">
                        <div class="flex flex-col lg:flex-row gap-x-4 items-center">
                            <div class="flex flex-col w-full lg:w-1/2 gap-y-2">
                                <label for="fname" class="text-sm">First Name</label>
                                <input type="text" name="fname" class="px-4 py-2 border rounded focus:ring-0 focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="flex flex-col w-full lg:w-1/2 gap-y-2">
                                <label for="lname" class="text-sm">last Name</label>
                                <input type="text" name="lname" class="px-4 py-2 border rounded focus:ring-0 focus:border-gray-600 focus:outline-none">
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-x-4 items-center">
                            <div class="flex flex-col w-full lg:w-1/2 gap-y-2">
                                <label for="email" class="text-sm">Email Address</label>
                                <input type="email" name="email" class="px-4 py-2 border rounded focus:ring-0 focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="flex flex-col w-full lg:w-1/2 gap-y-2">
                                <label for="phone" class="text-sm">Phone Number</label>
                                <input type="number" name="phone" class="px-4 py-2 border rounded focus:ring-0 focus:border-gray-600 focus:outline-none">
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-start">
                            <div class="flex flex-col w-full lg:w-1/2 gap-y-2">
                                <label for="image" class="text-sm">Change Your Image</label>
                                <input type="file" name="photo" class="px-4 py-2 border rounded focus:outline-none focus:ring-0" onchange="document.getElementById('customer_photo').src = window.URL.createObjectURL(this.files[0])">
                                <img src="" alt="" id="customer_photo" width="200">
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 px-6 py-2 rounded bg-[#F7931E] hover:bg-[#FFCA2C] font-normal text-base text-white" type="submit">Update</button>
                </form>
            </div>
        </div>
    </section>

<!-- Dashboard End -->

<?php require 'includes/footer.php' ?>
                