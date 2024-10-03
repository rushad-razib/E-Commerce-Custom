<?php
    require 'header.php'
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

    <section id="cart" class="py-4">
        <div class="max-w-container mx-auto">
            <table class="flex table-auto text-start space-x-2">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Sub Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        <img src="../images/product-1.png">
                    </td>
                    <td>Multiplatform Wireless Noise-Cancelling Gaming Headset</td>
                    <td>79 BDT</td>
                    <td class="text-red-500">Pending</td>
                    <td>79 BDT</td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
            </table>
        </div>
    </section>

<!-- Cart Body End -->


<?php
    require 'footer.php'
?>