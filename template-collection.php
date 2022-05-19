<?php
/*
Template Name: Collection
*/

// Votre code ici

?>

<?php get_header(); ?>

<div class="left-slit">

<?php if( get_field('collection_image_1') ): ?>
    <img src="<?php the_field('collection_image_1'); ?>" />
<?php endif; ?>

<?php if( get_field('collection_image_2') ): ?>
    <img src="<?php the_field('collection_image_2'); ?>" />
<?php endif; ?>

<?php if( get_field('collection_image_3') ): ?>
    <img src="<?php the_field('collection_image_3'); ?>" />
<?php endif; ?>

<?php if( get_field('collection_image_4') ): ?>
    <img src="<?php the_field('collection_image_4'); ?>" />
<?php endif; ?>


<?php if( get_field('collection_image_5') ): ?>
    <img src="<?php the_field('collection_image_5'); ?>" />
<?php endif; ?>

<?php if( get_field('collection_image_6') ): ?>
    <img src="<?php the_field('collection_image_6'); ?>" />
<?php endif; ?>

<div class="credits">

<?php the_field('collection_image_credits'); ?>

</div>

</div>

<?php get_footer(); ?>