<?php
    require 'includes/header.php';
?>
    <!-- Breadcrumbs Start-->
    <section id="bread" class="pt-2">
        <div class="w-[90%] lg:max-w-container mx-auto justify-start">
            <ul class="flex space-x-2">
                <li class="inline-block"><a href="index.php" class="text-base font-normal text-black hover:text-[#5093F7]">Home</a></li>
                <li class="inline-block"><i class="fas fa-chevron-right text-[12px]"></i></li>
                <li class="inline-block"><a href="shop.php" class="text-base font-normal text-black hover:text-[#5093F7]">Shop</a></li>
            </ul>
        </div>
    </section>
    <!-- Breadcrumbs End -->
    <!-- Body Start -->
    <section id="body" class="py-5 lg:py-20">
        <div class="max-w-container mx-auto flex flex-col lg:flex-row gap-x-2 gap-y-2 lg:gap-y-0">
            <div class="w-full lg:w-1/4 flex flex-col gap-y-5 px-2 lg:px-0 hidden" id="filter_prod">
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-lg font-[500] text-black">Filter By Category</h3>
                    <form action="/action_page.php" class="space-y-3 text-lg font-normal">
                    <input type="radio" id="smartphone" name="filter_cat" value="HTML">
                    <label for="smartphone">Smartphone & Tablets</label><br>
                    <input type="radio" id="headphones" name="filter_cat" value="CSS">
                    <label for="headphones">Headphones</label><br>
                    <input type="radio" id="smartwatches" name="filter_cat" value="JavaScript">
                    <label for="smartwatches">Smartwatches</label><br>
                    <input type="radio" id="drone" name="filter_cat" value="JavaScript">
                    <label for="drone">Drone & Camera</label><br>
                    <input type="radio" id="javascript" name="filter_cat" value="JavaScript">
                    <label for="javascript">Electronics</label><br>
                    <input type="radio" id="javascript" name="filter_cat" value="JavaScript">
                    <label for="javascript">Gaming Device</label><br>
                    <input type="radio" id="javascript" name="filter_cat" value="JavaScript">
                    <label for="javascript">Home Accesories</label><br>
                    </form>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-lg font-[500] text-black">Filter By Brands</h3>
                    <form action="/action_page.php" class="space-y-3 text-lg font-normal">
                    <input type="radio" id="apple" name="filter_brand" value="HTML">
                    <label for="apple">Apple</label><br>
                    <input type="radio" id="samsung" name="filter_brand" value="CSS">
                    <label for="samsung">Samsung</label><br>
                    <input type="radio" id="motorola" name="filter_brand" value="JavaScript">
                    <label for="motorola">Motorola</label><br>
                    <input type="radio" id="microsoft" name="filter_brand" value="JavaScript">
                    <label for="microsoft">Microsoft</label><br>
                    <input type="radio" id="vivo" name="filter_brand" value="JavaScript">
                    <label for="vivo">Vivo</label><br>
                    </form>
                </div>
            </div>
            <div class="w-full lg:w-3/4 flex flex-col mx-auto">
                <div class="w-full flex justify-between items-center px-2 lg:px-0 gap-x-2 lg:gap-x-0">
                    <div class="flex gap-x-1 px-4 py-2 border rounded items-center hover:shadow-lg cursor-pointer transition-all duration-300" onclick="filter_product()">
                        <i class="fas fa-filter text-[16px]"></i>
                        <h4 class="text-base font-normal text-black" id="filter_show">Filter</h4>
                    </div>
                    <h4 class="text-base font-normal text-black">Showing 12 Items</h4>
                    <div class="flex gap-x-2">
                        <div class="flex gap-x-2 p-2 bg-teal-100 rounded">
                            <h4 class="text-base font-normal text-black">Sort: </h4>
                            <div class="text-black text-[14px] font-normal relative flex justify-between items-center select-none cursor-pointer" onclick="sort_prod()"><a href="">Latest</a><i class="fas fa-angle-down pl-2"></i>
                                <div class="text-black text-[14px] font-normal absolute top-full left-1/2 w-[130px] -translate-x-1/2 border-[1px] border-solid rounded mt-2 hidden z-10" id="drop_sort">
                                    <div class="bg-white p-3 hover:text-white hover:bg-blue-700"><a href="">Latest</a></div>
                                    <div class="bg-white p-3 hover:text-white hover:bg-blue-700"><a href="">Recent</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row px-2 lg:px-0 py-6 flex-wrap gap-x-0 lg:gap-x-0">
                    <!-- Cards -->
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                    <div class="w-full md:w-1/3 lg:w-1/4 card p-4 border flex-col bg-white border-teal-100 rounded space-y-3 hover:shadow-2xl  transition-all duration-400 hover:bg-white cursor-pointer">
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
                <div class="w-full flex justify-center items-center">
                    <ul class="flex space-x-4 items-center">
                        <li class="px-4 py-2 bg-teal-100 hover:bg-blue-700 hover:text-white rounded-full transition-all duration-500"><a href=""><i class="fas fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li class="px-4 py-2 bg-teal-100 hover:bg-blue-700 hover:text-white rounded-full transition-all duration-500"><a href=""><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Body End -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $('#filter_show').click(function(){
            let profile = document.getElementById('filter_prod');
            profile.classList.toggle('hidden');
        });
    </script>

<?php
    require 'includes/footer.php';
?>