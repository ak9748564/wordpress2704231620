<?php
//Template Name: Product Detail
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&family=Merriweather:wght@300;400;700;900&family=Nunito+Sans:wght@200;300;400;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title>Ecommerce Interface</title>
</head>
<body style="font-family: 'Inter', sans-serif;" class="bg-[#F7FAFC]">

    <?php get_header();?>

    <!-- breadcrumbs -->
    <div class="px-4">
        <div class="max-w-[1200px] m-auto sm:flex items-center text-[#8b96a5] text-[13px] font-medium hidden">
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

    <div class="">
        <div class="max-w-[1200px] m-auto lg:flex  items-start sm:mt-4 shadow-md rounded-md bg-white sm:p-4">
            <div class="sm:hidden w-full bg-[#F0F0F0]">
                <div id="carouselExample" class="carousel slide relative">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo get_template_directory_uri();?>/images/clothes/blank-1886001__340.png" class="d-block w-100 h-[100vw]" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/clothes/blank-1886008__340.png" class="d-block w-100 h-[100vw]" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/clothes/images.png" class="d-block w-100 h-[100vw]" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/clothes/oversize-tshirt-back_2.png" class="d-block w-100 h-[100vw]" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/clothes/tate-logo-black--tshirt-back-g1086.png" class="d-block w-100 h-[100vw]" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/clothes/slide_20.png" class="d-block w-100 h-[100vw]" alt="...">
                      </div>
                    </div>
                    <div class="inline-flex p-2 bg-[#ADADAD] rounded-full items-center absolute right-[10px] bottom-[10px]">
                        <button class="mr-2" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <img src="<?php echo get_template_directory_uri();?>/images/arrow_back.png" alt="">
                        </button>
                        <button class="" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <img src="<?php echo get_template_directory_uri();?>/images/arrow_forward.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white p-2 sm:hidden shadow-md">
                <div class="flex flex-wrap items-center">
                    <div><img src="images/rating/4star.png" alt="" class="h-[11px] sm:h-[14px]"></div>
                    <p class="text-[#FF9017] text-[11px] sm:text-[14px] font-medium ml-[5px]">9.3</p>
                    <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-[6px]"></div>
                    <div class="flex items-center text-[#8b96a5] text-[11px] sm:text-[13px]">
                        <img src="<?php echo get_template_directory_uri();?>/images/message.png" alt="" class="mr-1 w-[12px] sm:w-[15px]" >
                        <p>32</p>
                        <p>&nbsp;reviews</p>
                    </div>
                    <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-[6px]"></div>
                    <div class="flex items-center text-[#8b96a5] text-[13px]">
                        <img src="<?php echo get_template_directory_uri();?>/images/basket.png" alt="" class="mr-1 w-[12px] sm:w-[15px]">
                        <p>154</p>
                        <p>&nbsp;sold</p>
                    </div>
                </div>
                <p class="text-[18px] font-semibold text-[#1c1c1c] my-2">Mens Long Sleeve T-shirt Cotton Base Layer Slim Muscle</p>
                <div class="flex items-center">
                    <p class="text-[#fa3434] text-[17px] font-semibold">$98.00</p>
                    <p class="text-[#606060] text-[14px] font-medium ml-2">(50-100 pcs)</p>
                </div>
                <div class="flex items-center my-2">
                    <button class="w-full h-[32px] max-w-[300px] bg-gradient-to-b from-[#417EFF] to-[#0168FF] text-[#fff] rounded-md text-[12px]">Send Enquiry</button>
                    <div class="ml-1 h-[32px] w-[32px] border flex items-center justify-center rounded-md grow-0 shrink-0">
                        <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="" class="w-[20px]">
                    </div>
                </div>
                <div>
                    <div class="flex pt-2">
                        <div class="w-[180px] text-[#8b96a5] text-[16px]">Condition:</div>
                        <div class="w-full text-[14px] font-medium text-[#505050]">Brand new</div>
                    </div>
                    <div class="flex py-1">
                        <div class="w-[180px] text-[#8b96a5] text-[16px]">Material:</div>
                        <div class="w-full text-[14px] font-medium text-[#505050]">Plastic</div>
                    </div>
                    <div class="flex pb-2">
                        <div class="w-[180px] text-[#8b96a5] text-[16px]">Category:</div>
                        <div class="w-full text-[14px] font-medium text-[#505050]">Electronics, gadgets</div>
                    </div>
                    <div class="flex pb-2">
                        <div class="w-[180px] text-[#8b96a5] text-[16px]">Item num:</div>
                        <div class="w-full text-[14px] font-medium text-[#505050]">23421</div>
                    </div>
                </div>
                <p class="text-[#505050] text-[15px] mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus voluptates laborum at hic animi excepturi esse temporibus reiciendis quod, veritatis deserunt eveniet qui maiores perspiciatis suscipit quaerat ipsa sequi exercitationem voluptatibus necessitatibus porro, est iusto? Assumenda porro sapiente architecto atque, nobis autem quasi nulla velit maiores commodi amet in totam? Possimus totam iure maiores expedita temporibus labore </p>
            </div>
            <div class="bg-[#F7FAFC] p-2 sm:hidden">
                <div class="bg-white rounded-md shadow-md p-2 border">
                    <div class="border-b flex pb-2">
                        <div class="h-[36px] w-[36px] text-center leading-[36px] bg-[#C6F3F1] text-[20px] font-semibold text-[#4ca7a7] rounded-sm mr-2">R</div>
                        <div class="text-[#1c1c1c] text-[14px] font-medium leading-[14px] flex flex-col justify-evenly grow shrink">
                            <p>Supplier</p>
                            <p>Guanjoi Trading LLC</p>
                        </div>
                        <div class="h-[36px]  flex items-center justify-center grow-0 shrink-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/right_chevron.png" alt="">
                        </div>
                    </div>
                    <div class="flex items-center mt-2 justify-between">
                        <div class="flex items-center mx-1">
                            <div class="mr-1 grow-0 shrink-0">
                                <img src="<?php echo get_template_directory_uri();?>/images/flags/germany.png" alt="" class="w-[16px]">
                            </div>
                            <div class="text-[#8b96a5] text-[12px]">Germany</div>
                        </div>
                        <div class="flex items-center mx-1">
                            <div class="mr-1"><img src="<?php echo get_template_directory_uri();?>/images/verified_user.png" alt="" class="w-[14px]"></div>
                            <div class="text-[#8b96a5] text-[12px]">Verified</div>
                        </div>
                        <div class="flex items-center mx-1">
                            <div class="mr-1"><img src="<?php echo get_template_directory_uri();?>/images/language.png" alt="" class="w-[14px]"></div>
                            <div class="text-[#8b96a5] text-[12px]">Shipping</div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-[18px] text-[#1c1c1c] font-semibold max-w-[1200px] m-auto sm:hidden px-2 py-3 bg-[#f7fafc]">Similar products</h1>
            <div class="flex overflow-x-scroll w-full bg-[#f7fafc] px-1 sm:hidden product_detail_similar_products_scroll">
                <div class="my-2 mx-1 bg-white w-[150px] grow-0 shrink-0 shadow-md rounded-md">
                    <div class="w-[150px] h-[150px] grow-0 shrink-0 flex items-center justify-center rounded-md">
                        <img src="<?php echo get_template_directory_uri();?>/images/recomm_items/05.png" alt="" class="max-h-full rounded-md">
                    </div>
                    <div class="p-2 flex flex-col justify-evenly">
                        <p class="text-[#1c1c1c] text-[16px] leading-[17px] font-medium">$10.30</p>
                        <p class="text-[#8b96a5] text-[13px] font-medium leading-[17px] mt-2">T-shirts with multiple colors, for men</p>
                    </div>
                </div>
                <div class="my-2 mx-1 bg-white w-[150px] grow-0 shrink-0 shadow-md rounded-md">
                    <div class="w-[150px] h-[150px] grow-0 shrink-0 flex items-center justify-center rounded-md">
                        <img src="<?php echo get_template_directory_uri();?>/images/recomm_items/03.png" alt="" class="max-h-full rounded-md">
                    </div>
                    <div class="p-2 flex flex-col justify-evenly">
                        <p class="text-[#1c1c1c] text-[16px] leading-[17px] font-medium">$10.30</p>
                        <p class="text-[#8b96a5] text-[13px] font-medium leading-[17px] mt-2">T-shirts with multiple colors, for men</p>
                    </div>
                </div>
                <div class="my-2 mx-1 bg-white w-[150px] grow-0 shrink-0 shadow-md rounded-md">
                    <div class="w-[150px] h-[150px] grow-0 shrink-0 flex items-center justify-center rounded-md">
                        <img src="<?php echo get_template_directory_uri();?>/images/recomm_items/03.png" alt="" class="max-h-full rounded-md">
                    </div>
                    <div class="p-2 flex flex-col justify-evenly">
                        <p class="text-[#1c1c1c] text-[16px] leading-[17px] font-medium">$10.30</p>
                        <p class="text-[#8b96a5] text-[13px] font-medium leading-[17px] mt-2">T-shirts with multiple colors, for men</p>
                    </div>
                </div>
            </div>

            <div class="grow-0 shrink-0 w-[420px] h-[420px] hidden sm:block mx-auto">
                <div class="w-full border cursor-pointer">
                    <img src="<?php echo get_template_directory_uri();?>/images/clothes/image 34.png" alt="" class="m-auto">
                </div>
                <div class="flex min-w-full">
                    <div class="w-[70px] h-[70px] shrink-0 flex items-center justify-center">
                        <div class="h-[60px] w-[60px] cursor-pointer">
                            <img src="<?php echo get_template_directory_uri();?>/images/clothes/image.png" alt="" class="h-full">
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] shrink-0 flex items-center justify-center">
                        <div class="w-[60px] h-[60px] border cursor-pointer">
                            <img src="<?php echo get_template_directory_uri();?>/images/clothes/image 36.png" alt="" class="h-full  m-auto">
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] shrink-0 flex items-center justify-center">
                        <div class="w-[60px] h-[60px] border cursor-pointer">
                            <img src="<?php echo get_template_directory_uri();?>/images/clothes/image 37.png" alt="" class="h-full m-auto">
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] shrink-0 flex items-center justify-center">
                        <div class="h-[60px] w-[60px] border cursor-pointer">
                            <img src="<?php echo get_template_directory_uri();?>/images/clothes/image 39.png" alt="" class="h-full">
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] shrink-0 flex items-center justify-center">
                        <div class="w-[60px] h-[60px] border cursor-pointer">
                            <img src="<?php echo get_template_directory_uri();?>/images/clothes/image 40.png" alt="" class="h-full">
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] shrink-0 flex items-center justify-center">
                        <div class="w-[60px] h-[60px] cursor-pointer">
                            <img src="<?php echo get_template_directory_uri();?>/images/clothes/Image.png" alt="" class="h-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grow px-4 hidden sm:block sm:mt-5 md:mt-5 lg:mt-0 mx-auto">
                <div class="text-[#00b517] text-[13px] font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2 fill-[#00b517] mr-1" viewBox="0 0 16 16">
                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    <p>In stock</p>
                </div>
                <p class="text-[18px] font-semibold text-[#1c1c1c]">Mens Long Sleeve T-shirt Cotton Base Layer Slim Muscle</p>
                <div class="flex items-center">
                    <div><img src="<?php echo get_template_directory_uri();?>/images/rating/4star.png" alt="" class="h-[14px]"></div>
                    <p class="text-[#FF9017] text-[14px] font-medium ml-2">9.3</p>
                    <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                    <div class="flex items-center text-[#8b96a5] text-[13px]">
                        <img src="<?php echo get_template_directory_uri();?>/images/message.png" alt="" class="mr-1 w-[15px]" >
                        <p>32</p>
                        <p>&nbsp;reviews</p>
                    </div>
                    <div class="w-[5px] h-[5px] rounded-full bg-[#dee2e7] mx-2"></div>
                    <div class="flex items-center text-[#8b96a5] text-[13px]">
                        <img src="<?php echo get_template_directory_uri();?>/images/basket.png" alt="" class="mr-1">
                        <p>154</p>
                        <p>&nbsp;sold</p>
                    </div>
                </div>
                <div class="p-4 rounded-sm bg-[#FFF0DF] flex w-full mt-2">
                    <div class="w-1/3">
                        <p class="text-[#fa3434] text-[17px] font-semibold">$98.00</p>
                        <p class="text-[#606060] text-[14px] font-medium">50-100 pcs</p>
                    </div>
                    <div class="w-1/3 border-l border-r border-black px-3">
                        <p class="text-[#1c1c1c] text-[17px] font-semibold">$90.00</p>
                        <p class="text-[#606060] text-[14px] font-medium">100-700 pcs</p>
                    </div>
                    <div class="w-1/3 pl-3">
                        <p class="text-[#1c1c1c] text-[17px] font-semibold">$78.00</p>
                        <p class="text-[#606060] text-[14px] font-medium">700+ pcs</p>
                    </div>
                </div>
                <div class="flex py-2">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Price:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">Negotiable</div>
                </div>
                <hr>
                <div class="flex pt-2">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Type:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">Classic shoes</div>
                </div>
                <div class="flex py-1">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Material:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">Plastic Material</div>
                </div>
                <div class="flex pb-2">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Design:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">Modern nice</div>
                </div>
                <hr>
                <div class="flex pt-2">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Customization:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">Customized logo and design custom logo packages</div>
                </div>
                <div class="flex py-1">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Protection:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">Refund policy</div>
                </div>
                <div class="flex pb-2">
                    <div class="w-[180px] text-[#8b96a5] text-[16px]">Warranty:</div>
                    <div class="w-full text-[14px] font-medium text-[#505050]">2 years full warranty</div>
                </div>
                <hr>
            </div>
            <div class="grow-0 shrink-0 w-[250px] sm:w-[420px] lg:w-[250px] hidden sm:block mx-auto sm:mt-5 md:mt-5 lg:mt-0">
                <div class="border rounded-md p-3">
                <div class="flex">
                    <div class="h-[36px] w-[36px] text-center leading-[36px] bg-[#C6F3F1] text-[20px] font-semibold text-[#4ca7a7] rounded-sm mr-2">R</div>
                    <div class="text-[#1c1c1c] text-[14px] font-medium leading-[14px] flex flex-col justify-evenly">
                        <p>Supplier</p>
                        <p>Guanjoi Trading LLC</p>
                    </div>
                </div>
                <hr class="my-3">
                <div class="flex items-center mt-2">
                    <div class="mr-2"><img src="<?php echo get_template_directory_uri();?>/images/flags/germany.png" alt=""></div>
                    <div class="text-[#8b96a5] text-[12px]">Germany, Berlin</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="mr-2"><img src="<?php echo get_template_directory_uri();?>/images/verified_user.png" alt=""></div>
                    <div class="text-[#8b96a5] text-[12px]">Verified Seller</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="mr-2"><img src="<?php echo get_template_directory_uri();?>/images/language.png" alt=""></div>
                    <div class="text-[#8b96a5] text-[12px]">Worldwide shipping</div>
                </div>
                <button class="w-full h-[32px] bg-gradient-to-b from-[#417EFF] to-[#0168FF] text-[#fff] rounded-md mt-4 text-[12px]">Send Enquiry</button>
                <button class="w-full h-[32px] bg-[#fff] text-[#417EFF] rounded-md mt-2 text-[12px] border">Seller's profile</button>
                </div>
                <button class="w-full h-[32px] bg-[#fff] text-[#417EFF] rounded-md mt-2 text-[12px] flex items-center justify-center">
                    <div class="mr-1">
                        <img src="<?php echo get_template_directory_uri();?>/images/favorite_border.png" alt="">
                    </div>
                    <p>Save for later</p>
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto hidden sm:block  md:flex mt-4">
        <div class="bg-white grow shrink rounded-md shadow-md">
            <div>
                <ul class="flex items-center px-1 border-b border-[#8b96a5]">
                    <li class="py-3 px-3 text-[#8b96a5] active:text-[#0d6efd] hover:text-[#0d6efd] active:border-b  active:border-[#0d6efd] hover:border-b hover:border-[#0d6efd] font-medium cursor-pointer">Description</li>
                    <li class="py-3 px-3 text-[#8b96a5] active:text-[#0d6efd] hover:text-[#0d6efd] active:border-b  active:border-[#0d6efd] hover:border-b hover:border-[#0d6efd] font-medium cursor-pointer">Reviews</li>
                    <li class="py-3 px-3 text-[#8b96a5] active:text-[#0d6efd] hover:text-[#0d6efd] active:border-b  active:border-[#0d6efd] hover:border-b hover:border-[#0d6efd] font-medium cursor-pointer">Shipping</li>
                    <li class="py-3 px-3 text-[#8b96a5] active:text-[#0d6efd] hover:text-[#0d6efd] active:border-b  focus:border-[#0d6efd] hover:border-b hover:border-[#0d6efd] font-medium cursor-pointer">About Company</li>
                </ul>
            </div>
            <div class="p-4 description">
                <p class="text-[#505050] text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus voluptates laborum at hic animi excepturi esse temporibus reiciendis quod, veritatis deserunt eveniet qui maiores perspiciatis suscipit quaerat ipsa sequi exercitationem voluptatibus necessitatibus porro, est iusto? Assumenda porro sapiente architecto atque, nobis autem quasi nulla velit maiores commodi amet in totam? Possimus totam iure maiores expedita temporibus labore voluptas. Excepturi aperiam nulla quos dignissimos voluptate earum, qui debitis sed dicta doloremque ut, voluptatem nostrum quod rem cupiditate autem minima nesciunt asperiores obcaecati pariatur! Sequi est sed quo cumque provident laborum illo dolores officia, praesentium, deleniti facere aperiam delectus, quos voluptas facilis ad rerum atque cum eveniet quod repellat minima id similique! Reprehenderit minima porro omnis! Labore enim accusamus quae tenetur. Ab placeat impedit doloribus beatae iusto </p>
                <div class="mt-6 max-w-[500px]">
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Model</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">#8786867</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Style</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">Classic style</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Certificate</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">ISO-898921212</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Size</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">34mm x 450mm x 19mm</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Memory</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">36GB RAM</div>
                    </div>
                </div>
                <div class="mt-6">
                    <ul>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Duis aute irure dolor in reprehenderit</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 reviews hidden">
                <p class="text-[#505050] text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus voluptates laborum at hic animi excepturi esse temporibus reiciendis quod, veritatis deserunt eveniet qui maiores perspiciatis suscipit quaerat ipsa sequi exercitationem voluptatibus necessitatibus porro, est iusto? Assumenda porro sapiente architecto atque, nobis autem quasi nulla velit maiores commodi amet in totam? Possimus totam iure maiores expedita temporibus labore voluptas. Excepturi aperiam nulla quos dignissimos voluptate earum, qui debitis sed dicta doloremque ut, voluptatem nostrum quod rem cupiditate autem minima nesciunt asperiores obcaecati pariatur! Sequi est sed quo cumque provident laborum illo dolores officia, praesentium, deleniti facere aperiam delectus, quos voluptas facilis ad rerum atque cum eveniet quod repellat minima id similique! Reprehenderit minima porro omnis! Labore enim accusamus quae tenetur. Ab placeat impedit doloribus beatae iusto </p>
                <div class="mt-6 max-w-[500px]">
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Model</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">#8786867</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Style</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">Classic style</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Certificate</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">ISO-898921212</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Size</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">34mm x 450mm x 19mm</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Memory</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">36GB RAM</div>
                    </div>
                </div>
                <div class="mt-6">
                    <ul>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Duis aute irure dolor in reprehenderit</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 shipping hidden">
                <p class="text-[#505050] text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus voluptates laborum at hic animi excepturi esse temporibus reiciendis quod, veritatis deserunt eveniet qui maiores perspiciatis suscipit quaerat ipsa sequi exercitationem voluptatibus necessitatibus porro, est iusto? Assumenda porro sapiente architecto atque, nobis autem quasi nulla velit maiores commodi amet in totam? Possimus totam iure maiores expedita temporibus labore voluptas. Excepturi aperiam nulla quos dignissimos voluptate earum, qui debitis sed dicta doloremque ut, voluptatem nostrum quod rem cupiditate autem minima nesciunt asperiores obcaecati pariatur! Sequi est sed quo cumque provident laborum illo dolores officia, praesentium, deleniti facere aperiam delectus, quos voluptas facilis ad rerum atque cum eveniet quod repellat minima id similique! Reprehenderit minima porro omnis! Labore enim accusamus quae tenetur. Ab placeat impedit doloribus beatae iusto </p>
                <div class="mt-6 max-w-[500px]">
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Model</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">#8786867</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Style</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">Classic style</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Certificate</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">ISO-898921212</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Size</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">34mm x 450mm x 19mm</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Memory</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">36GB RAM</div>
                    </div>
                </div>
                <div class="mt-6">
                    <ul>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Duis aute irure dolor in reprehenderit</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 about hidden">
                <p class="text-[#505050] text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus voluptates laborum at hic animi excepturi esse temporibus reiciendis quod, veritatis deserunt eveniet qui maiores perspiciatis suscipit quaerat ipsa sequi exercitationem voluptatibus necessitatibus porro, est iusto? Assumenda porro sapiente architecto atque, nobis autem quasi nulla velit maiores commodi amet in totam? Possimus totam iure maiores expedita temporibus labore voluptas. Excepturi aperiam nulla quos dignissimos voluptate earum, qui debitis sed dicta doloremque ut, voluptatem nostrum quod rem cupiditate autem minima nesciunt asperiores obcaecati pariatur! Sequi est sed quo cumque provident laborum illo dolores officia, praesentium, deleniti facere aperiam delectus, quos voluptas facilis ad rerum atque cum eveniet quod repellat minima id similique! Reprehenderit minima porro omnis! Labore enim accusamus quae tenetur. Ab placeat impedit doloribus beatae iusto </p>
                <div class="mt-6 max-w-[500px]">
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Model</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">#8786867</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Style</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">Classic style</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Certificate</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">ISO-898921212</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Size</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">34mm x 450mm x 19mm</div>
                    </div>
                    <div class="flex border">
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3 bg-[#eff2f4] w-[200px]">Memory</div>
                        <div class="text-[#505050] h-[28px] text-[15px] leading-[28px] px-3">36GB RAM</div>
                    </div>
                </div>
                <div class="mt-6">
                    <ul>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Duis aute irure dolor in reprehenderit</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center h-[32px]">
                                <img src="<?php echo get_template_directory_uri();?>/images/check.png" alt="">
                                <p class="text-[#505050] text-[15px] ml-2">Some great feature name here</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-white md:w-[250px] md:ml-4 sm:mt-4 p-3 rounded-md shadow-md grow-0 shrink-0">
            <h1 class="text-[14px] text-[#1c1c1c] font-semibold max-w-[1200px] m-auto">You may like</h1>
            <div class="flex my-2">
                <div class="w-[60px] h-[60px] grow-0 shrink-0 flex items-center justify-center border rounded-md"><img src="<?php echo get_template_directory_uri();?>/images/recomm_items/01.png" alt="" class="max-h-[50px] max-w-[50px]"></div>
                <div class="pl-2 flex flex-col justify-evenly">
                    <p class="text-[#1c1c1c] text-[14px] font-medium leading-[17px]">Apple Watch Series Space Gray</p>
                    <p class="text-[#8b96a5] text-[13px] leading-[15px]">$7.00 - $99.50</p>
                </div>
            </div>
            <div class="flex my-2">
                <div class="w-[60px] h-[60px] grow-0 shrink-0 flex items-center justify-center border rounded-md"><img src="<?php echo get_template_directory_uri();?>/images/recomm_items/05.png" alt="" class="max-h-[50px] max-w-[50px]"></div>
                <div class="pl-2 flex flex-col justify-evenly">
                    <p class="text-[#1c1c1c] text-[14px] font-medium leading-[17px]">Apple Watch Series Space Gray</p>
                    <p class="text-[#8b96a5] text-[13px] leading-[15px]">$7.00 - $99.50</p>
                </div>
            </div>
            <div class="flex my-2">
                <div class="w-[60px] h-[60px] grow-0 shrink-0 flex items-center justify-center border rounded-md"><img src="<?php echo get_template_directory_uri();?>/images/recomm_items/03.png" alt="" class="max-h-[50px] max-w-[50px]"></div>
                <div class="pl-2 flex flex-col justify-evenly">
                    <p class="text-[#1c1c1c] text-[14px] font-medium leading-[17px]">Apple Watch Series Space Gray</p>
                    <p class="text-[#8b96a5] text-[13px] leading-[15px]">$7.00 - $99.50</p>
                </div>
            </div>
            <div class="flex my-2">
                <div class="w-[60px] h-[60px] grow-0 shrink-0 flex items-center justify-center border rounded-md"><img src="<?php echo get_template_directory_uri();?>/images/clothes/02.png" alt="" class="max-h-[50px] max-w-[50px]"></div>
                <div class="pl-2 flex flex-col justify-evenly">
                    <p class="text-[#1c1c1c] text-[14px] font-medium leading-[17px]">Apple Watch Series Space Gray</p>
                    <p class="text-[#8b96a5] text-[13px] leading-[15px]">$7.00 - $99.50</p>
                </div>
            </div>
            <div class="flex my-2">
                <div class="w-[60px] h-[60px] grow-0 shrink-0 flex items-center justify-center border rounded-md"><img src="<?php echo get_template_directory_uri();?>/images/recomm_items/05.png" alt="" class="max-h-[50px] max-w-[50px]"></div>
                <div class="pl-2 flex flex-col justify-evenly">
                    <p class="text-[#1c1c1c] text-[14px] font-medium leading-[17px]">Apple Watch Series Space Gray</p>
                    <p class="text-[#8b96a5] text-[13px] leading-[15px]">$7.00 - $99.50</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] m-auto p-3 bg-white rounded-md shadow-md mt-4 hidden sm:block">
        <h1 class="mb-3 text-[18px] text-[#1c1c1c] font-semibold max-w-[1200px] m-auto">Related products</h1>
        <div class="flex w-full items-stretch overflow-x-scroll">
            <div class="min-w-[180px] p-2">
                <div>
                <div class="py-3 bg-[#EEEEEE] rounded-md">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 32.png" alt="" class="h-[150px] m-auto">
                </div>
                <div class="p-3">
                    <p class="text-[#505050] text-[17px] font-medium">Xiaomi Redmi 8 Original</p>
                    <p class="text-[#8b96a5] text-[16px]">$32.00 - $40.00</p>
                </div>
                </div>
            </div>
            <div class="min-w-[180px] p-2">
                <div>
                <div class="py-3 bg-[#EEEEEE] rounded-md">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 35.png" alt="" class="h-[150px] m-auto">
                </div>
                <div class="p-3">
                    <p class="text-[#505050] text-[17px] font-medium">Xiaomi Redmi 8 Original</p>
                    <p class="text-[#8b96a5] text-[16px]">$32.00 - $40.00</p>
                </div>
                </div>
            </div>
            <div class="min-w-[180px] p-2">
                <div>
                <div class="py-3 bg-[#EEEEEE] rounded-md">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/06.png" alt="" class="h-[150px] m-auto">
                </div>
                <div class="p-3">
                    <p class="text-[#505050] text-[17px] font-medium">Xiaomi Redmi 8 Original</p>
                    <p class="text-[#8b96a5] text-[16px]">$32.00 - $40.00</p>
                </div>
                </div>
            </div>
            <div class="min-w-[180px] p-2">
                <div class="flex flex-col h-full">
                <div class="py-3 bg-[#EEEEEE] rounded-md h-full flex items-center justify-center">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 34.png" alt="" class="h-[120px]">
                </div>
                <div class="p-3 grow-0">
                    <p class="text-[#505050] text-[17px] font-medium">Xiaomi Redmi 8 Original</p>
                    <p class="text-[#8b96a5] text-[16px]">$32.00 - $40.00</p>
                </div>
                </div>
            </div>
            <div class="min-w-[180px] p-2">
                <div>
                <div class="py-3 bg-[#EEEEEE] rounded-md">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 85.png" alt="" class="h-[150px] m-auto">
                </div>
                <div class="p-3">
                    <p class="text-[#505050] text-[17px] font-medium">Xiaomi Redmi 8 Original</p>
                    <p class="text-[#8b96a5] text-[16px]">$32.00 - $40.00</p>
                </div>
                </div>
            </div>
            <div class="min-w-[180px] p-2">
                <div>
                <div class="py-3 bg-[#EEEEEE] rounded-md">
                    <img src="<?php echo get_template_directory_uri();?>/images/tech/image 22.png" alt="" class="h-[150px] m-auto">
                </div>
                <div class="p-3">
                    <p class="text-[#505050] text-[17px] font-medium">Xiaomi Redmi 8 Original</p>
                    <p class="text-[#8b96a5] text-[16px]">$32.00 - $40.00</p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] m-auto h-[100px] rounded-md shadow-md mt-4 mb-12 bg-cover bg-center p-4 hidden  sm:flex items-center justify-between text-white" style="background-image:url('images/Rectangle\ 176.png')">
        <div>
            <p class="text-[20px] font-medium">Super discount on more than 100 USD</p>
            <p class="text-[13px] text-white/70">Have you ever finally just write dummy info</p>
        </div>
        <button class="bg-[#FF9017] text-white px-3 h-[32px] rounded-md text-[13px] ">Shop now</button>
    </div>

    <!-- footer  -->
    <div class="bg-white mt-4 px-4">
        <div class="max-w-[1200px] m-auto py-10 lg:flex ">
            <div class="lg:w-[220px] grow-0 shrink-0 lg:mr-12 flex justify-center">
                <div class="w-[220px]">
                <div class="flex items-center">
                    <div class="w-[40px] h-[40px] mr-2">
                        <img src="<?php echo get_template_directory_uri();?>/images/logo-symbol.png" alt="" class="w-full">
                    </div>
                    <p class="text-[20px] font-semibold text-[#8CB7F5]">Brand</p>
                </div>
                <p class="text-[#505050] text-[12px] mt-3">Best information about the company gles here but now lorem ipsum is</p>
                <div class="flex items-center mt-5">
                    <div class="h-[36px] w-[36px] flex rounded-full items-center justify-center bg-[#bdc4cd] mx-1 hover:bg-[#8CB7F5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook fill-white" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                    </div>
                    <div class="h-[36px] w-[36px] flex rounded-full items-center justify-center bg-[#bdc4cd] mx-1 hover:bg-[#8CB7F5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter fill-white" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </div>
                    <div class="h-[36px] w-[36px] flex rounded-full items-center justify-center bg-[#bdc4cd] mx-1 hover:bg-[#8CB7F5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin fill-white" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg>
                    </div>
                    <div class="h-[36px] w-[36px] flex rounded-full items-center justify-center bg-[#bdc4cd] mx-1 hover:bg-[#8CB7F5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram fill-white" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                    </div>
                    <div class="h-[36px] w-[36px] flex rounded-full items-center justify-center bg-[#bdc4cd] mx-1 hover:bg-[#8CB7F5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube fill-white" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                          </svg>
                    </div>
                </div>
                </div>
            </div>
            <div class="grow shrink  md:flex mt-10 lg:mt-0">
                <div class="sm:flex grow shrink">
                    <div class="flex sm:w-1/2 justify-evenly sm:justify-around">
                        <div class="basis-0">
                            <p class="text-[#1c1c1c] font-medium text-[15px] mb-2">About</p>
                            <p class="text-[14px] text-[#8b96a5]">About Us</p>
                            <p class="text-[14px] text-[#8b96a5]">Find Store</p>
                            <p class="text-[14px] text-[#8b96a5]">Categories</p>
                            <p class="text-[14px] text-[#8b96a5]">Blogs</p>
                        </div>
                        <div class="basis-0">
                            <p class="text-[#1c1c1c] font-medium text-[15px] mb-2">Partnership</p>
                            <p class="text-[14px] text-[#8b96a5]">About Us</p>
                            <p class="text-[14px] text-[#8b96a5]">Find Store</p>
                            <p class="text-[14px] text-[#8b96a5]">Categories</p>
                            <p class="text-[14px] text-[#8b96a5]">Blogs</p>
                        </div>
                    </div>
                    <div class="flex sm:w-1/2 mt-10 sm:mt-0 justify-evenly sm:justify-around">
                        <div class="basis-0">
                            <p class="text-[#1c1c1c] font-medium text-[15px] mb-2">Information</p>
                            <p class="text-[14px] text-[#8b96a5]">Help Center</p>
                            <p class="text-[14px] text-[#8b96a5]">Money Refund</p>
                            <p class="text-[14px] text-[#8b96a5]">Shipping</p>
                            <p class="text-[14px] text-[#8b96a5]">Contact us</p>
                        </div>
                        <div class="basis-0 min-w-[85px]">
                            <p class="text-[#1c1c1c] font-medium text-[15px] mb-2">For users</p>
                            <p class="text-[14px] text-[#8b96a5]">Login</p>
                            <p class="text-[14px] text-[#8b96a5]">Register</p>
                            <p class="text-[14px] text-[#8b96a5]">Settings</p>
                            <p class="text-[14px] text-[#8b96a5]">My orders</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-[250px] mt-10 md:mt-0 flex justify-center">
                    <div class="w-[120px]">
                    <p class="text-[#1c1c1c] font-medium text-[15px] mb-2">Get app</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/market-button.png" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/images/play_store.png" alt="" class="mt-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#EFF2F4] px-4">
        <div class="max-w-[1200px] m-auto flex items-center justify-between h-[60px]">
            <p class="text-[#606060] text-[13px] font-medium">&#169; copyright 2023</p>
            <div class="flex items-center">
                <div class="w-[20px] mr-1">
                    <img src="<?php echo get_template_directory_uri();?>/images/flags/f3.png" alt="">
                </div>
                <div>
                    <select name="" id="" class="bg-[#eff2f4] text-[13px] text-[#606060] font-medium">
                        <option value="English">English</option>
                    </select>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="filter.js"></script>
</body>
</html>