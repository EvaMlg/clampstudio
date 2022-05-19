<?php
/**
 * Template Name: Front page
 * 
 * 
 */
 get_header();
 ?> 

<div>



<?php if(have_posts()) : while(have_posts(  )) : the_post(  );?>

<?php the_content();?>

<?php endwhile ; else : endif;?>


<div class="front-page-image left-side">
<?php if( get_field('front_page_image') ): ?>
    <img src="<?php the_field('front_page_image'); ?>" />
<?php endif; ?>
</div>

<div class ="logodiv">
</div>


<?php get_footer(); ?>
