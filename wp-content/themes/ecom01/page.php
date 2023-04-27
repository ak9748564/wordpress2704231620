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

    <?php get_header();the_post(); ?>
    <?php the_title(); ?>
    <?php the_post_thumbnail(array(900,300));?>
    <?php the_content(); ?>
    <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); print_r($imagepath); ?>
    <img src="<?php echo $imagepath[0];?>" alt="">
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
                