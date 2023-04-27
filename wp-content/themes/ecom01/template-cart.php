<?php 
//Template Name: Cart
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&family=Merriweather:wght@300;400;700;900&family=Nunito+Sans:wght@200;300;400;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title>Ecommerce Interface</title>
</head>
<body style="font-family: 'Inter', sans-serif;" class="bg-[#F7FAFC]">

    <?php get_header();?>

    <!-- My Cart -->
    <div class="px-6 hidden md:block">
        <h1 class="max-w-[1200px]  mx-auto text-[#1c1c1c] text-[22px] font-semibold my-4">My Cart ()</h1>
    </div>
    <div class="md:px-6">
        <div class="max-w-[1200px] m-auto md:flex">
            <div class="grow shrink">
                <div class="bg-white shadow-md md:rounded-md p-3">
                    <div class="py-3 border-b md:flex w-full">
                        <div class="flex w-full">
                            <div class="w-[70px] h-[70px] grow-0 shrink-0 border rounded-md">
                                <img src="<?php echo get_template_directory_uri();?>/images/img-group.png" alt="" class="h-full rounded-md">
                            </div>
                            <div class="px-3 grow">
                                <p class="text-[15px] sm:text-[16px] text-[#1c1c1c] font-medium md:font-semibold">T-shirts with multiple colors, for men and lady</p>
                                <p class="text-[#8b96a5] text-[13px]">Size: medium, Color: blue,  Material: Plastic</p>
                                <p class="text-[#8b96a5] text-[13px]">Seller: Artel Market</p>
                                <div class="md:flex items-center hidden">
                                    <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md m-2 text-[12px] px-3 font-medium">Remove</button>
                                    <button class="border h-[28px] bg-[#fff] text-[#417EFF] rounded-md m-2 text-[12px] px-3 font-medium">Save for later</button>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-[16px] text-[#1c1c1c] font-semibold text-right">$78.99</p>
                                <div class="flex items-center h-[32px] rounded-sm border px-2"> 
                                    <p class="text-[#1c1c1c] text-[15px]">Qty:&nbsp;</p>
                                    <input name="" id="" type="number" min="1" class="w-[40px] outline-none px-1" value="9">
                                </div>
                            </div>
                            <div class="md:hidden py-1 px-3 grow-0 shrink-0 cursor-pointer relative">
                                <img src="<?php echo get_template_directory_uri();?>/images/more_vert.png" alt="">
                                <div class="absolute left-[-130px] bg-white p-2 rounded-md shadow-md w-[160px] hidden buttons_div">
                                    <div class="">
                                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md m-2 text-[12px] px-3 font-medium w-[130px]">Remove</button>
                                        <button class="border h-[28px] bg-[#fff] text-[#417EFF] rounded-md m-2 text-[12px] px-3 font-medium w-[130px]">Save for later</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 md:hidden">
                            <div class="flex items-center border rounded-md">
                                <div class="h-[28px] w-[32px] flex items-center justify-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri();?>/images/minus.png" alt="">
                                </div>
                                <div class="h-[28px] w-[50px]">
                                    <input type="text" class="w-[50px] h-[28px] text-center leading-[28px] border-l  border-r outline-none" placeholder="1">
                                </div>
                                <div class="h-[28px] w-[32px] flex items-center justify-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri();?>/images/add.png" alt="">
                                </div>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#1c1c1c] font-semibold text-right">$78.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-3 border-b md:flex w-full">
                        <div class="flex w-full">
                            <div class="w-[70px] h-[70px] grow-0 shrink-0 border rounded-md">
                                <img src="<?php echo get_template_directory_uri();?>/images/recomm_items/07.png" alt="" class="h-full rounded-md">
                            </div>
                            <div class="px-3 grow">
                                <p class="text-[15px] sm:text-[16px] text-[#1c1c1c] font-medium md:font-semibold">Solid Backpack blue jeans large size</p>
                                <p class="text-[#8b96a5] text-[13px]">Size: medium, Color: blue,  Material: Plastic</p>
                                <p class="text-[#8b96a5] text-[13px]">Seller: Artel Market</p>
                                <div class="md:flex items-center hidden">
                                    <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md m-2 text-[12px] px-3 font-medium">Remove</button>
                                    <button class="border h-[28px] bg-[#fff] text-[#417EFF] rounded-md m-2 text-[12px] px-3 font-medium">Save for later</button>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-[16px] text-[#1c1c1c] font-semibold text-right">$78.99</p>
                                <div class="flex items-center h-[32px] rounded-sm border px-2"> 
                                    <p class="text-[#1c1c1c] text-[15px]">Qty:&nbsp;</p>
                                    <input name="" id="" type="number" min="1" class="w-[40px] outline-none px-1" value="9">
                                </div>
                            </div>
                            <div class="md:hidden py-1 px-3 grow-0 shrink-0 cursor-pointer relative">
                                <img src="<?php echo get_template_directory_uri();?>/images/more_vert.png" alt="">
                                <div class="absolute left-[-130px] bg-white p-2 rounded-md shadow-md w-[160px] hidden buttons_div">
                                    <div class="">
                                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md m-2 text-[12px] px-3 font-medium w-[130px]">Remove</button>
                                        <button class="border h-[28px] bg-[#fff] text-[#417EFF] rounded-md m-2 text-[12px] px-3 font-medium w-[130px]">Save for later</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 md:hidden">
                            <div class="flex items-center border rounded-md">
                                <div class="h-[28px] w-[32px] flex items-center justify-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri();?>/images/minus.png" alt="">
                                </div>
                                <div class="h-[28px] w-[50px]">
                                    <input type="text" class="w-[50px] h-[28px] text-center leading-[28px] border-l  border-r outline-none" placeholder="1">
                                </div>
                                <div class="h-[28px] w-[32px] flex items-center justify-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri();?>/images/add.png" alt="">
                                </div>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#1c1c1c] font-semibold text-right">$78.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-3 border-b md:flex w-full">
                        <div class="flex w-full">
                            <div class="w-[70px] h-[70px] grow-0 shrink-0 border rounded-md">
                                <img src="<?php echo get_template_directory_uri();?>/images/tech/image 85.png" alt="" class="h-full rounded-md">
                            </div>
                            <div class="px-3 grow">
                                <p class="text-[15px] sm:text-[16px] text-[#1c1c1c] font-medium md:font-semibold">T-shirts with multiple colors, for men and lady</p>
                                <p class="text-[#8b96a5] text-[13px]">Size: medium, Color: blue,  Material: Plastic</p>
                                <p class="text-[#8b96a5] text-[13px]">Seller: Artel Market</p>
                                <div class="md:flex items-center hidden">
                                    <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md m-2 text-[12px] px-3 font-medium">Remove</button>
                                    <button class="border h-[28px] bg-[#fff] text-[#417EFF] rounded-md m-2 text-[12px] px-3 font-medium">Save for later</button>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-[16px] text-[#1c1c1c] font-semibold text-right">$78.99</p>
                                <div class="flex items-center h-[32px] rounded-sm border px-2"> 
                                    <p class="text-[#1c1c1c] text-[15px]">Qty:&nbsp;</p>
                                    <input name="" id="" type="number" min="1" class="w-[40px] outline-none px-1" value="9">
                                </div>
                            </div>
                            <div class="md:hidden py-1 px-3 grow-0 shrink-0 cursor-pointer relative">
                                <img src="<?php echo get_template_directory_uri();?>/images/more_vert.png" alt="">
                                <div class="absolute left-[-130px] bg-white p-2 rounded-md shadow-md w-[160px] hidden buttons_div">
                                    <div class="">
                                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md m-2 text-[12px] px-3 font-medium w-[130px]">Remove</button>
                                        <button class="border h-[28px] bg-[#fff] text-[#417EFF] rounded-md m-2 text-[12px] px-3 font-medium w-[130px]">Save for later</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 md:hidden">
                            <div class="flex items-center border rounded-md">
                                <div class="h-[28px] w-[32px] flex items-center justify-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri();?>/images/minus.png" alt="">
                                </div>
                                <div class="h-[28px] w-[50px]">
                                    <input type="text" class="w-[50px] h-[28px] text-center leading-[28px] border-l  border-r outline-none" placeholder="1">
                                </div>
                                <div class="h-[28px] w-[32px] flex items-center justify-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri();?>/images/add.png" alt="">
                                </div>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#1c1c1c] font-semibold text-right">$78.99</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:flex items-center justify-between py-2 hidden">
                    <button class="px-3 h-[28px] bg-gradient-to-b from-[#417EFF] to-[#0168FF] text-[#fff] rounded-md mt-2 text-[12px] flex items-center">
                        <img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" alt="" class="w-[12px] mr-1">
                        <p>Back to shop</p>
                    </button>
                    <button class="px-3 h-[28px] bg-[#fff] text-[#417EFF] rounded-md mt-2 text-[12px] border">Remove all</button>
                </div>
                <div class="max-w-[1200px] m-auto lg:flex items-center py-4 hidden">
                    <div class="flex w-1/3">
                        <div class="w-[36px] h-[36px] rounded-full flex items-center justify-center bg-[#DEE2E7]">
                            <img src="<?php echo get_template_directory_uri();?>/images/🔹Icon Color.png" alt="" class="h-[18px]">
                        </div>
                        <div class="pl-3 flex flex-col justify-evenly">
                            <p class="text-[14px] text-[#1c1c1c] font-semibold leading-[15px]">Secure payment</p>
                            <p class="text-[13px] text-[#a9acb0] leading-[13px]">Have you ever finally just</p>
                        </div>
                    </div>
                    <div class="flex w-1/3">
                        <div class="w-[36px] h-[36px] rounded-full flex items-center justify-center bg-[#DEE2E7]">
                            <img src="<?php echo get_template_directory_uri();?>/images/message.png" alt="" class="w-[18px]">
                        </div>
                        <div class="pl-3 flex flex-col justify-evenly">
                            <p class="text-[14px] text-[#1c1c1c] font-semibold leading-[15px]">Customer support</p>
                            <p class="text-[13px] text-[#a9acb0] leading-[13px]">Have you ever finally just</p>
                        </div>
                    </div>
                    <div class="flex w-1/3">
                        <div class="w-[36px] h-[36px] rounded-full flex items-center justify-center bg-[#DEE2E7]">
                            <img src="<?php echo get_template_directory_uri();?>/images/truck.png" alt="" class="w-[18px]">
                        </div>
                        <div class="pl-3 flex flex-col justify-evenly">
                            <p class="text-[14px] text-[#1c1c1c] font-semibold leading-[15px]">Free delivery</p>
                            <p class="text-[13px] text-[#a9acb0] leading-[13px]">Have you ever finally just</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-[270px] grow-0 shrink-0 md:ml-4">
                <div class="bg-white p-4 rounded-md shadow-md ">
                    <p class="text-[14px] text-[#505050]">Have a coupon?</p>
                    <div class="flex h-[32px] rounded-md">
                        <input type="text" class="w-full h-[32px] border outline-none rounded-l-md placeholder:text-[12px] px-3" placeholder="Add coupon">
                        <button class="px-3 h-[32px] bg-[#fff] text-[#417EFF] rounded-r-md  text-[12px]  border">Apply</button>
                    </div>
                </div>
                <div class="bg-white p-3 mt-4 text-[#505050] text-[13px] rounded-md shadow-md">
                    <div class="flex items-center justify-between py-1">
                        <p>Subtotal:</p>
                        <p class="text-[#505050]">$1403.97</p>
                    </div>
                    <div class="flex items-center justify-between py-1">
                        <p>Discount:</p>
                        <p class="text-[#fa3434]">-$60.00</p>
                    </div>
                    <div class="flex items-center justify-between py-1">
                        <p>Tax:</p>
                        <p class="text-[#00B517]">+$14.00</p>
                    </div>
                    <hr class="mt-2">
                    <div class="flex items-center justify-between py-4">
                        <p class="text-[#1c1c1c] font-medium">Total:</p>
                        <p class="text-[#1c1c1c] text-[15px] font-medium">+$1357.97</p>
                    </div>
                    <button class="h-[54px] w-full bg-[#00b517] rounded-md text-white text-[15px] text-center leading-[54px]">Checkout</button>
                    <div class="md:flex justify-evenly items-center mt-4 hidden">
                        <div><img src="<?php echo get_template_directory_uri();?>/images/payment/american_express.png" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri();?>/images/payment/maestro.png" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri();?>/images/payment/paypal.png" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri();?>/images/payment/visa.png" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri();?>/images/payment/apple.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:bg-white bg-[#f7fafc] max-w-[1200px] m-auto px-2 sm:px-4 py-3 shadow-md md:rounded-md">
        <p class="text-[#1c1c1c] text-[16px] font-semibold">Saved for later</p>
        <div class="sm:flex pt-4 flex-wrap justify-around">
            <div class="w-full sm:w-1/4 sm:min-w-[280px] md:min-w-[240px] p-2 bg-white sm:bg-none shadow-md rounded-md sm:shadow-none flex sm:block my-1">
                <div class="sm:bg-[#EEEEEE] bg-white sm:py-3 rounded-md grow-0 shrink-0">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 32.png" alt="" class="h-[100px] w-[100px] sm:w-[150px] sm:h-[150px] m-auto">
                </div>
                <div class="p-2 flex flex-col w-full justify-between">
                    <p class="text-[#1c1c1c] text-[15px] leading-[15px] font-semibold py-1 order-2 sm:order-1">$99.50</p>
                    <p class="text-[#606060] text-[13px] laeding-[13px] order-1 sm:order-2">GoPro HERO6 4K Action Camera - Black</p>
                    <div class="flex flex-wrap items-center justify-between order-3 ">
                        <button class="px-3 h-[28px] w-[120px] bg-[#fff] text-[#417EFF] rounded-md text-[12px] border flex items-center m-1 sm:m-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/bluecart.png" alt="" class="w-[16px] mr-1">
                            <p>Move to cart</p>
                        </button>
                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md  text-[12px] px-3 font-medium w-[120px] sm:hidden m-1">Remove</button>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/4 sm:min-w-[280px] md:min-w-[240px] p-2 bg-white sm:bg-none shadow-md rounded-md sm:shadow-none flex sm:block my-1">
                <div class="sm:bg-[#EEEEEE] bg-white sm:py-3 rounded-md grow-0 shrink-0">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 22.png" alt="" class="h-[100px] w-[100px] sm:w-[150px] sm:h-[150px] m-auto">
                </div>
                <div class="p-2 flex flex-col w-full justify-between">
                    <p class="text-[#1c1c1c] text-[15px] leading-[15px] font-semibold py-1 order-2 sm:order-1">$99.50</p>
                    <p class="text-[#606060] text-[13px] laeding-[13px] order-1 sm:order-2">GoPro HERO6 4K Action Camera - Black</p>
                    <div class="flex flex-wrap items-center justify-between order-3 ">
                        <button class="px-3 h-[28px] w-[120px] bg-[#fff] text-[#417EFF] rounded-md text-[12px] border flex items-center m-1 sm:m-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/bluecart.png" alt="" class="w-[16px] mr-1">
                            <p>Move to cart</p>
                        </button>
                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md  text-[12px] px-3 font-medium w-[120px] sm:hidden m-1">Remove</button>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/4 sm:min-w-[280px] md:min-w-[240px] p-2 bg-white sm:bg-none shadow-md rounded-md sm:shadow-none flex sm:block my-1">
                <div class="sm:bg-[#EEEEEE] bg-white sm:py-3 rounded-md grow-0 shrink-0">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 35.png" alt="" class="h-[100px] w-[100px] sm:w-[150px] sm:h-[150px] m-auto">
                </div>
                <div class="p-2 flex flex-col w-full justify-between">
                    <p class="text-[#1c1c1c] text-[15px] leading-[15px] font-semibold py-1 order-2 sm:order-1">$99.50</p>
                    <p class="text-[#606060] text-[13px] laeding-[13px] order-1 sm:order-2">GoPro HERO6 4K Action Camera - Black</p>
                    <div class="flex flex-wrap items-center justify-between order-3 ">
                        <button class="px-3 h-[28px] w-[120px] bg-[#fff] text-[#417EFF] rounded-md text-[12px] border flex items-center m-1 sm:m-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/bluecart.png" alt="" class="w-[16px] mr-1">
                            <p>Move to cart</p>
                        </button>
                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md  text-[12px] px-3 font-medium w-[120px] sm:hidden m-1">Remove</button>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/4 sm:min-w-[280px] md:min-w-[240px] p-2 bg-white sm:bg-none shadow-md rounded-md sm:shadow-none flex sm:block my-1">
                <div class="sm:bg-[#EEEEEE] bg-white sm:py-3 rounded-md grow-0 shrink-0">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 34.png" alt="" class="h-[100px] w-[100px] sm:w-[150px] sm:h-[150px] m-auto">
                </div>
                <div class="p-2 flex flex-col w-full justify-between">
                    <p class="text-[#1c1c1c] text-[15px] leading-[15px] font-semibold py-1 order-2 sm:order-1">$99.50</p>
                    <p class="text-[#606060] text-[13px] laeding-[13px] order-1 sm:order-2">GoPro HERO6 4K Action Camera - Black</p>
                    <div class="flex flex-wrap items-center justify-between order-3 ">
                        <button class="px-3 h-[28px] w-[120px] bg-[#fff] text-[#417EFF] rounded-md text-[12px] border flex items-center m-1 sm:m-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/bluecart.png" alt="" class="w-[16px] mr-1">
                            <p>Move to cart</p>
                        </button>
                        <button class="border h-[28px] bg-[#fff] text-[#fa3434] rounded-md  text-[12px] px-3 font-medium w-[120px] sm:hidden m-1">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[1200px] m-auto min-h-[100px] rounded-md bg-cover bg-center p-4 flex items-center justify-between text-white" style="background-image:url('images/Rectangle\ 176.png')">
            <div class="mr-2">
                <p class="text-[20px] font-medium">Super discount on more than 100 USD</p>
                <p class="text-[13px] text-white/70">Have you ever finally just write dummy info</p>
            </div>
            <button class="bg-[#FF9017] text-white px-3 h-[32px] rounded-md text-[13px] grow-0 shrink-0">Shop now</button>
        </div>
    </div>

    <?php get_footer();?>
    <script src="filter.js"></script>
</body>
</html>
                