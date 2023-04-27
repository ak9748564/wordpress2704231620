<?php
get_header();
the_post();
?>
<img src="<?php bloginfo();?>" alt="">
<?php the_title();?>
<?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');?>
<img src="<?php echo $imagepath[0];?>" alt="">
<div><?php echo get_the_date();?></div>
<div><?php the_author();?></div>
<div><?php the_content();?></div>
<div><?php comment_form();?></div>