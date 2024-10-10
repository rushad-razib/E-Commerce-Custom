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
<!-- Product Detials Start -->

<section id="product_detials" class="py-10">
    <div class="max-w-container mx-auto flex flex-col lg:flex-row gap-x-20 px-4 lg:px-0 gap-y-10 lg:gap-y-0">
        <div class="flex flex-col w-full lg:w-1/2 gap-y-5 relative after:absolute after:content-['-10%'] after:left-8 after:top-8 after:px-5 after:py-2 after:bg-red-500 after:rounded-full after:text-white">
            <img src="../images/product_landing.png" alt="" class="border border-gray-400 p-4 lg:p-20 rounded ">
            <div class="flex flex-row justify-center items-center gap-x-2">
                <img src="../images/product_landing.png" width="100px" height="100px" alt="" class="border border-gray-400 p-4 rounded">
                <img src="../images/product_landing.png" width="100px" height="100px" alt="" class="border border-gray-400 p-4 rounded">
                <img src="../images/product_landing.png" width="100px" height="100px" alt="" class="border border-gray-400 p-4 rounded">
            </div>
        </div>
        <div class="flex flex-col w-full lg:w-1/2 gap-y-4">
            <span class="flex flex-row">
                <h3 class="px-4 py-2 font-normal text-sm text-[#4A8D16] bg-[#EBF4E4] rounded">In Stock</h3>
            </span>
            <h2 class="font-[500] text-2xl">Apple MacBook Pro 16.2" with Liquid Retina XDR Display, M2 Max Chip with 1cursor-pointer 2-Core CPU</h2>
            <div cl hover:bg-[#f7f7f7]ass="flex flex-row gap-x-1 relative after:absolute after:content-[''] after:h-[2px] after:w-full after:bg-gray-300 after:left-0 after:-bottom-5">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <h4 class="text-sm font-normal pl-2">(5 Reviews)</h4>
            </div>
            <div class="flex flex-row gap-x-2 pt-2">
                <h4 class="text-2xl font-[500] text-gray-900">$399</h4>
                <h4 class="text-2xl font-[500] text-gray-500 line-through">$450</h4>
            </div>
            <div class="flex flex-col gap-y-2">
                <span class="flex flex-row gap-x-2">
                    <h5 class="text-sm font-normal">Style:</h5>
                    <h5 class="text-sm font-semibold style">Apple M1 Max Chip</h5>
                </span>
                <span class="flex flex-row gap-x-2">
                    <button href="#" class="text-sm font-semibold px-4 py-1 bg-[#EBF4E4] border rounded focus:ring-1 focus:ring-red-500 " id="opt1">Apple M1 Max Chip</button>
                    <button href="#" class="text-sm font-semibold px-4 py-1 bg-[#EBF4E4] border rounded focus:ring-1 focus:ring-red-500" id="opt2">Apple M1 Pro Chip</button>
                </span>
            </div>
            <div class="flex flex-col gap-y-2">
                <span class="flex flex-row gap-x-2">
                    <h5 class="text-sm font-normal">Capaciy:</h5>
                    <h5 class="text-sm font-semibold capacity">512 GB</h5>
                </span>
                <span class="flex flex-row gap-x-2">
                    <button href="#" class="text-sm font-semibold px-4 py-1 bg-[#EBF4E4] border rounded focus:ring-1 focus:ring-red-500 " id="capacity1">512 GB</button>
                    <button href="#" class="text-sm font-semibold px-4 py-1 bg-[#EBF4E4] border rounded focus:ring-1 focus:ring-red-500" id="capacity2">1 TB</button>
                </span>
            </div>
            <div class="flex flex-col gap-y-2">
                <span class="flex flex-row gap-x-2">
                    <h5 class="text-sm font-normal">Color:</h5>
                    <h5 class="text-sm font-semibold color">Silver</h5>
                </span>
                <span class="flex flex-row gap-x-2">
                    <button href="#" class="text-sm font-semibold p-4 bg-[#F1F1F1] border rounded-full focus:ring-1 focus:ring-red-500 " id="color1"></button>
                    <button href="#" class="text-sm font-semibold p-4 bg-[#B9BCC2] border rounded-full focus:ring-1 focus:ring-red-500 " id="color2"></button>
                </span>
            </div>
            <div class="flex flex-row gap-x-2">
                <div class="flex justify-between items-center px-4 py-2 bg-gray-100 border rounded-full cursor-pointer select-none">
                        <span class="minus">-</span>
                        <span class="px-4 quantity">1</span>
                        <span class="plus">+</span>
                </div>
                <button class="px-4 py-2 bg-[#61961c] hover:bg-[#157347] text-white rounded-full"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
            <div class="flex flex-row gap-x-4 items-center">
                <i class="far fa-heart p-2 rounded-full bg-gray-300 text-gray-700 text-sm"></i>
                <h4 class="text-sm font-semibold hover:text-[#61961c]"><a href="">Add to Wishlist</a></h4>
            </div>
            <div class="flex flex-row gap-x-4 items-center relative after:absolute after:content-[''] after:h-[2px] after:w-full after:bg-gray-300 after:left-0 after:-bottom-5">
                <i class="far fa-eye p-2 rounded-full bg-gray-300 text-gray-700 text-sm"></i>
                <h4 class="text-sm font-normal capitalize">565 people <span class="font-semibold">are viewing the products</span></h4>
            </div>
            <div class="icon-box flex flex-col hover:bg-[#f7f7f7]l pt-4 gap-y-2 relative after:absolute after:content-[''] after:h-[2px] after:w-full after:bg-gray-300 after:left-0 after:-bottom-5">
                <div class="icon-list flex flex-row gap-x-2 items-center">
                    <i class="fas fa-check text-red-700"></i>
                    <h4 class="font-normal text-sm">Free delivery today</h4>
                </div>
                <div class="icon-list flex flex-row gap-x-2 items-center">
                    <i class="fas fa-check text-red-700"></i>
                    <h4 class="font-normal text-sm">100% money back Guarantee</h4>
                </div>
                <div class="icon-list flex flex-row gap-x-2 items-center">
                    <i class="fas fa-check text-red-700"></i>
                    <h4 class="font-normal text-sm">7 days product return policy</h4>
                </div>
            </div>
            <div class="icon-box flex flex-col hover:bg-[#f7f7f7]l pt-4 gap-y-2 relative after:absolute after:content-[''] after:h-[2px] after:w-full after:bg-gray-300 after:left-0 after:-bottom-5">
                <div class="icon-list flex flex-row gap-x-2 items-center">
                    <h4 class="font-normal text-sm">SKU:</h4>
                    <h4 class="font-semibold text-sm">SMTGS6T45</h4>
                </div>
                <div class="icon-list flex flex-row gap-x-2 items-center">
                    <h4 class="font-normal text-sm">Category:</h4>
                    <h4 class="font-semibold text-sm">Computer</h4>
                </div>
                <div class="icon-list flex flex-row gap-x-2 items-center">
                    <h4 class="font-normal text-sm">Tags:</h4>
                    <h4 class="font-semibold text-sm">laptop, macbook, PC</h4>
                </div>
            </div>
            <div class="flex items-center gap-x-2 pt-4">
                <h4 class="text-[15px] font-[500] text-black">Share:</h4>
                <span class="flex items-center gap-x-1 cursor-pointer">
                    <i class="fab fa-facebook-f p-3 rounded-full bg-teal-200 hover:text-white hover:bg-[#5956E8] transition-all duration-500"></i>
                    <i class="fab fa-twitter p-3 rounded-full bg-teal-200 hover:text-white hover:bg-[#5956E8] transition-all duration-500"></i>
                    <i class="fab fa-linkedin-in p-3 rounded-full bg-teal-200 hover:text-white hover:bg-[#5956E8] transition-all duration-500"></i>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Product Detials End -->
<!-- Additional Info Start -->

<section id="additional_info" class="py-4">
    <div class="max-w-container mx-auto flex flex-col gap-y-4 px-4 lg:px-0">
        <div class="tab-header bg-[#F7F7F7] w-full flex flex-row gap-x-1 lg:gap-x-2 justify-between lg:justify-start">
            <h4 class="cursor-pointer text-base font-[500] text-[#57636C] hover:bg-gray-200 relative after:absolute after:content-'' after:w-full after:h-[2px] after:bg-transparent after:hover:bg-red-500 after:left-0 after:bottom-0 px-2 py-1 lg:px-4 lg:py-2">Description</h4>
            <h4 class="cursor-pointer text-base font-[500] text-[#57636C] hover:bg-gray-200 relative after:absolute after:content-'' after:w-full after:h-[2px] after:bg-transparent after:hover:bg-red-500 after:left-0 after:bottom-0 px-2 py-1 lg:px-4 lg:py-2">Specification</h4>
            <h4 class="cursor-pointer text-base font-[500] text-[#57636C] hover:bg-gray-200 relative after:absolute after:content-'' after:w-full after:h-[2px] after:bg-transparent after:hover:bg-red-500 after:left-0 after:bottom-0 px-2 py-1 lg:px-4 lg:py-2">Reviews</h4>
        </div>
        <div class="tab-content relative after:absolute after:content-[''] after:h-[2px] after:w-full after:bg-gray-300 after:left-0 after:-bottom-5">
            <p class="text-sm font-normal">The Apple MacBook Pro 16.2 is a cutting-edge laptop designed to deliver exceptional performance and advanced features for professionals and creative enthusiasts. With its sleek aluminum body and precision engineering, this MacBook Pro represents the pinnacle of Apple's laptop technology.<br><br>

            Stay connected with a variety of ports, including Thunderbolt 3, USB-C, and audio jacks. These versatile ports support high-speed data transfer and external device connections. Enjoy a rich audio experience with high-fidelity speakers that deliver clear and immersive sound. Perfect for content creators and multimedia enthusiasts.<br><br>

            Equipped with the latest processors, ample RAM, and high-performance graphics, the MacBook Pro 16.2 ensures smooth multitasking, fast rendering, and efficient handling of resource-intensive tasks. Seamlessly integrate with the macOS ecosystem, benefiting from features like iCloud, Siri, and a vast selection of applications available on the App Store.
            </p>
        </div>
    </div>
</section>

<!-- Additional Info End -->
<!-- Recently Viewed Start -->

<section id="recent_view" class="py-20">
    <div class="max-w-container mx-auto flex flex-col gap-y-4 px-4 lg:px-0">
        <div class="flex flex-row justify-between items-center">
            <h3 class="text-lg lg:text-2xl font-semibold">Recently Viewed</h3>
            <h4 class="cursor-pointer text-sm font-semibold text-[#5093F7] relative after:absolute after:content-'' after:w-10/12 after:h-[1px] after:left-0 after:-bottom-1 hover:after:w-full after:bg-[#5093F7] after:transition-all after:duration-500"><a href="">See All Deals <i class="fas fa-external-link-alt text-sm"></i></a></h4>
        </div>
        <div class="flex flex-col lg:flex-row gap-y-2 lg:gap-y-0">
            <div class="w-full md:w-1/3 lg:w-1/5 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                <div class="w-full height-[20%]">
                    <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                </div>
                <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                <div class="flex flex-col items-start space-x-2">
                    <div id="stars">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="capitalize text-[13px] font-normal text-[#212529]">(35 reviews)</p>
                </div>
                <div class="flex flex-row justify-between items-center pt-5">
                    <div class="flex flex-row space-x-1">
                        <div class="new-price">$16</div>
                        <div class="old-price line-through text-teal-600">$22</div>
                    </div>
                    <div class="stock flex flex-row items-center space-x-1">
                        <i class="fas fa-check text-[#4A8D16]"></i>
                        <h3 class="text-sm font-normal text-[#4A8D16] capitalize">in stock</h3>
                    </div>
                </div>
                <a href="#" class="inline-block py-3 px-6 bg-[#4A8D16] text-[14px] text-white font-semibold capitalize hover:bg-green-700 rounded-full"><i class="fas fa-shopping-cart text-whtie pr-2"></i>Add to cart</a>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                <div class="w-full height-[20%]">
                    <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                </div>
                <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                <div class="flex flex-col items-start space-x-2">
                    <div id="stars">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="capitalize text-[13px] font-normal text-[#212529]">(35 reviews)</p>
                </div>
                <div class="flex flex-row justify-between items-center pt-5">
                    <div class="flex flex-row space-x-1">
                        <div class="new-price">$16</div>
                        <div class="old-price line-through text-teal-600">$22</div>
                    </div>
                    <div class="stock flex flex-row items-center space-x-1">
                        <i class="fas fa-check text-[#4A8D16]"></i>
                        <h3 class="text-sm font-normal text-[#4A8D16] capitalize">in stock</h3>
                    </div>
                </div>
                <a href="#" class="inline-block py-3 px-6 bg-[#4A8D16] text-[14px] text-white font-semibold capitalize hover:bg-green-700 rounded-full"><i class="fas fa-shopping-cart text-whtie pr-2"></i>Add to cart</a>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                <div class="w-full height-[20%]">
                    <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                </div>
                <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                <div class="flex flex-col items-start space-x-2">
                    <div id="stars">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="capitalize text-[13px] font-normal text-[#212529]">(35 reviews)</p>
                </div>
                <div class="flex flex-row justify-between items-center pt-5">
                    <div class="flex flex-row space-x-1">
                        <div class="new-price">$16</div>
                        <div class="old-price line-through text-teal-600">$22</div>
                    </div>
                    <div class="stock flex flex-row items-center space-x-1">
                        <i class="fas fa-check text-[#4A8D16]"></i>
                        <h3 class="text-sm font-normal text-[#4A8D16] capitalize">in stock</h3>
                    </div>
                </div>
                <a href="#" class="inline-block py-3 px-6 bg-[#4A8D16] text-[14px] text-white font-semibold capitalize hover:bg-green-700 rounded-full"><i class="fas fa-shopping-cart text-whtie pr-2"></i>Add to cart</a>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                <div class="w-full height-[20%]">
                    <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                </div>
                <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                <div class="flex flex-col items-start space-x-2">
                    <div id="stars">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="capitalize text-[13px] font-normal text-[#212529]">(35 reviews)</p>
                </div>
                <div class="flex flex-row justify-between items-center pt-5">
                    <div class="flex flex-row space-x-1">
                        <div class="new-price">$16</div>
                        <div class="old-price line-through text-teal-600">$22</div>
                    </div>
                    <div class="stock flex flex-row items-center space-x-1">
                        <i class="fas fa-check text-[#4A8D16]"></i>
                        <h3 class="text-sm font-normal text-[#4A8D16] capitalize">in stock</h3>
                    </div>
                </div>
                <a href="#" class="inline-block py-3 px-6 bg-[#4A8D16] text-[14px] text-white font-semibold capitalize hover:bg-green-700 rounded-full"><i class="fas fa-shopping-cart text-whtie pr-2"></i>Add to cart</a>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/5 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                <div class="w-full height-[20%]">
                    <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                </div>
                <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                <div class="flex flex-col items-start space-x-2">
                    <div id="stars">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="capitalize text-[13px] font-normal text-[#212529]">(35 reviews)</p>
                </div>
                <div class="flex flex-row justify-between items-center pt-5">
                    <div class="flex flex-row space-x-1">
                        <div class="new-price">$16</div>
                        <div class="old-price line-through text-teal-600">$22</div>
                    </div>
                    <div class="stock flex flex-row items-center space-x-1">
                        <i class="fas fa-check text-[#4A8D16]"></i>
                        <h3 class="text-sm font-normal text-[#4A8D16] capitalize">in stock</h3>
                    </div>
                </div>
                <a href="#" class="inline-block py-3 px-6 bg-[#4A8D16] text-[14px] text-white font-semibold capitalize hover:bg-green-700 rounded-full"><i class="fas fa-shopping-cart text-whtie pr-2"></i>Add to cart</a>
            </div>
        </div>
    </div>
</section>

<!-- Recently Viewed End -->



<script>
    const opt1 = document.getElementById('opt1'),
    opt2 = document.getElementById('opt2'),
    style = document.querySelector('.style');

    let style1 = document.getElementById('opt1').innerHTML;
    let style2 = document.getElementById('opt2').innerHTML;

    opt1.addEventListener('click', ()=>{
        style.innerHTML = style1;
    });
    opt2.addEventListener('click', ()=>{
        style.innerHTML = style2;
    });
</script>
<script>
    const cap1 = document.getElementById('capacity1'),
    cap2 = document.getElementById('capacity2'),
    cap = document.querySelector('.capacity');

    let capacity1 = document.getElementById('capacity1').innerHTML;
    let capacity2 = document.getElementById('capacity2').innerHTML;

    cap1.addEventListener('click', ()=>{
        cap.innerHTML = capacity1;
    });
    cap2.addEventListener('click', ()=>{
        cap.innerHTML = capacity2;
    });
</script>
<script>
    const col1 = document.getElementById('color1'),
    col2 = document.getElementById('color2'),
    col = document.querySelector('.color');

    col1.addEventListener('click', ()=>{
        col.innerHTML = 'Silver';
    });
    col2.addEventListener('click', ()=>{
        col.innerHTML = 'Gray';
    });
</script>
<?php
    require 'includes/footer.php';
?>