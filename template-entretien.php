<?php
/*
Template Name: Entretien
*/

// Votre code ici

?>

<?php get_header(); ?>

<div class="entretien-content"> 

<h1 class="entretien-h1"> 
<?php the_title() ?>
</h1>


<?php the_field('entretien'); ?>

</div>

<?php get_footer(); ?>