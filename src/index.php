<?php
    require 'header.php';
?>

    <!-- First Ads Banner Start -->
    <section id="banner" class="bg-[url('../images/banner.jpg')] bg-cover bg-center bg-no-repeat h-[80vh]">
        <div class="max-w-container mx-auto py-2 md:py-8 min-h-[40vh] md:min-h-[80vh] flex flex-col items-center md:items-start justify-center">
            <div class="w-full lg:w-1/2 px-4 space-y-1 md:space-y-3 flex flex-col justify-center items-center text-center md:items-start md:justify-start md:text-start">
                <div class="inline-flex gap-x-2 p-3 rounded-full bg-white group justify-start items-center">
                    <i class="fas fa-bolt text-[15px] text-[#FF4B55]"></i>
                    <h4 class="capitalize text-[15px] font-[500] text-[#FF4B55] inline-block">Buy one, get one 50% off</h4>
                </div>
                <h4 class="font-[500] text-black text-[25px] md:text-[42px] capitalize leading-[30px] md:leading-[50px]">Unveiling the magin of our organic pantry</h4>
                <p class="text-[16px] font-normal text-black capitalize pb-1 md:pb-[24px]">Limited time offers on quick and easy meals - ends soon!</p>
                <a href="#" class="py-4 px-6 bg-[#4A8D16] text-[14px] text-white font-semibold hover:bg-green-700 rounded-full">Shop Now<i class="fas fa-external-link-alt text-white pl-2"></i></a>
            </div>
        </div>
    </section>
    <!-- First Ads Banner End -->

    <!-- Category Carousel Start -->

    <section id="catcarousel">
        <div class="max-w-container mx-auto -mt-[50px]">
            <div class="flex gap-x-5 justify-center items-center">
                <!-- Carousel items -->
                <div class="group gap-y-1 cursor-pointer flex flex-col items-center justify-center text-center">
                    <img src="../images/cereal.png" alt="" class="rounded-full border border-solid-1px border-teal-300 group-hover:border-[#4A8D16] transition-all duration-500 h-[65px] md:h-[130px]">
                    <h3 class="capitalize text-16px font-[500] text-black group-hover:text-[#4A8D16]">Cereal and breakfast</h3>
                    <p class="capitalize text-[13px] font-[400] text-[#57636C] group-hover:text-[#4A8D16]">22 Products</p>
                </div>
                <div class="group gap-y-1 cursor-pointer flex flex-col items-center justify-center text-center">
                    <img src="../images/eggs.png" alt="" class="rounded-full border border-solid-1px border-teal-300 group-hover:border-[#4A8D16] transition-all duration-500 h-[65px] md:h-[130px]">
                    <h3 class="capitalize text-16px font-[500] text-black group-hover:text-[#4A8D16]">Cereal and breakfast</h3>
                    <p class="capitalize text-[13px] font-[400] text-[#57636C] group-hover:text-[#4A8D16]">22 Products</p>
                </div>
                <div class="group gap-y-1 cursor-pointer flex flex-col items-center justify-center text-center">
                    <img src="../images/meat.png" alt="" class="rounded-full border border-solid-1px border-teal-300 group-hover:border-[#4A8D16] transition-all duration-500 h-[65px] md:h-[130px]">
                    <h3 class="capitalize text-16px font-[500] text-black group-hover:text-[#4A8D16]">Cereal and breakfast</h3>
                    <p class="capitalize text-[13px] font-[400] text-[#57636C] group-hover:text-[#4A8D16]">22 Products</p>
                </div>
                <div class="group gap-y-1 cursor-pointer hidden md:flex flex-col items-center justify-center">
                    <img src="../images/chicken.png" alt="" class="rounded-full border border-solid-1px border-teal-300 group-hover:border-[#4A8D16] transition-all duration-500 h-[65px] md:h-[130px]">
                    <h3 class="capitalize text-16px font-[500] text-black group-hover:text-[#4A8D16]">Cereal and breakfast</h3>
                    <p class="capitalize text-[13px] font-[400] text-[#57636C] group-hover:text-[#4A8D16]">22 Products</p>
                </div>
                <div class="group gap-y-1 cursor-pointer hidden lg:flex flex-col items-center justify-center">
                    <img src="../images/cereal.png" alt="" class="rounded-full border border-solid-1px border-teal-300 group-hover:border-[#4A8D16] transition-all duration-500 h-[65px] md:h-[130px]">
                    <h3 class="capitalize text-16px font-[500] text-black group-hover:text-[#4A8D16]">Cereal and breakfast</h3>
                    <p class="capitalize text-[13px] font-[400] text-[#57636C] group-hover:text-[#4A8D16]">22 Products</p>
                </div>
                <div class="group gap-y-1 cursor-pointer hidden lg:flex flex-col items-center justify-center">
                    <img src="../images/eggs.png" alt="" class="rounded-full border border-solid-1px border-teal-300 group-hover:border-[#4A8D16] transition-all duration-500 h-[65px] md:h-[130px]">
                    <h3 class="capitalize text-16px font-[500] text-black group-hover:text-[#4A8D16]">Cereal and breakfast</h3>
                    <p class="capitalize text-[13px] font-[400] text-[#57636C] group-hover:text-[#4A8D16]">22 Products</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Carousel End -->

    <!-- Ads Start -->
     <section id="ads ">
        <div class="max-w-container mx-auto py-[60px]">
            <div class="flex gap-2 md:gap-4 p-2">
                <div class="w-1/2 bg-[url('../images/melon.jpg')] bg-cover bg-center rounded min-h-[200px] md:min-h-[500px]">
                    <div class="space-y-2 md:space-y-0 p-[20px] md:p-[35px] content justify-center items-center">
                        <p class="font-normal text-[14px] md:text-[15px] text-white capitalize">todays deal</p>
                        <h3 class="font-[500] text-lg md:text-2xl text-white capitalize pb-2 leading-4">Natural Melon Juice</h3>
                        <a href="#" class="relative after:absolute after:content-[''] after:left-0 after:-bottom-[4px] after:h-[2px] after:w-[0px] hover:after:w-full after:transition-all after:duration-500 after:bg-white text-[14px] text-white font-semibold rounded-full">Shop Now<i class="fas fa-external-link-alt text-white pl-2"></i></a>
                    </div>
                </div>
                <div class="w-1/2 bg-[url('../images/mixed.jpg')] bg-cover bg-center rounded min-h-[200px] md:min-h-[500px]">
                    <div class="space-y-2 md:space-y-0 p-[20px] md:p-[35px] content justify-center items-center">
                        <p class="font-normal text-[12px] md:text-[15px] text-black capitalize">todays deal</p>
                        <h3 class="font-[500] text-lg md:text-2xl text-black capitalize pb-2 leading-4">Natural Mixed juice</h3>
                        <a href="#" class="relative after:absolute after:content-[''] after:left-0 after:-bottom-[4px] after:h-[2px] after:w-[0px] hover:after:w-full after:transition-all after:duration-500 after:bg-black text-[14px] text-black font-semibold rounded-full">Shop Now<i class="fas fa-external-link-alt text-black pl-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Ads End -->

    <!-- Featured Tabs Start -->

    <section id="featured_tabs">
        <div class="max-w-container mx-auto px-2 md:px-0">
            <div class="flex flex-col lg:flex-row gap-x-12 gap-y-2 lg:gap-y-0 justify-start items-center flex-wrap">
                <h1 class="capitalize text-2xl font-[500] text-black">Today's specials: big savings</h1>
                <div class="tabs">
                    <ul class="flex space-x-2 md:space-x-4 ">
                        <li class="inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">All</a></li>
                        <li class="inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">Fresh Products</a></li>
                        <li class="inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">Whole grains</a></li>
                        <li class="hidden md:inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">lean proteins</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content flex flex-col md:flex-row px-2 lg:px-0 py-6 flex-wrap lg:gap-x-0 gap-y-4">
                <!-- Cards -->
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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

    <!-- Featured Tabs End -->
     <!-- Second Ads Banner Start -->

     <section id="banner" class="py-[60px]">
        <div class="max-w-container bg-[url('../images/banner-2.jpg')] bg-cover bg-center bg-no-repeat min-h-[40vh] md:min-h-[80vh] mx-auto py-8 flex flex-col items-start justify-center relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-white after:opacity-30 lg:after:opacity-10 after:content-['']">
            <div class="px-4 md:px-[100px] space-y-3 z-10">
                <h6 class="text-[15px] font-normal text-black">Hurry Up!</h6>
                <h4 class="w-full lg:w-[45%] font-[500] text-[#22262A] text-[28px] capitalize leading-[35px]">Experience with Our Handpicked Selection of Organic and Healthy Foods</h4>
                <p class="w-full text-[16px] font-normal text-black capitalize pb-7 lg:pb-[45px]">Explore our exclusive sale on cutting-edge electronics devices</p>
                <a href="#" class="py-4 px-6 bg-[#F7931E] text-[14px] text-white font-semibold hover:bg-yellow-500 rounded-full">Shop Now<i class="fas fa-external-link-alt text-white pl-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Second Ads Banner End -->
    
    <!-- Second Featured Tabs Start -->

    <section id="featured_tabs">
        <div class="max-w-container mx-auto px-2 md:px-0">
            <div class="flex flex-col lg:flex-row gap-x-12 gap-y-2 lg:gap-y-0 justify-start items-center flex-wrap">
                <h1 class="capitalize text-2xl font-[500] text-black">Today's specials: big savings</h1>
                <div class="tabs">
                    <ul class="flex space-x-2 md:space-x-4 ">
                        <li class="inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">All</a></li>
                        <li class="inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">Fresh Products</a></li>
                        <li class="inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">Whole grains</a></li>
                        <li class="hidden md:inline-block cursor-pointer text-sm font-[500] text-[#57636C] px-4 py-2 bg-white border rounded-full border-teal-200 hover:bg-[#F7931E] hover:border-transparent hover:shadow-xl hover:text-white capitalize"><a href="#">lean proteins</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content flex flex-col md:flex-row px-2 lg:px-0 py-6 flex-wrap lg:gap-x-0 gap-y-4">
                <!-- Cards -->
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
                <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
                    <div class="w-full height-[20%]">
                        <img src="../images/fruits.jpg" height="100%" width="100%" alt="">
                    </div>
                    <h3 class="text-sm font-normal text-black hover:text-[#4A8D16] capitalize">Organic fruits & veggies supplement - support diet</h3>
                    <div class="flex flex-row space-x-2 items-center">
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
    
    <!--Second Featured Tabs End -->

    <!-- Subscribe Banner Start -->

    <section id="subscribe_banner" class="py-[60px]">
        <div class="max-w-container bg-[url('../images/subscribe-bg.png')] bg-cover bg-center bg-no-repeat min-h-[70vh] mx-auto py-8 flex items-center justify-center rounded flex-wrap">
            <div class="w-[80%] px-1 lg:px-[100px] flex gap-x-6 flex-col md:flex-row gap-y-4">
                <div class="sub-content flex flex-col space-y-5 items-start justify-center">
                    <h2 class="text-[32px] font-[500] text-white capitalize">Subscribe To The Newsletter</h2>
                    <p class="text-[17px] font-normal text-white">Get 10% off new collection special Investigations</p>
                    <form action="" method="POST" class="relative w-full">
                        <input type="text" name="subscribe" placeholder="Enter Your Email" class="w-full py-[9px] px-5 border border-teal-300 rounded focus:border-transparent">
                        <button type="submit" class="absolute top-0 right-0 py-3 px-5 bg-[#F7931E] text-[14px] font-[500] text-white rounded hover:bg-yellow-500">Submit Now</button>
                    </form>
                </div>
                <div class="sub-video">
                    <video width="400" height="400" autoplay muted>
                        <source src="../images/subs_video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Banner End -->
<?php
    require 'footer.php';
?>