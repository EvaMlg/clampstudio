<?php
/*
Template Name: About
*/

// Votre code ici

?>

<?php get_header(); ?>

<div class="about-content"> 

<h1> 
<?php the_title() ?>
</h1>


<?php the_field('about'); ?>

</div>

<?php get_footer(); ?>