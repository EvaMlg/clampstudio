<?php
/*
Template Name: Checkout
*/

// Votre code ici

?>

<?php while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; ?>

<?php get_header(); ?>

<?php get_footer(); ?>