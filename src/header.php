<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="font-pop">    

    <!-- Header Start -->
    <header id="navigation" class="mx-auto">
        <div class="max-w-container mx-auto head-top flex flex-col md:flex-row  items-center justify-between py-3 gap-y-2 md:gap-y-0 px-0 md:px-4 lg:px-0">
            <div class="head-left flex flex-row items-start gap-x-2 md:gap-x-7">
                <div class="text-black text-[14px] font-normal hover:text-[#5093F7]"><a href="#">About Us</a></div>
                <div class="text-black text-[14px] font-normal hover:text-[#5093F7]"><a href="#">FAQ</a></div>
                <div class="text-black text-[14px] font-normal hover:text-[#5093F7]"><a href="#">Help & Contact</a></div>
            </div>
            <div class="head-right flex gap-x-2 lg:gap-x-7">
                <div class=" text-[14px] font-normal"><a href="#" class="text-black hover:text-red-700">Flash Sale 20% off</a></div>
                <div class="text-black text-[14px] font-normal relative flex justify-between items-center select-none cursor-pointer" onclick="langsel()"><a href="">English</a><i class="fas fa-angle-down pl-2"></i>
                    <div class="text-black text-[14px] font-normal absolute top-full left-1/2 w-[100px] -translate-x-1/2 border-[1px] border-solid rounded mt-2 hidden z-10" id="dropdown">
                        <div class="bg-white p-3 hover:bg-black hover:text-white"><a href="">Bangla</a></div>
                        <div class="bg-white p-3 hover:bg-black hover:text-white"><a href="">Hindi</a></div>
                        <div class="bg-white p-3 hover:bg-black hover:text-white"><a href="">Chinese</a></div>
                    </div>
                </div>
                <div class="text-black text-[14px] font-normal relative flex justify-between items-center select-none z-10 cursor-pointer" onclick="cursel()"><a href="">USD</a><i class="fas fa-angle-down pl-2"></i>
                    <div class="text-black text-[14px] font-normal absolute top-full left-1/2 w-[100px] -translate-x-1/2 border-[1px] border-solid rounded mt-2 hidden" id="dropdown1">
                        <div class="top-0 left-0 bg-white p-3 hover:bg-black hover:text-white"><a href="">BDT</a></div>
                        <div class="top-0 left-0 bg-white p-3 hover:bg-black hover:text-white"><a href="">Rs</a></div>
                        <div class="top-0 left-0 bg-white p-3 hover:bg-black hover:text-white"><a href="">Yen</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-b-slate-300 border-t-0 border-r-0 border-l-0"></div>
        <div class="head-mid py-3 flex-col lg:flex-row max-w-container mx-auto items-center flex-wrap hidden lg:flex">
            <div class="w-2/12 logo">
                <img src="../images/logo.png" alt="logo">
            </div>
            <div class="w-[90%] lg:w-5/12 searchbar relative">
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Search" class="w-[100%] md:w-[100%] py-[9px] px-5 -mr-2 border border-inherit rounded">
                    <button type="submit" class="items-end py-3 px-5 bg-[#4A8D16] text-[14px] font-[500] text-white rounded absolute right-0 top-0"><i class="fa-solid fa-magnifying-glass pr-1"></i>Search</button>
                </form>
            </div>
            <div class="w-2/4 md:w-2/12">
                <div class="icon-box flex justify-end gap-x-2 group cursor-pointer">
                    <i class="fa-solid fa-phone p-4 bg-teal-200 text-[#4A8D16] rounded-full group-hover:bg-[#4A8D16] group-hover:text-white transition-all duration-400"></i>
                    <div class="icon-text">
                        <h4>Hotline</h4>
                        <h3>+8801741241125</h3>
                    </div>
                </div>
            </div>
            <div class="w-2/4 md:w-3/12 flex gap-x-3 justify-end">
                <a href="login.php"><i class="fa-solid fa-user p-4 bg-teal-200 text-[#4A8D16] rounded-full hover:bg-[#4A8D16] hover:text-white transition-all duration-400"></i></a>
                <div class="relative">
                    <i class="fa-solid fa-heart p-4 bg-teal-200 text-[#4A8D16] rounded-full hover:bg-[#4A8D16] hover:text-white transition-all duration-400"></i>
                    <h6 class="text-[12px] font-normal py-1 px-2 bg-[#4A8D16] text-white rounded-full absolute -top-[10px] right-0">0</h6>
                </div>
                <div class="relative">
                    <i class="fa-solid fa-cart-shopping p-4 bg-teal-200 text-[#4A8D16] rounded-full hover:bg-[#4A8D16] hover:text-white transition-all duration-400"></i>
                    <h6 class="text-[12px] font-normal py-1 px-2 bg-[#4A8D16] text-white rounded-full absolute -top-[10px] right-0">0</h6>
                </div>
            </div>
        </div>
        <div class="border border-b-slate-300 border-t-0 border-r-0 border-l-0"></div>
        <div class="max-w-container mx-auto hidden lg:flex items-center">
            <div class="w-1/4 relative">
                <div class="cat-head flex items-center justify-center gap-x-3 px-4 py-6 bg-[#F7931E] text-white select-none" onclick="toggleCat()">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <h3 class="text-[15px] font-semibold">Browse Categories</h3>
                    <i class="fa-solid fa-chevron-down pl-12"></i>
                </div>
                <div class="cat-menu w-full bg-white absolute top-full left-0 hidden z-30" id="catdropdown">
                    <!-- Category Items List -->
                    <div class="flex group p-3 items-center border border-b-slate-300 justify-between">
                        <div class="flex items-center gap-x-2 cursor-pointer">
                        <i class="fa-solid fa-mobile-screen-button p-4 bg-teal-200 group-hover:bg-[#5093F7] group-hover:text-white rounded-full"></i>
                        <h6 class="text-black font-normal text-[15px] group-hover:text-[#5093F7] cursor-pointer">Smart Phones & Tablets</h6>
                        </div>
                        <i class="fa-solid fa-chevron-right pl-2 group-hover:text-[#5093F7] cursor-pointer"></i>
                        <!-- Sub Category Menu -->
                        <div class="sub-cat-menu absolute w-[700px] h-[100vh] shadow-lg bg-white left-full -top-[55px] opacity-0 invisible group-hover:opacity-100 group-hover:visible z-10">
                            <div class="grid grid-cols-3 p-7 gap-x-5">
                                <div class="grid grid-rows-5">
                                    <!-- Sub Category Items -->
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                </div>
                                <div class="grid grid-rows-5">
                                    <!-- Sub Category Items -->
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                </div>
                                <div class="grid grid-rows-5">
                                    <!-- Sub Category Items -->
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex group p-3 items-center border border-b-slate-300 justify-between">
                        <div class="flex items-center gap-x-2 cursor-pointer">
                        <i class="fa-solid fa-laptop p-4 bg-teal-200 group-hover:bg-[#5093F7] group-hover:text-white rounded-full"></i>
                        <h6 class="text-black font-normal text-[15px] group-hover:text-[#5093F7] cursor-pointer">Laptops & Desktops</h6>
                        </div>
                        <i class="fa-solid fa-chevron-right pl-2 group-hover:text-[#5093F7] cursor-pointer"></i>
                        <!-- Sub Category Menu -->
                        <div class="sub-cat-menu absolute w-[700px] h-[100vh] shadow-lg bg-white left-full -top-[55px] opacity-0 invisible group-hover:opacity-100 group-hover:visible z-10">
                            <div class="grid grid-cols-3 p-7 gap-x-5">
                                <div class="grid grid-rows-5">
                                    <!-- Sub Category Items -->
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">all in ones</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">all in ones</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">all in ones</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">all in ones</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">all in ones</h6>
                                    </div>
                                </div>
                                <div class="grid grid-rows-5 col-span-2">
                                    <!-- Sub Category Items -->
                                    <div class="row-span-5 flex items-center py-2 px-4 cursor-pointer">
                                        <img src="../images/laptop.jpg" alt="laptop">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex group p-3 items-center border border-b-slate-300 justify-between">
                        <div class="flex items-center gap-x-2 cursor-pointer">
                        <i class="fa-solid fa-laptop p-4 bg-teal-200 group-hover:bg-[#5093F7] group-hover:text-white rounded-full"></i>
                        <h6 class="text-black font-normal text-[15px] group-hover:text-[#5093F7] cursor-pointer">Smart Electronics</h6>
                        </div>
                        <i class="fa-solid fa-chevron-right pl-2 group-hover:text-[#5093F7] cursor-pointer"></i>
                        <!-- Sub Category Menu -->
                        <div class="sub-cat-menu absolute w-[100%] h-[100vh] shadow-lg bg-white left-full -top-[55px] opacity-0 invisible group-hover:opacity-100 group-hover:visible z-10">
                            <div class="grid grid-cols-1 p-7 gap-x-5">
                                <div class="grid grid-rows-5">
                                    <!-- Sub Category Items -->
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                    <div class="flex border border-b-slate-300 border-t-0 border-r-0 border-l-0 items-center py-2 px-4 cursor-pointer">
                                        <i class="fa-solid fa-square text-[10px] pr-4"></i>
                                        <h6 class="text-[15px] text-black font-normal capitalize hover:text-[#5093F7]">Phone Accessories</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/4 menu">
                <ul class="flex space-x-5 justify-center items-center">
                    <!-- Menu Items -->
                    <li class="relative font-semibold group capitalize inline-block"><a href="" class="text-[15px] text-black group-hover:text-[#5093F7]">home<i class="fa-solid fa-chevron-down pl-2 text-[12px]"></i></a>
                        <div class="absolute w-[300px] left-0 top-full shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible first:pt-[100px] space-y-3 py-4 bg-white">
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="">electronics & telemobile online shop</a></div>
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="">grocery shop</a></div>
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="">healthy diet food shop</a></div>
                        </div>
                    </li>
                    <li class="font-semibold group capitalize inline-block"><a href="" class="text-[15px] text-black group-hover:text-[#5093F7]">pages<i class="fa-solid fa-chevron-down pl-2 text-[12px]"></i></a></li>
                    <li class="relative font-semibold group capitalize inline-block"><a href="" class="text-[15px] text-black group-hover:text-[#5093F7]">Shop<i class="fa-solid fa-chevron-down pl-2 text-[12px]"></i></a>
                        <div class="absolute w-[150px] left-0 top-full shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible first:pt-[100px] space-y-3 py-4 bg-white">
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="shop.php">Shop Page</a></div>
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="cart.php">Cart Page</a></div>
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="checkout.php">Checkout</a></div>
                            <div class="px-3 bg-white text-[14px] font-normal hover:text-[#5093F7]"><a href="product.php">Product Details</a></div>
                        </div>
                    </li>
                    <li class="font-semibold group capitalize inline-block"><a href="" class="text-[15px] text-black group-hover:text-[#5093F7]">blog<i class="fa-solid fa-chevron-down pl-2 text-[12px]"></i></a></li>
                    <li class="font-semibold group capitalize inline-block"><a href="" class="text-[15px] text-black group-hover:text-[#5093F7]">contact<i class="fa-solid fa-chevron-down pl-2 text-[12px]"></i></a></li>
                </ul>
            </div>
            <div class="w-1/4 location mx-auto">
                <div class="flex gap-x-2 group items-center justify-end py-2 group cursor-pointer">
                    <i class="fas fa-map-marker-alt p-4 bg-teal-200 text-[#4A8D16] rounded-full group-hover:bg-[#4A8D16] group-hover:text-white transition-all duration-400"></i>
                    <div class="location-track items-center">
                        <h6 class="font-normal text-[13px] text-[#57636C]">Deliver To</h6>
                        <h4 class="font-semibold text-[14px] text-[#57636C]">Find Location</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-container mx-auto flex flex-col lg:hidden bg-white py-4 gap-x-2 gap-y-4">
            <div class="searchbar mx-auto rounded border border-teal-300">
                <form action="">
                    <input type="text" placeholder="Search" class="px-2">
                    <button type="submit" class="py-2 px-4 bg-[#4A8D16] text-white"><i class="fa-solid fa-magnifying-glass text-white pr-1"></i>Search</button>
                </form>
            </div>
            <div class="social mx-auto">
                <div class="iconbox flex flex-row items-center gap-x-2">
                    <i class="fa-solid fa-phone p-2 bg-teal-200 text-black rounded-full"></i>
                    <div class="icon-text pl-1">
                        <h4 class="text-[13px] font-normal text-[#57636C]">Hotline</h4>
                        <h3 class="text-[12px] font-[500] text-[#22262A]">+8801741241125</h3>
                    </div>
                    <i class="fa-solid fa-user p-2 bg-teal-200 text-black rounded-full"></i>
                    <div class="relative">
                        <i class="fa-solid fa-heart p-2 bg-teal-200 text-black rounded-full"></i>
                        <h6 class="text-[8px] font-normal py-1 px-2 bg-[#4A8D16] text-white rounded-full absolute -top-[10px] right-0">0</h6>
                    </div>
                    <div class="relative">
                        <i class="fa-solid fa-cart-shopping p-2 bg-teal-200 text-black rounded-full"></i>
                        <h6 class="text-[8px] font-normal py-1 px-2 bg-[#4A8D16] text-white rounded-full absolute -top-[10px] right-0">0</h6>
                    </div>
                </div>
            </div>
            <div class="block lg:hidden border border-b-slate-300 border-t-0 border-r-0 border-l-0"></div>
            <div class="bottom-head flex flex-row lg:hidden p-x-4 relative justify-between px-4">
                <div class="logo w-1/3">
                    <img src="../images/logo.png" height="80px" width="80px" alt="logo">
                </div>
                <div class="w-2/3 p-4 space-y-4">
                    <div onclick="mobileMenu()" class="flex justify-end">
                        <i class="fas fa-bars text-black text-lg text-end"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="w-2/3 h-[100vh] hidden absolute right-0 top-0 bg-white z-20 p-4 space-y-4" id="showMobileMenu">
            <div class="popup-head flex flex-row items-center justify-between">
                <img src="../images/logo.png" height="80px" width="80px" alt="logo">
                <i class="fas fa-times text-2xl" onclick="closeButton()"></i>
            </div>
            <div class="block border border-b-slate-300 border-t-0 border-r-0 border-l-0"></div>
            <div class="flex flex-col gap-y-3">
                <div class="cursor-pointer" onclick="togglemobile_sub()">
                    <div class="flex justify-between items-center">
                        <h4 class="text-base font-normal text-black capitalize">Home</h4>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                    <div class="w-full bg-teal-200 p-2 justify-center items-start gap-y-3 hidden" id="showhomesub">
                        <div><a href="#" class="text-base font-normal text-black capitalize hover:text-blue-500 text-[12px] inline-block py-1">Electronics & telemobile online shop</a></div>
                        <div><a href="#" class="text-base font-normal text-black capitalize hover:text-blue-500 text-[12px] inline-block py-1">Grocery Shop</a></div>
                        <div><a href="#" class="text-base font-normal text-black capitalize hover:text-blue-500 text-[12px] inline-block py-1">Healthy Diet Food shop</a></div>
                    </div>
                <div class="w-full"><a href="shop.php" class="text-base font-normal text-black capitalize inline-block">Shop</a></div>
                <div class="w-full"><a href="#" class="text-base font-normal text-black capitalize inline-block">Blog</a></div>
                <div class="w-full"><a href="#" class="text-base font-normal text-black capitalize inline-block">Contact</a></div>
            </div>
        </div>

    </header>
    <!-- Header End -->