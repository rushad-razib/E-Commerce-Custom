<?php
    require 'includes/header.php';
?>

<!-- Breadcrumbs Start -->
<section id="bread" class="pt-2">
        <div class="w-[90%] lg:max-w-container mx-auto justify-start">
            <ul class="flex space-x-2 text-base font-normal">
                <li class="inline-block"><a href="index.php" class="text-base font-normal text-black hover:text-[#5093F7]">Home</a></li>
                <li class="inline-block"><i class="fas fa-chevron-right text-[12px]"></i></li>
                <li class="inline-block"><a href="cart.php" class="text-base font-normal text-black hover:text-[#5093F7]">Cart</a></li>
            </ul>
        </div>
    </section>
<!-- Breadcrumbs End -->
<!-- Checkout Start -->
<section id="checkout" class="py-8">
    <div class="max-w-container mx-auto flex flex-col lg:flex-row gap-x-10 lg:gap-x-20 px-5 lg:px-0">
        <div class="gap-y-2 w-full lg:w-2/5">
            <h3 class="text-xl font-semibold">Billing Details</h3>
            <form action="">
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">First Name</label>
                    <input type="text" placeholder="Enter Your First Name" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Last Name</label>
                    <input type="text" placeholder="Enter Your Last Name" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Email</label>
                    <input type="email" placeholder="Enter Your Email Address" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Company Name</label>
                    <input type="text" placeholder="Enter Your Company Name" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Country/Region</label>
                    <input type="text" placeholder="Enter Country" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Street Address</label>
                    <input type="text" placeholder="Street Address 1" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                    <input type="text" placeholder="Street Address 2" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Phone</label>
                    <input type="number" placeholder="Enter Your Phone Number" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600">
                </div>
                <div class="py-2 space-y-2">
                    <label for="" class="text-base">Additional info</label>
                    <textarea name="" id="" rows="3" cols="4" placeholder="Additional information" class="w-full text-base block border rounded px-4 py-2 focus:outline-none focus:ring-0 focus:border-gray-600"></textarea>
                </div>
            </form>
        </div>
        <div class="w-full lg:w-3/5 flex flex-col gap-y-5">
            <h3 class="text-xl font-semibold">Your Order</h3>
            <table class="w-full">
                <thead class="border-gray-50 border-b-2 bg-gray-200 text-left">
                    <tr>
                        <th class="px-2 font-semibold text-base lg:text-lg">Product</th>
                        <th class="px-2 font-semibold text-base lg:text-lg">Quantity</th>
                        <th class="px-2 font-semibold text-base lg:text-lg">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="w-3/5 p-2 lg:p-4 border text-base px-4 font-normal text-gray-500">GPS Smartwatch with Bright...</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold">79<sub class="pl-1 text-xs">X2</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold">$256</td>
                    </tr>
                    <tr>
                        <td class="w-3/5 p-2 lg:p-4 border text-base px-4 font-normal text-gray-500">GPS Smartwatch with Bright...</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold">79<sub class="pl-1 text-xs">X2</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold">$256</td>
                    </tr>
                    <tr>
                        <td class="w-3/5 p-2 lg:p-4 border text-base px-4 font-normal text-gray-500">GPS Smartwatch with Bright...</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold">79<sub class="pl-1 text-xs">X2</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold">$256</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="w-3/5 p-2 lg:p-4 border text-base px-4 font-normal">Sub Total</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold text-blue-500">$256</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="w-3/5 p-2 lg:p-4 border text-base px-4 font-normal">Total</td>
                        <td class="w-1/5 p-2 lg:p-4 border text-base px-4 font-semibold text-blue-500">$256</td>
                    </tr>
                </tbody>
            </table>
            <h3 class="text-xl font-semibold">Payment Option</h3>
            <form action="">
                <div class="py-1 space-x-2 text-base font-normal">
                    <input type="radio" id="op" name="payment" value="op">
                    <label for="op">Online Payment</label>
                </div>
                <div class="py-1 space-x-2 text-base font-normal">
                    <input type="radio" id="cod" name="payment" value="cod">
                    <label for="cod">Cash on Delivery</label>
                </div>
            </form>
            <div class="py-2">
                <button class="px-4 py-2 bg-[#F7931E] rounded hover:bg-[#f7921ee8] text-white font-semibold text-normal" type="submit">Place Order</button>
            </div>
        </div>
    </div>
</section>
<!-- Checkout End -->

<?php
    require 'includes/footer.php';
?>