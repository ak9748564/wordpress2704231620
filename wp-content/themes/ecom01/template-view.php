<?php
//Template Name: View
?>
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
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Tablets</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Phones</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer  shrink-0">Ipads</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Ipod</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Tools, equipments</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Sports and outdoor</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Animal and pets</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">Machinery tools</li>
            <li class="bg-[#EFF2F4] mx-1 text-[#0d6efd] px-2 py-1 text-[15px] rounded-sm cursor-pointer shrink-0">More Category</li>
        </ul>
    </div>

    <!-- breadcrumbs -->
    <div class="px-4 hidden sm:block">
        <div class="max-w-[1200px] m-auto flex items-center text-[#8b96a5] text-[13px] font-medium">
            <div class="flex items-center h-[50px]">
            <p>Home</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right mx-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            <p>Clothings</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right mx-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            <p>Men's wear</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right mx-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            <p>Summer clothing</p>
            </div>
        </div>
    </div>

    <div class="px-4">
        <div class="flex max-w-[1200px] m-auto">
            <div class="w-[200px] grow-0 shrink-0 hidden md:block">
                <div class="w-full border-t mr-4 py-2">
                    <ul class="w-full h-full overflow-hidden content">
                        <li class="mb-2">
                            <div class="flex items-center justify-between cursor-pointer li"> 
                                <p class="text-[#1c1c1c] text-[15px] font-medium">Category</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">Mobile accessory</li>
                        <li class="text-[14px] text-[#505050] my-1">Electronics</li>
                        <li class="text-[14px] text-[#505050] my-1">Smartphones</li>
                        <li class="text-[14px] text-[#505050] my-1">Modern tech</li>
                        <li class="text-[14px] text-[#0d6efd] my-1 font-medium">See all</li>
                    </ul>
                </div>
                <div class="w-full border-t mr-4 py-2">
                    <ul class="w-full content overflow-hidden">
                        <li class="mb-2">
                            <div class="flex items-center justify-between li cursor-pointer"> 
                                <p class="text-[#1c1c1c] text-[15px] font-medium">Brands</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Samsung</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Apple</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Huawei</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Pocco</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Lenovo</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#0d6efd] my-1 font-medium">See all</li>
                    </ul>
                </div>
                <div class="w-full border-t mr-4 py-2">
                    <ul class="w-full content overflow-hidden">
                        <li class="mb-2">
                            <div class="flex items-center justify-between li cursor-pointer"> 
                                <p class="text-[#1c1c1c] text-[15px] font-medium">Features</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Metallic</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Plastic Cover</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>8GB Ram</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Super Power</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Large Memory</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#0d6efd] my-1 font-medium">See all</li>
                    </ul>
                </div>
                <div class="w-full border-t mr-4 py-2">
                    <div class="content overflow-hidden">
                    <div class="flex items-center justify-between li cursor-pointer"> 
                        <p class="text-[#1c1c1c] text-[15px] font-medium">Price range</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="m-1 w-1/2">
                            <label for="">
                                <p class="text-[#1c1c1c] text-[13px]">Min</p>
                            </label>
                            <input type="text" class="h-[32px] rounded-md border px-2 w-full placeholder:text-[13px] outline-none" placeholder="0">
                        </div>
                        <div class="m-1 w-1/2">
                            <label for="">
                                <p class="text-[#1c1c1c] text-[13px]">Max</p>
                            </label>
                            <input type="text" class="h-[32px] rounded-md border px-2 w-full placeholder:text-[13px] outline-none" placeholder="99999">
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <div class="w-1/2">
                            <button class="rounded-md text-center h-[32px]  border  text-[#0d6efd] w-full">Apply</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="w-full border-t mr-4 py-2">
                    <ul class="w-full content overflow-hidden">
                        <li class="mb-2">
                            <div class="flex items-center justify-between li cursor-pointer"> 
                                <p class="text-[#1c1c1c] text-[15px] font-medium">Condition</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="radio" name="condition" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Any</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="radio" name="condition" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Refurbished</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="radio" name="condition" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Brand New</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="radio" name="condition" id="" class="h-[13px] w-[13px] mr-2">
                                <p>Old items</p>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#0d6efd] my-1 font-medium">See all</li>
                    </ul>
                </div>
                <div class="w-full border-t mr-4 py-2">
                    <ul class="w-full content overflow-hidden">
                        <li class="mb-2">
                            <div class="flex items-center justify-between li cursor-pointer"> 
                                <p class="text-[#1c1c1c] text-[15px] font-medium">Ratings</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <img src="<?php echo get_template_directory_uri();?>/images/rating/5star.png" alt="" class="h-[16px]">
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[16px]">
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <img src="<?php echo get_template_directory_uri();?>/images/rating/3star.png" alt="" class="h-[16px]">
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-2">
                                <img src="<?php echo get_template_directory_uri();?>/images/rating/2star.png" alt="" class="h-[16px]">
                            </div>
                        </li>
                        <li class="text-[14px] text-[#0d6efd] my-1 font-medium">See all</li>
                    </ul>
                </div>
                <div class="w-full border-t mr-4 py-2">
                    <ul class="w-full content overflow-hidden">
                        <li class="mb-2">
                            <div class="flex items-center justify-between li cursor-pointer"> 
                                <p class="text-[#1c1c1c] text-[15px] font-medium">Manufacturer</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="text-[14px] text-[#505050] my-1">
                            <p>Manufacturer</p>
                        </li>
                        <li class="text-[14px] text-[#0d6efd] my-1 font-medium">See all</li>
                    </ul>
                </div>
            </div>
            <div class="grow shrink md:pl-4">
                <div class="h-[46px] bg-white rounded-md flex items-center justify-between px-3 shadow-md">
                    <div class="sm:flex items-center hidden">
                        <p class="text-[13px] text-[#1c1c1c]">12,911</p>
                        <p class="mx-1 text-[13px] text-[#1c1c1c]">items in</p>
                        <p class="text-[13px] text-[#1c1c1c] font-medium">Mobile accessory</p>
                    </div>
                    <div class="flex md:hidden items-center">
                        <div class="flex items-center border py-[2px] px-2 rounded-md cursor-pointer">
                            <p class="text-[#1c1c1c] text-[13px] font-medium mr-2">Sort: Newest</p>
                            <img src="<?php echo get_template_directory_uri();?>/images/sort.png" alt="">
                        </div>
                        <div class="flex items-center border py-[2px] px-2 rounded-md cursor-pointer ml-2">
                            <p class="text-[#1c1c1c] text-[13px] font-medium mr-2">Filter (3)</p>
                            <img src="<?php echo get_template_directory_uri();?>/images/filter_alt.png" alt="">
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="md:flex items-center hidden">
                            <input type="checkbox" name="" id="" class="h-[13px] w-[13px] mr-1">
                            <p class="text-[13px] text-[#1c1c1c]">Verified only</p>
                        </div>
                        <div class="border rounded-md mx-3 hidden md:block">
                            <select name="" id="" class="h-[24px] text-[13px] w-[120px] rounded-md outline-none">
                                <option value="Featured">Featured</option>
                            </select>
                        </div>
                        <div class="flex">
                            <div class="w-[28px] h-[28px] border flex items-center justify-center hover:bg-[#eff2f4] cursor-pointer rounded-l-sm">
                                <img src="<?php echo get_template_directory_uri();?>/images/gridview.png" alt="" class="w-[18px] h-[18px]">
                            </div>
                            <div class="w-[28px] h-[28px] border flex items-center justify-center hover:bg-[#eff2f4] cursor-pointer rounded-r-sm">
                                <img src="<?php echo get_template_directory_uri();?>/images/listview.png" alt="" class="w-[18px] h-[18px]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 sm:flex flex-wrap items-center hidden">
                    <div class="border border-[#0d6efd] rounded-md py-1 text-[12px] font-medium text-[#1c1c1c] m-1 px-2 flex items-center cursor-pointer">
                        <p class="mr-2">Samsung</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="border border-[#0d6efd] rounded-md py-1 text-[12px] font-medium text-[#1c1c1c] m-1 px-2 flex items-center cursor-pointer">
                        <p class="mr-2">Apple</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="border border-[#0d6efd] rounded-md py-1 text-[12px] font-medium text-[#1c1c1c] m-1 px-2 flex items-center cursor-pointer">
                        <p class="mr-2">Poco</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="border border-[#0d6efd] rounded-md py-1 text-[12px] font-medium text-[#1c1c1c] m-1 px-2 flex items-center cursor-pointer">
                        <p class="mr-2">Metallic</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="border border-[#0d6efd] rounded-md py-1 text-[12px] font-medium text-[#1c1c1c] m-1 px-2 flex items-center cursor-pointer">
                        <p class="mr-2">4 star</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="border border-[#0d6efd] rounded-md py-1 text-[12px] font-medium text-[#1c1c1c] m-1 px-2 flex items-center cursor-pointer">
                        <p class="mr-2">3 star</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <p class="text-[13px] font-medium text-[#0d6efd] m-1 cursor-pointer">Clear all filter</p>
                </div>
                <div class="">
                    <div class="mt-1 rounded-md shadow-md bg-white p-2 flex cursor-pointer">
                        <div class="sm:h-[130px] sm:w-[180px] h-[100px] w-[120px] grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/tech/image 33.png" alt="" class="h-full m-auto">
                        </div>
                        <div class="flex flex-col justify-evenly grow shrink">
                            <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            <div class="flex items-center">
                                <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                            </div>
                            <div class="flex flex-wrap items-center flex-wrap">
                                <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                                <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <div class="flex items-center text-[#8b96a5] text-[13px]">
                                    <p>150</p>
                                    <p>&nbsp;orders</p>
                                </div>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <p class="text-[#00b517] text-[13px]">Free Shipping</p>
                            </div>
                            <p class="text-[#606060] text-[14px] hidden sm:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nesciunt libero, aperiam consequatur sed a.</p>
                            <p class="text-[#0d6efd] text-[14px] hidden sm:block">View details</p>
                        </div>
                        <div class="h-[36px] w-[36px] rounded-md sm:flex items-center justify-center border grow-0 shrink-0 hidden">
                            <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                        </div>
                    </div>
                    <div class="mt-1 rounded-md shadow-md bg-white p-2 flex cursor-pointer">
                        <div class="sm:h-[130px] sm:w-[180px] h-[100px] w-[120px] grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/tech/image 23.png" alt="" class="h-full m-auto">
                        </div>
                        <div class="flex flex-col justify-evenly grow shrink">
                            <p class="text-[#1c1c1c] text-[13px] font-medium">GoPro HERO6 4K Action Camera -  Black</p>
                            <div class="flex items-center">
                                <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                            </div>
                            <div class="flex flex-wrap items-center">
                                <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                                <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <div class="flex items-center text-[#8b96a5] text-[13px]">
                                    <p>150</p>
                                    <p>&nbsp;orders</p>
                                </div>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <p class="text-[#00b517] text-[13px]">Free Shipping</p>
                            </div>
                            <p class="text-[#606060] text-[14px] hidden sm:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nesciunt libero, aperiam consequatur sed a.</p>
                            <p class="text-[#0d6efd] text-[14px] hidden sm:block">View details</p>
                        </div>
                        <div class="h-[36px] w-[36px] rounded-md sm:flex hidden items-center justify-center border grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                        </div>
                    </div>
                    <div class="mt-1 rounded-md shadow-md bg-white p-2 flex">
                        <div class="sm:h-[130px] sm:w-[180px] h-[100px] w-[120px] grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/tech/image 32.png" alt="" class="h-full m-auto">
                        </div>
                        <div class="flex flex-col justify-evenly grow shrink">
                            <p class="text-[#1c1c1c] text-[13px] font-medium">GoPro HERO6 4K Action Camera -  Black</p>
                            <div class="flex items-center">
                                <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                            </div>
                            <div class="flex flex-wrap items-center">
                                <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                                <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <div class="flex items-center text-[#8b96a5] text-[13px]">
                                    <p>150</p>
                                    <p>&nbsp;orders</p>
                                </div>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <p class="text-[#00b517] text-[13px]">Free Shipping</p>
                            </div>
                            <p class="text-[#606060] text-[14px] hidden sm:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nesciunt libero, aperiam consequatur sed a.</p>
                            <p class="text-[#0d6efd] text-[14px] hidden sm:block">View details</p>
                        </div>
                        <div class="h-[36px] w-[36px] rounded-md sm:flex hidden items-center justify-center border grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                        </div>
                    </div>
                    <div class="mt-1 rounded-md shadow-md bg-white p-2 flex">
                        <div class="sm:h-[130px] sm:w-[180px] h-[100px] w-[120px] grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/tech/image 34.png" alt="" class="h-full m-auto">
                        </div>
                        <div class="flex flex-col justify-evenly grow shrink">
                            <p class="text-[#1c1c1c] text-[13px] font-medium">GoPro HERO6 4K Action Camera -  Black</p>
                            <div class="flex items-center">
                                <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                            </div>
                            <div class="flex flex-wrap items-center">
                                <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                                <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <div class="flex items-center text-[#8b96a5] text-[13px]">
                                    <p>150</p>
                                    <p>&nbsp;orders</p>
                                </div>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <p class="text-[#00b517] text-[13px]">Free Shipping</p>
                            </div>
                            <p class="text-[#606060] text-[14px] hidden sm:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nesciunt libero, aperiam consequatur sed a.</p>
                            <p class="text-[#0d6efd] text-[14px] hidden sm:block">View details</p>
                        </div>
                        <div class="h-[36px] w-[36px] rounded-md sm:flex hidden items-center justify-center border grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                        </div>
                    </div>
                    <div class="mt-1 rounded-md shadow-md bg-white p-2 flex">
                        <div class="sm:h-[130px] sm:w-[180px] h-[100px] w-[120px] grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/tech/image 35.png" alt="" class="h-full m-auto">
                        </div>
                        <div class="flex flex-col justify-evenly grow shrink">
                            <p class="text-[#1c1c1c] text-[13px] font-medium">GoPro HERO6 4K Action Camera -  Black</p>
                            <div class="flex items-center">
                                <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                            </div>
                            <div class="flex flex-wrap items-center">
                                <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                                <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <div class="flex items-center text-[#8b96a5] text-[13px]">
                                    <p>150</p>
                                    <p>&nbsp;orders</p>
                                </div>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <p class="text-[#00b517] text-[13px]">Free Shipping</p>
                            </div>
                            <p class="text-[#606060] text-[14px] hidden sm:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nesciunt libero, aperiam consequatur sed a.</p>
                            <p class="text-[#0d6efd] text-[14px] hidden sm:block">View details</p>
                        </div>
                        <div class="h-[36px] w-[36px] rounded-md sm:flex hidden items-center justify-center border grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                        </div>
                    </div>
                    <div class="mt-1 rounded-md shadow-md bg-white p-2 flex">
                        <div class="sm:h-[130px] sm:w-[180px] h-[100px] w-[120px] grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/tech/image 86.png" alt="" class="h-full m-auto">
                        </div>
                        <div class="flex flex-col justify-evenly grow shrink">
                            <p class="text-[#1c1c1c] text-[13px] font-medium">GoPro HERO6 4K Action Camera -  Black</p>
                            <div class="flex items-center">
                                <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                            </div>
                            <div class="flex flex-wrap items-center">
                                <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                                <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <div class="flex items-center text-[#8b96a5] text-[13px]">
                                    <p>150</p>
                                    <p>&nbsp;orders</p>
                                </div>
                                <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                                <p class="text-[#00b517] text-[13px]">Free Shipping</p>
                            </div>
                            <p class="text-[#606060] text-[14px] hidden sm:block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nesciunt libero, aperiam consequatur sed a.</p>
                            <p class="text-[#0d6efd] text-[14px] hidden sm:block">View details</p>
                        </div>
                        <div class="h-[36px] w-[36px] rounded-md sm:flex hidden items-center justify-center border grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- grid -->
                <!-- <div class="overflow-x-scroll sm:hidden hidden">
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 33.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 22.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/08.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 32.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/05.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 22.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 34.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 35.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-2 w-[250px] grow-0 shrink-0">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 33.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="sm:flex flex-wrap w-full hidden">
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 33.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 22.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/08.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 32.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/05.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 22.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 34.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 35.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/3 md:w-1/2 sm:w-1/2 p-2 w-[250px]">
                        <div class="bg-white shadow-md rounded-md">
                        <div class="py-4">
                            <img src="images/tech/image 33.png" alt="" class="h-[160px] mx-auto">
                        </div>
                        <div class="my-2 border h-[1px] w-full"></div>
                        <div class="flex p-4">
                            <div class="">
                                <div class="flex items-center">
                                    <p class="mr-1 text-[#1c1c1c] text-[15px] font-semibold">$998.00</p>
                                    <strike class="text-[#8b96a5] text-[13px]">$1128.00</strike>
                                </div>
                                <div class="flex items-center">
                                    <div><img src="images/rating/4star.png" alt="" class="h-[14px]"></div>
                                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">7.5</p>
                                </div>
                                <p class="text-[#1c1c1c] text-[13px] font-medium">Canon Camera EOS 2000, Black 10x zoom</p>
                            </div>
                            <div class="h-[36px] w-[36px] rounded-md flex items-center justify-center border grow-0 shrink-0">
                                <img src="images/favorite_border.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                </div> -->
                
                <!-- pagination -->
                <div class="w-full flex justify-end mt-4">
                    <div class="flex items-center mr-2 cursor-pointer">
                        <p class="text-[#1c1c1c] text-[14px] font-medium mr-1">Show</p>
                        <select name="" id="" class="outline-none h-[30px] w-[50px] border rounded-sm">
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="flex items-center cursor-pointer">
                        <div class="w-[30px] h-[30px] rounded-l-sm flex items-center justify-center border">
                            <img src="<?php echo get_template_directory_uri();?>/images/chevron-left.png" alt="">
                        </div>
                        <div class="w-[30px] h-[30px]  flex items-center justify-center hover:bg-[#eff2f4] border">1</div>
                        <div class="w-[30px] h-[30px]  flex items-center justify-center hover:bg-[#eff2f4] border">2</div>
                        <div class="w-[30px] h-[30px]  flex items-center justify-center hover:bg-[#eff2f4] border">3</div>
                        <div class="w-[30px] h-[30px]  flex items-center justify-center border rounded-r-sm">
                            <img src="<?php echo get_template_directory_uri();?>/images/chevron-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="text-[18px] h-[40px] leading-[40px] text-[#1c1c1c] font-semibold sm:hidden px-4">You may also like</p>

    <div class="rounded-md shadow-md max-w-[1200px] m-auto sm:flex items-stretch">
        <div class="grow shrink sm:hidden">
            <div class="overflow-x-scroll flex px-3">
                <div class="w-[130px] p-1 grow-0 shrink-0">
                    <div class="p-2 bg-white rounded-md shadow-md">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri();?>/images/recomm_items/07.png" alt="" class="h-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                    </div>
                </div>
                <div class="w-[130px] p-1 grow-0 shrink-0">
                    <div class="p-2 bg-white rounded-md shadow-md">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri();?>/images/tech/image 35.png" alt="" class="h-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                    </div>
                </div>
                <div class="w-[130px] p-1 grow-0 shrink-0">
                    <div class="p-2 bg-white rounded-md shadow-md">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri();?>/images/recomm_items/03.png" alt="" class="h-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                    </div>
                </div>
                <div class="w-[130px] p-1 grow-0 shrink-0">
                    <div class="p-2 bg-white rounded-md shadow-md">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri();?>/images/furniture/rasm.png" alt="" class="h-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                    </div>
                </div>
                <div class="w-[130px] p-1 grow-0 shrink-0">
                    <div class="p-2 bg-white rounded-md shadow-md">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri();?>/images/furniture/rasm.png" alt="" class="h-[100px] mx-auto">
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-[#1c1c1c] text-[13px] font-medium">Smart watches</p>
                        <p class="text-[#8b96a5] text-[11px]">From USD 19</p>
                    </div>
                    </div>
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
                