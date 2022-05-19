<?php
/*
Template Name: Savoir-Faire
*/

// Votre code ici


?>

<?php get_header(); ?>



<div class="sf-content"> 

<h1 class="savoirfaire-h1"> 
<?php the_title() ?>
</h1>


<?php the_field('savoir-faire'); ?>

</div>

<?php get_footer(); ?>