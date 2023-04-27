    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <title>Document</title>
    </head>
    <body>

    <!-- navbar desktop -->
    <nav class="bg-white shadow-md h-[100px] px-6 hidden lg:block desktop">
        <div class="max-w-[1200px] m-auto h-[60px] flex items-center justify-between">
            <div class="flex items-center cursor-pointer">
                <a href="<?php echo site_url();?>">
                <div class="w-[40px] h-[40px] mr-2">
                    <?php $logoimg = get_header_image();?>
                    <img src="<?php echo $logoimg; ?>" alt="" class="w-full">
                </div>
                </a>
                <p class="text-[20px] font-semibold text-[#8CB7F5]">Brand</p>
            </div>
            <div class="flex items-center rounded-md border-2 border-[#0D6EFD]">
                <input type="text" class="w-[300px] outline-none h-[32px] rounded-md px-3" placeholder="Search">
                <select name="" id="" class="w-[150px] text-[#1C1C1C] text-[16px] border-l border-[#0d6efd] h-[32px] px-3 outline-none cursor-pointer">
                    <option value="All Category">All Category</option>
                </select>
                <button class="bg-[#0D6EFD] text-white px-4 h-[32px] cursor-pointer">Search</button>
            </div>
            <div class="flex items-stretch">
                <div class="mr-3 cursor-pointer">
                    <div class="w-[16px] m-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="">
                    </div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">Profile</p>
                </div>
                <div class="mx-3 cursor-pointer">
                    <div class="w-[16px] m-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/message.png" alt="">
                    </div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">Message</p>
                </div>
                <div class="mx-3 flex flex-col justify-between cursor-pointer">
                    <div class="w-[16px] m-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/heart.png" alt="">
                    </div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">Orders</p>
                </div>
                <div class="ml-3">
                    <div class="w-[16px] m-auto cursor-pointer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cart.png" alt="">
                    </div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">My Cart</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="max-w-[1200px] m-auto flex items-center justify-between h-[39px]">
            <div class="flex item">
                <div class="w-[20px] cursor-pointer">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="" class="w-full">
                </div>
                <div>
                    <!-- <ul class="items-center flex text-[14px] text-[#1c1c1c] font-medium">
                        <li class="mx-3 cursor-pointer">All Category</li>
                        <li class="mx-3 cursor-pointer">Hot offers</li>
                        <li class="mx-3 cursor-pointer">Gift boxes</li>
                        <li class="mx-3 cursor-pointer">Projects</li>
                        <li class="mx-3 cursor-pointer">Menu item</li>
                        <li class="mx-3 cursor-pointer">
                            <select name="" id="" class="outline-none cursor-pointer">
                                <option value="Help">Help</option>
                            </select>
                        </li>
                    </ul> -->
                    <div class="wp_nav_primary">
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </div>
                </div>
            </div>
            <div class="flex items-center text-[14px] text-[#1c1c1c] font-medium">
                <select name="" id="" class="outline-none cursor-pointer">
                    <option value="English, USD">English, USD</option>
                </select>
                <div class="flex items-center ml-5 cursor-pointer">
                    <p class="mr-1">Ship to</p>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt=""></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- navbar mobile -->
    <nav class="bg-white px-4 lg:hidden mobile">
        <div class="flex justify-between items-center h-[60px]">
            <div class="flex items-center">
                <div class="w-[24px] mr-3 cursor-pointer menu_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="" class="w-full">
                </div>
                <div class="flex items-center cursor-pointer">
                    <div class="w-[32px] h-[32px] mr-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-symbol.png" alt="" class="w-full">
                    </div>
                    <p class="text-[20px] font-semibold text-[#8CB7F5]">Brand</p>
                </div>
            </div>
            <div class="flex items-center">
                <div class="mr-3 cursor-pointer">
                    <div class="w-[24px]"><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_cart.png" alt=""></div>
                </div>
                <div class="cursor-pointer">
                    <div class="w-[24px]"><img src="<?php echo get_template_directory_uri(); ?>/images/person.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="flex border rounded-md items-center w-full px-2 bg-[#f7fafc]">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Vector.png" alt=""></div>
            <div class="w-full bg-[#f7fafc]">
                <input type="text" class="outline-none h-[32px] w-full rounded-md bg-[#F7FAFC] px-3" placeholder="Search">
            <div>
        </div>
    </nav>

    <div class="min-h-[100vh] w-full bg-black/40 mobile_menu fixed left-[-100%] top-0">
        <div class="border w-[250px] min-h-[100vh] bg-white">
            <div class="bg-[#EFF2F4] p-4 flex justify-between items-start">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Avatar_gray.png" alt="">
                    <div class="h-[30px] flex items-center text-[14px] text-[#1c1c1c] mt-1">
                        <p class="cursor-pointer">Sign in</p>
                        <div class="mx-2 h-full border w-[1px]"></div>
                        <p class="cursor-pointer">Register</p>
                    </div>
                </div>
                <div class="bg-black/50 rounded-sm cursor-pointer close_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clear.png" alt="">
                </div>
                
            </div>
            <div class="bg-white px-4 py-3 text-[#1c1c1c] text-[15px]">
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_mobile_menu.png" alt="">
                    </div>
                    <p class="">Home</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/list_mobile_menu.png" alt="">
                    </div>
                    <p class="">Categories</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/favorite_border_mobile_menu.png" alt="">
                    </div>
                    <p class="">favourites</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/inventory_2_mobile_menu.png" alt="">
                    </div>
                    <p class="">My orders</p>
                </div>
                <div class="my-3 border"></div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/language_mobile_menu.png" alt="">
                    </div>
                    <p class="">English | USD</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/headset_mic.png" alt="">
                    </div>
                    <p class="">Contact US</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <div class="mr-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/business.png" alt="">
                    </div>
                    <p class="">My orders</p>
                </div>
                <div class="my-3 border"></div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <p class="pl-8">User agreement</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <p class="pl-8">Partnership</p>
                </div>
                <div class="flex items-center cursor-pointer h-[36px] rounded-md">
                    <p class="pl-8">Privacy policy</p>
                </div>
    
            </div>
        </div>
    </div>

    </body>
    </html>