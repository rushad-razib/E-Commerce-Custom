<?php require 'header.php' ?>

<!-- Breadcrumbs Start -->
    <section id="bread" class="pt-2">
        <div class="w-[90%] lg:max-w-container mx-auto justify-start">
            <ul class="flex space-x-2">
                <li class="inline-block"><a href="index.php" class="text-base font-normal text-black hover:text-[#5093F7]">Home</a></li>
                <li class="inline-block"><i class="fas fa-chevron-right text-[12px]"></i></li>
                <li class="inline-block"><a href="cart.php" class="text-base font-normal text-black hover:text-[#5093F7]">Cart</a></li>
            </ul>
        </div>
    </section>
<!-- Breadcrumbs End -->

<!-- Dashboard Start -->

    <section id="dashboard" class="py-8">
        <div class="max-w-container mx-auto flex flex-row gap-x-4">
            <div class="w-1/3 flex flex-col p-8 border rounded gap-y-4">
                <h2 class="text-xl font-semibold px-4">Navigation</h2>
                <ul class="flex flex-col">
                    <li class="text-lg font-normal relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="">Dashboard</a></li>
                    <li class="text-lg font-normal relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="">Dashboard</a></li>
                    <li class="text-lg font-normal relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="">Dashboard</a></li>
                    <li class="text-lg font-normal relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="">Dashboard</a></li>
                    <li class="text-lg font-normal relative before:absolute before:content-'' before:bg-blue-500 before:h-0 before:w-[2px] before:left-0 before:top-0 hover:before:h-full before:transition-all before:duration-500 p-4 hover:bg-gray-200"><a class="hover:text-blue-500" href="">Dashboard</a></li>
                </ul>
            </div>
            <div class="w-2/3 flex flex-col gap-y-4">
                <div class="flex flex-row gap-x-2">
                    <div class="w-1/2 flex flex-col items-center gap-y-2 bg-[#EBF9EA] p-4 rounded">
                        <img src="../images/user.jpg" class="rounded-full" alt="">
                        <h3 class="text-xl font-semibold">User Name</h3>
                        <h4 class="text-base text-gray-600 font-semibold">email@email.com</h4>
                        <a href="" class="px-4 py-2 bg-[#F7931E] text-white rounded hover:bg-yellow-400 font-[500]">Edit Profile</a>
                    </div>
                    <div class="w-1/2 flex flex-col justify-center gap-y-2 bg-[#F4F7FC] p-8 rounded">
                        <h3 class="text-xl font-semibold">Default</h3>
                        <h4 class="text-base text-gray-600 font-semibold">User Name</h4>
                        <h4 class="text-base text-gray-600 font-semibold">Address: <span class="font-normal">4 Shady Pines Drive Bowling Green</span></h4>
                        <h4 class="text-base text-gray-600 font-semibold">Phone: <span class="font-normal"><a href="">270-957-9995</a></span></h4>
                        <h4 class="text-base text-gray-600 font-semibold">Email: <span class="font-normal">email@email.com</span></h4>
                    </div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-xl font-semibold">Recent Orders</h3>
                    <div class="overflow-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b-2 border-gray-200">
                                <tr>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Trash</th>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Product</th>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Name</th>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Order</th>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Quantity</th>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Status</th>
                                    <th class="p-3 font-semibold text-sm tracking text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                        <img src="../images/product-1.png">
                                    </td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">#012345</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">2</td>
                                    <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap capitalize">Paid</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                                </tr>
                                <tr>
                                    <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                        <img src="../images/product-1.png">
                                    </td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">#012345</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">2</td>
                                    <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap capitalize">Paid</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                                </tr>
                                <tr>
                                    <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                        <img src="../images/product-1.png">
                                    </td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">#012345</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">2</td>
                                    <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap capitalize">Paid</td>
                                    <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Dashboard End -->

<?php require 'footer.php' ?>