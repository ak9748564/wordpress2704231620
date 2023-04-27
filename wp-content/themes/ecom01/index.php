<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title>Ecommerce Interface</title>
</head>
<body style="font-family: 'Inter', sans-serif;" class="bg-[#F7FAFC]">

    <?php get_header(); ?>

    <div class="p-4 bg-white overflow-x-scroll md:hidden scroll_one">
        <ul class="flex items-center px-1 cursor-pointer">
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Automobiles</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Clothes and wear</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer  shrink-0">Home interiors</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Computer and tech</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Tools, equipments</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Sports and outdoor</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Animal and pets</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Machinery tools</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">More Category</li>
        </ul>
    </div>

    <!-- latest trending electronic items -->
    <div class="max-w-[1200px] mx-auto md:mt-4 bg-white md:p-4 shadow-md flex items-stretch">
        <div class="w-[200px] grow-0 shrink-0 hidden md:block">
            <ul class="text-[#505050] text-[15px] font-medium">
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Automobiles</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Clothes and wear</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Home interiors</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Computer and tech</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Tools, equipments</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Sports and outdoor</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Animal and pets</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">Machinery tools</li>
                <li class="h-[32px] rounded-md hover:bg-[#E5F1FF] hover:text-[#1c1c1c] leading-[30px] px-3 cursor-pointer">More Category</li>
            </ul>
        </div>
        <div class="grow shrink md:px-4"><img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="" class="w-full"></div>
        <div class="w-[200px] grow-0 shrink-0 lg:flex flex-col hidden ">
            <div class="p-2 bg-[#E3F0FF] rounded-md">
                <div class="flex items-center">
                    <div class="w-[36px] h-[36px] mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Avatar.png" alt="">
                    </div>
                    <div class="text-[#1c1c1c] text-[13px] font-medium">
                        <p class="leading-[16px]">Hi, user</p>
                        <p class="leading-[16px]">lets get started</p>
                    </div>
                </div>
                <button class="w-full h-[28px] bg-gradient-to-b from-[#417EFF] to-[#0168FF] text-[#fff] rounded-md mt-2 text-[12px]">Join now</button>
                <button class="w-full h-[28px] bg-[#fff] text-[#417EFF] rounded-md mt-2 text-[12px]">Log in</button>
            </div>
            <div class="bg-[#F38332] p-4 text-[#fff] rounded-md mt-4">
                <p>Get US $10 off</p>
                <p>with a new</p>
                <p>supplier</p>
            </div>
            <div class="bg-[#55BDC3] p-4 text-[#fff] rounded-md mt-4">
                <p>Send quotes with</p>
                <p>supplier</p>
                <p>preferences</p>
            </div>
        </div>
    </div>

    <!-- deals and offers -->
    <div class="mt-2 sm:mt-8 rounded-md shadow-md max-w-[1200px] m-auto sm:flex items-stretch bg-white">
        <div class="md:w-[280px] grow-0 shrink-0 p-4 flex flex-wrap sm:block items-center justify-between">
            <div class="mr-2 sm:mr-0">
                <p class="text-[#1c1c1c] font-semibold">Deals and offers</p>
                <p class="text-[#606060] text-[12px]">Hygiene equipments</p>
            </div>
            <div class="flex items-center sm:mt-6 mt-2">
                <div class="sm:bg-[#606060] bg-[#EFF2F4] text-[#8B96A5] text-center sm:text-white rounded-md px-2 py-1 mr-1 sm:mr-2">
                    <p class="font-medium text-[11px] sm:text-[15px] leading-[12px] sm:leading-[16px]">04</p>
                    <p class="text-[10px] leading-[11px] sm:leading-[15px]">Days</p>
                </div>
                <div class="sm:bg-[#606060] bg-[#EFF2F4] text-[#8B96A5] text-center sm:text-white rounded-md px-2 py-1 mr-1 sm:mx-2">
                    <p class="font-medium text-[11px] sm:text-[15px] leading-[12px] sm:leading-[16px]">13</p>
                    <p class="text-[10px] leading-[11px] sm:leading-[15px]">Hour</p>
                </div>
                <div class="sm:bg-[#606060] bg-[#EFF2F4] text-[#8B96A5] text-center sm:text-white rounded-md px-2 py-1 mr-1 sm:mx-2">
                    <p class="font-medium text-[11px] sm:text-[15px] leading-[12px] sm:leading-[16px]">34</p>
                    <p class="text-[10px] leading-[11px] sm:leading-[15px]">Min</p>
                </div>
                <div class="sm:bg-[#606060] bg-[#EFF2F4] text-[#8B96A5] text-center sm:text-white rounded-md px-2 py-1 mr-1 sm:ml-2">
                    <p class="font-medium text-[11px] sm:text-[15px] leading-[12px] sm:leading-[16px]">56</p>
                    <p class="text-[10px] leading-[11px] sm:leading-[15px]">Sec</p>
                </div>
            </div>
        </div>
        <div class="grow shrink flex overflow-x-scroll scroll_two">
            <div class="w-1/5 min-w-[160px] border p-4 text-center cursor-pointer">
                <div class="overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/03.png" alt="" class="max-w-[150px] m-auto hover:scale-110 hover:transition-all">
                </div>
                <p class="text-[#1c1c1c] font-medium">Smart Watches</p>
                <div class="w-[60px] p-1 bg-[#FFE3E3] text-[#EB001B] rounded-full m-auto text-[12px] mt-1">-25%</div>
            </div>
            <div class="w-1/5 min-w-[160px] border p-4 text-center cursor-pointer">
                <div class="overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/04.png" alt="" class="max-w-[150px] m-auto hover:scale-110 hover:transition-all">
                </div>
                <p class="text-[#1c1c1c] font-medium">Laptops</p>
                <div class="w-[60px] p-1 bg-[#FFE3E3] text-[#EB001B] rounded-full m-auto text-[12px] mt-1">-15%</div>
            </div>
            <div class="w-1/5 min-w-[160px] border p-4 text-center cursor-pointer">
                <div class="overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/05.png" alt="" class="max-w-[150px] m-auto hover:scale-110 hover:transition-all">
                </div>
                <p class="text-[#1c1c1c] font-medium">GoPro Cameras</p>
                <div class="w-[60px] p-1 bg-[#FFE3E3] text-[#EB001B] rounded-full m-auto text-[12px] mt-1">-40%</div>
            </div>
            <div class="w-1/5 min-w-[160px] border p-4 text-center cursor-pointer">
                <div class="overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/06.png" alt="" class="max-w-[150px] m-auto hover:scale-110 hover:transition-all">
                </div>
                <p class="text-[#1c1c1c] font-medium">Headphones</p>
                <div class="w-[60px] p-1 bg-[#FFE3E3] text-[#EB001B] rounded-full m-auto text-[12px] mt-1">-25%</div>
            </div>
            <div class="w-1/5 min-w-[160px] border p-4 text-center cursor-pointer">
                <div class="overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/08.png" alt="" class="max-w-[150px] m-auto hover:scale-110 hover:transition-all">
                </div>
                <p class="text-[#1c1c1c] font-medium">Canon Cameras</p>
                <div class="w-[60px] p-1 bg-[#FFE3E3] text-[#EB001B] rounded-full m-auto text-[12px] mt-1">-40%</div>
            </div>
        </div>
    </div>

    <!-- home and outdoor -->
    <div class="sm:mt-4 mt-2 rounded-md shadow-md max-w-[1200px] m-auto sm:flex items-stretch bg-white">
        <p class="text-[18px] h-[40px] leading-[40px] text-[#1c1c1c] font-semibold sm:hidden px-4">Home and outdoor</p>
        <div class="w-[280px] grow-0 shrink-0 cursor-pointer hidden sm:block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/left-aside.png" class="w-full">
        </div>
        <div class="grow shrink overflow-x-scroll h-full hidden sm:block scroll_three">
            <div class="flex flex-col h-full">
                <div class="h-1/2 flex">
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Soft chairs</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                    </div>
                    <div class="w-[80px] shrink-0 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/03.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Sofa chair</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                    </div>
                    <div class="w-[80px] shrink-0 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/04.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Kitchen dishes</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                    </div>
                    <div class="w-[80px] shrink-0 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/06.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Smart Watches</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                    </div>
                    <div class="w-[80px] shrink-0 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/image 90.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                </div>
                <div class="h-1/2 flex">
                    <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                        <div class="h-full">
                            <p class="text-[#1c1c1c] font-medium">Kitchen mixer</p>
                            <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                            <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 100</p>
                        </div>
                        <div class="w-[80px] shrink-0 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/09.png" alt="" class="hover:scale-110 hover:transition-all">
                        </div>
                    </div>
                    <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                        <div class="h-full">
                            <p class="text-[#1c1c1c] font-medium">Blenders</p>
                            <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                            <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 39</p>
                        </div>
                        <div class="w-[80px] shrink-0 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/08.png" alt="" class="hover:scale-110 hover:transition-all">
                        </div>
                    </div>
                    <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                        <div class="h-full">
                            <p class="text-[#1c1c1c] font-medium">Home Appliance</p>
                            <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                            <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                        </div>
                        <div class="w-[80px] shrink-0 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/rasm.png" alt="" class="hover:scale-110 hover:transition-all">
                        </div>
                    </div>
                    <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                        <div class="h-full">
                            <p class="text-[#1c1c1c] font-medium">Coffee maker</p>
                            <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                            <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                        </div>
                        <div class="w-[80px] shrink-0 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/image 89.png" alt="" class="hover:scale-110 hover:transition-all">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grow shrink sm:hidden">
            <div class="overflow-x-scroll flex">
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/rasm.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/03.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/04.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/rasm.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/rasm.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
            </div>
            <div class="px-4 flex items-center h-[50px] border-t">
                <p class="text-[#0d6efd] text-[15px] mr-2">Source now</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_forward_blue.png" alt="" class="w-[16px]">
            </div>
        </div>
    </div>

    <!-- consumer electronics and gadgets -->
    <div class="mt-4 rounded-md shadow-md max-w-[1200px] m-auto sm:flex items-stretch bg-white">
        <p class="text-[18px] h-[40px] leading-[40px] text-[#1c1c1c] font-semibold sm:hidden px-4">Consumer  electronics</p>
        <div class="w-[280px] grow-0 shrink-0 hidden sm:block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/left-side.png" class="w-full">
        </div>
        <div class="grow shrink sm:flex flex-col hidden overflow-x-scroll">
            <div class="h-1/2 flex">
            <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                <div class="h-full">
                    <p class="text-[#1c1c1c] font-medium">Smart watches</p>
                    <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                    <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                </div>
                <div class="w-[80px] overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/03.png" alt="" class="hover:scale-110 hover:transition-all">
                </div>
            </div>
            <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                <div class="h-full">
                    <p class="text-[#1c1c1c] font-medium">Cameras</p>
                    <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                    <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 89</p>
                </div>
                <div class="w-[80px] overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/05.png" alt="" class="hover:scale-110 hover:transition-all">
                </div>
            </div>
            <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                <div class="h-full">
                    <p class="text-[#1c1c1c] font-medium">Headphones</p>
                    <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                    <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 10</p>
                </div>
                <div class="w-[80px] overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/06.png" alt="" class="hover:scale-110 hover:transition-all">
                </div>
            </div>
            <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                <div class="h-full">
                    <p class="text-[#1c1c1c] font-medium">Smart Watches</p>
                    <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                    <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                </div>
                <div class="w-[80px] overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tech/02.png" alt="" class="hover:scale-110 hover:transition-all">
                </div>
            </div>
            </div>
            <div class="h-1/2 flex">
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Gaming set</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 35</p>
                    </div>
                    <div class="w-[80px] overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech/06.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Laptops & PC</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 340</p>
                    </div>
                    <div class="w-[80px] overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech/04.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Smartphones</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 19</p>
                    </div>
                    <div class="w-[80px] overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech/07.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
                <div class="w-1/4 min-w-[200px] border p-4 flex items-center justify-between cursor-pointer">
                    <div class="h-full">
                        <p class="text-[#1c1c1c] font-medium">Electric Kattle</p>
                        <p class="text-[#8B96A5] text-[12px] leading-[13px]">From</p>
                        <p class="text-[#8B96A5] text-[13px] leading-[14px]">USD 240</p>
                    </div>
                    <div class="w-[80px] overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech/10.png" alt="" class="hover:scale-110 hover:transition-all">
                    </div>
                </div>
            </div>
        </div>
        <div class="grow shrink sm:hidden">
            <div class="overflow-x-scroll flex">
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech/image 22.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech/image 32.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/04.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/rasm.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
                <div class="w-[130px] border p-3 grow-0 shrink-0">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/furniture/rasm.png" alt="" class="w-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                </div>
            </div>
            <div class="px-4 flex items-center h-[50px] border-t">
                <p class="text-[#0d6efd] text-[15px] mr-2">Source now</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_forward_blue.png" alt="" class="w-[16px]">
            </div>
        </div>
    </div>

    <!-- an easy way to send requests suppliers -->
    <div class="mt-4 rounded-md shadow-md max-w-[1200px] m-auto  bg-cover bg-center sm:flex" style="background-image: url('<?php echo get_template_directory_uri();?>/images/Group\ 982.png');">
        <div class="sm::w-1/2 text-white p-4 sm:p-10">
            <p class="text-[40px]">An easy way to send requests suppliers</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, expedita velit ea rerum tempora doloribus ipsa consectetur ut ducimus neque!</p>
        </div>
        <div class="sm:w-1/2 p-4 sm:p-10">
            <div class="bg-white p-5 rounded-md">
                <p>Send quote to suppliers</p>
                <input type="text" class="w-full border rounded-md h-[32px] px-3 placeholder:text-[15px] mt-4 outline-none" placeholder="What item you need?">
                <textarea type="text" class="w-full border rounded-md h-[80px] px-3 placeholder:text-[15px] mt-4 outline-none" placeholder="Type more details"></textarea>
                <div class="flex items-center mt-4">
                    <input type="text" class="md:w-[200px] w-[120px] border rounded-md h-[32px] px-3 placeholder:text-[15px] outline-none" placeholder="Quantity">
                    <select name="" id="" class="h-[32px] md:w-[100px] w-[80px] border rounded-md ml-3 outline-none">
                        <option value="Pcs">Pcs</option>
                    </select>
                </div>
                <button class="px-5 h-[32px] bg-gradient-to-b from-[#417EFF] to-[#0168FF] text-[#fff] rounded-md mt-4 text-[12px] outline-none hover:scale-110 hover:transition-all hover:shadow-md">Send Enquiry</button>
            </div>
        </div>
    </div>

    <div class="px-4">
        <h1 class="my-4 text-[20px] text-[#1c1c1c] font-medium max-w-[1200px] m-auto">Recommended Items</h1>
    </div>
    <div class="px-2">
        <div class="max-w-[1200px] m-auto flex flex-wrap items-stretch">
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/05.png" alt="" class="m-auto hover:scale-110 hover:transition-all">
                    </div>    
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$10.30</p>
                    <p class="text-[#606060] text-[14px] font-medium">Tshirts with multiple colors, for men</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/03.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$10.30</p>
                    <p class="text-[#606060] text-[14px] font-medium">Jeans shorts for men blue color</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/01.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$12.50</p>
                    <p class="text-[#606060] text-[14px] font-medium">Brown winter coat medium size</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/06.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$34.00</p>
                    <p class="text-[#606060] text-[14px] font-medium">Jeans bag for travel for men</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/07.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$99.00</p>
                    <p class="text-[#606060] text-[14px] font-medium">Leather Wallet</p>
                </div>
            </div>
    
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/04.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$10.30</p>
                    <p class="text-[#606060] text-[14px] font-medium">Canon camera black, 100x zoom </p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/02.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$8.99</p>
                    <p class="text-[#606060] text-[14px] font-medium">Headset for gaming with mic</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/07.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$10.30</p>
                    <p class="text-[#606060] text-[14px] font-medium">Smartwatch silver color modern</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/05.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$10.30</p>
                    <p class="text-[#606060] text-[14px] font-medium">Blue Wallet for men leather material</p>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/4 sm:w-1/3 w-1/2 p-2 cursor-pointer">
                <div class="bg-white p-3 h-full rounded-md shadow-md">
                    <div class="overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recomm_items/05.png" alt="" class="mx-auto hover:scale-110 hover:transition-all ">
                    </div>
                    <p class="text-[#1c1c1c] text-[16px] font-semibold">$80.95</p>
                    <p class="text-[#606060] text-[14px] font-medium">Jeans bag for travel, for men</p>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4">
        <h1 class="my-4 text-[20px] text-[#1c1c1c] font-medium max-w-[1200px] m-auto">Our extra services</h1>
    </div>
    <div class="px-4">
        <div class="max-w-[1200px] m-auto flex flex-wrap items-stretch">
            <div class="md:w-1/4 sm:w-1/3 p-2 cursor-pointer w-1/2">
                <div class="rounded-md shadow-md bg-white h-full hover:scale-110 hover:transition-all hover:shadow-lg">
                    <div class="h-[100px] bg-cover bg-center rounded-md" style="background-image: url('<?php echo get_template_directory_uri();?>/images/mask_group/Mask group.png');">
                        <div class="bg-black/40 w-full h-full rounded-md"></div>
                    </div>
                    <div class="bg-white p-3 flex items-center justify-between w-full rounded-md">
                        <p class="text-[13px] font-medium w-2/3">Source from Industry Hubs</p>
                        <div class="flex items-center justify-center h-[44px] w-[44px] rounded-full bg-white relative top-[-36px]">
                            <div class="h-[40px] w-[40px] rounded-full bg-[#d1e7ff] flex items-center justify-center  hover:scale-110 hover:transition-all hover:shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/search.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/4 sm:w-1/3 p-2 cursor-pointer w-1/2">
                <div class="rounded-md shadow-md bg-white h-full hover:scale-110 hover:transition-all hover:shadow-lg">
                    <div class="h-[100px] bg-cover bg-center rounded-md" style="background-image: url('<?php echo get_template_directory_uri();?>/images/mask_group/Mask group (1).png');">
                        <div class="bg-black/40 w-full h-full rounded-md"></div>
                    </div>
                    <div class="bg-white p-3 flex items-center justify-between w-full rounded-md">
                        <p class="text-[13px] font-medium w-2/3">Customize your products</p>
                        <div class="flex items-center justify-center h-[44px] w-[44px] rounded-full bg-white relative top-[-36px]">
                            <div class="h-[40px] w-[40px] rounded-full bg-[#d1e7ff] flex items-center justify-center hover:scale-110 hover:transition-all hover:shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/inventory_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/4 sm:w-1/3 p-2 cursor-pointer w-1/2">
                <div class="rounded-md shadow-md bg-white h-full hover:scale-110 hover:transition-all hover:shadow-lg">
                    <div class="h-[100px] bg-cover bg-center rounded-md" style="background-image: url('<?php echo get_template_directory_uri();?>/images/mask_group/Mask group (2).png');">
                        <div class="bg-black/40 w-full h-full rounded-md"></div>
                    </div>
                    <div class="bg-white p-3 flex items-center justify-between w-full rounded-md">
                        <p class="text-[13px] font-medium w-2/3">Fast reliable shipping by ocean or air</p>
                        <div class="flex items-center justify-center h-[44px] w-[44px] rounded-full bg-white relative top-[-36px]">
                            <div class="h-[40px] w-[40px] rounded-full bg-[#d1e7ff] flex items-center justify-center hover:scale-110 hover:transition-all hover:shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/send.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/4 sm:w-1/3 p-2 cursor-pointer w-1/2">
                <div class="rounded-md shadow-md bg-white h-full hover:scale-110 hover:transition-all hover:shadow-lg">
                    <div class="h-[100px] bg-cover bg-center rounded-md" style="background-image: url('<?php echo get_template_directory_uri();?>/images/mask_group/Mask group (3).png');">
                        <div class="bg-black/40 w-full h-full rounded-md"></div>
                    </div>
                    <div class="bg-white p-3 flex items-center justify-between w-full rounded-md">
                        <p class="text-[13px] font-medium w-2/3">Product monitoring and inspection</p>
                        <div class="flex items-center justify-center h-[44px] w-[44px] rounded-full bg-white relative top-[-36px]">
                            <div class="h-[40px] w-[40px] rounded-full bg-[#d1e7ff] flex items-center justify-center hover:scale-110 hover:transition-all hover:shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/security.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4">
        <h1 class="my-4 text-[20px] text-[#1c1c1c] font-medium max-w-[1200px] m-auto hidden sm:block">Suppliers by region</h1>
    </div>
    <div class="px-2">
        <div class="max-w-[1200px] m-auto sm:flex flex-wrap items-center hidden">
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f1.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Arabic Emirates</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f2.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Australia</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f3.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">United States</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f4.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Russia</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f5.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Italy</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
    
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f6.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Denmark</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">denmark.com.dk</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f7.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">France</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.com.fr</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f8.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Arabic Emirates</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f9.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">China</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.ae</p>
                </div>
            </div>
            <div class="flex items-center lg:w-1/5 md:w-1/4 sm:w-1/3 cursor-pointer p-2">
                <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/flags/f10.png" alt=""></div>
                <div class="ml-1">
                    <p class="text-[#1c1c1c] text-[13px] font-medium leading-[14px]">Great Britain</p>
                    <p class="text-[#8b96a5] text-[11px] leading-[12px]">shopname.co.uk</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Subscribe on our newsletter -->
    <div class="py-[40px] mt-8 bg-[#EFF2F4] px-4 hidden sm:block">
        <h1 class="text-[16px] text-[#1c1c1c] font-semibold max-w-[1200px] m-auto text-center">Subscribe on our newsletter</h1>
        <p class="text-[#606060] text-center text-[14px]">Get daily news on upcoming offers from many suppliers all over the world</p>
        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center bg-white px-2 h-[32px] rounded-md">
                <div class="shrink-0 grow-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="">
                </div>
                <div>
                    <input type="text" class="outline-none sm:w-full w-[135px] placeholder:text-[12px] h-[32px] leading-[36px] px-1" placeholder="Email">
                </div>
            </div>
            <button class="sm:w-[150px] w-[80px] h-[36px] bg-gradient-to-b from-[#417EFF] to-[#0168FF] text-[#fff] rounded-md ml-2 text-[12px] hover:scale-105 hover:transition-all hover:shadow-lg">Subscribe</button>
        </div>
    </div>

    <?php get_footer(); ?>
    
    <script>
        var menu_icon = document.getElementsByClassName("menu_icon")[0];
        var mobile_menu = document.getElementsByClassName("mobile_menu")[0];
        var close_icon = document.getElementsByClassName("close_icon")[0];

        menu_icon.addEventListener("click", function () {
            mobile_menu.style.left = "0px";
            mobile_menu.style.transition = "all 0.5s";
        });
        close_icon.addEventListener("click", function () {
            mobile_menu.style.left = "-100%";
            mobile_menu.style.transition = "all 0.5s";
        });
    </script>

</body>
</html>
                