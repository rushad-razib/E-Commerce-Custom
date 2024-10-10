<?php
    require 'includes/header.php'
?>

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

<!-- Cart Body Start -->

    <section id="cart" class="py-6">
        <div class="max-w-container mx-auto">
            <div class="overflow-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th class="p-3 font-semibold text-sm tracking text-center">SL</th>
                            <th class="p-3 font-semibold text-sm tracking text-center">Product</th>
                            <th class="p-3 font-semibold text-sm tracking text-center">Name</th>
                            <th class="p-3 font-semibold text-sm tracking text-center">Unit Price</th>
                            <th class="p-3 font-semibold text-sm tracking text-center">Quantity</th>
                            <th class="p-3 font-semibold text-sm tracking text-center">Sub Total</th>
                            <th class="p-3 font-semibold text-sm tracking text-center">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">1</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <img src="../images/product-1.png">
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <div class="flex items-center justify-between px-4 py-2 bg-gray-100 border rounded-full cursor-pointer select-none">
                                        <span class="minus">-</span>
                                        <span class="px-2 quantity">1</span>
                                        <span class="plus">+</span>
                                </div>
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">2</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <img src="../images/product-1.png">
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <div class="flex items-center justify-between px-4 py-2 bg-gray-100 border rounded-full cursor-pointer select-none">
                                        <span class="minus">-</span>
                                        <span class="px-2 quantity">1</span>
                                        <span class="plus">+</span>
                                </div>
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">3</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <img src="../images/product-1.png">
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <div class="flex items-center justify-between px-4 py-2 bg-gray-100 border rounded-full cursor-pointer select-none">
                                        <span class="minus">-</span>
                                        <span class="px-2 quantity">1</span>
                                        <span class="plus">+</span>
                                </div>
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td class="w-1/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">4</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <img src="../images/product-1.png">
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">
                                <div class="flex items-center justify-between px-4 py-2 bg-gray-100 border rounded-full cursor-pointer select-none">
                                        <span class="minus">-</span>
                                        <span class="px-2 quantity">1</span>
                                        <span class="plus">+</span>
                                </div>
                            </td>
                            <td class="w-2/12 text-sm p-3 font-normal text-gray-700 text-center whitespace-nowrap">79 BDT</td>
                            <td class="w-1/12 text-base p-3 font-normal text-red-700 text-center whitespace-nowrap"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<!-- Cart Body End -->

    

<?php
    require 'includes/footer.php'
?>