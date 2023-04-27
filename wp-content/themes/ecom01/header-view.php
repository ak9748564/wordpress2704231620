    <!-- navbar desktop -->
    <nav class="bg-white shadow-md px-6 hidden lg:block desktop ">
        <div class="max-w-[1200px] m-auto h-[60px] flex items-center justify-between">
            <div class="flex items-center">
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
                <select name="" id="" class="w-[150px] text-[#1C1C1C] text-[16px] border-l border-[#0d6efd] h-[32px] px-3">
                    <option value="All Category">All Category</option>
                </select>
                <button class="bg-[#0D6EFD] text-white px-4 h-[32px]">Search</button>
            </div>
            <div class="flex items-stretch">
                <div class="mr-3">
                    <div class="w-[16px] m-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt=""></div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">Profile</p>
                </div>
                <div class="mx-3">
                    <div class="w-[16px] m-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/message.png" alt=""></div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">Message</p>
                </div>
                <div class="mx-3 flex flex-col justify-between">
                    <div class="w-[16px] m-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/heart.png" alt=""></div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">Orders</p>
                </div>
                <div class="ml-3">
                    <div class="w-[16px] m-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/cart.png" alt=""></div>
                    <p class="text-[#8B96A5] text-[10px] mt-1">My Cart</p>
                </div>
            </div>
        </div>
    </nav>

    <!-- navbar mobile -->
    <nav class="bg-white px-6 hidden md:block lg:hidden mobile">
        <div class="flex justify-between items-center h-[60px]">
            <div class="flex items-center">
                <div class="w-[24px] mr-3 cursor-pointer"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="" class="w-full"></div>
                <div class="flex items-center cursor-pointer">
                    <div class="w-[32px] h-[32px] mr-1">
                        <img src="images/logo-symbol.png" alt="" class="w-full">
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
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/Vector.png" alt=""></div>
            <div class="w-full bg-[#f7fafc]"><input type="text" class="outline-none h-[32px] w-full rounded-md bg-[#F7FAFC] px-3" placeholder="Search"></div>
        </div>
    </nav>

    <!-- navbar mobile -->
    <div class="px-4 flex justify-between md:hidden bg-white border-b">
        <div class="flex items-center h-[50px]">
            <img src="<?php echo get_template_directory_uri(); ?>/images/left-arrow.png" alt="" class="h-[16px]">
            <p class="text-[15px] text-[#1c1c1c] ml-3 font-semibold">Mobile accessory</p>
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