<section class="image image-left">

    <div class=" l-grid image-container">


        <div class="image-wrapper">
            <?php if (have_rows('image_left')) : ?>
                <?php while (have_rows('image_left')) : the_row(); ?>
                    <?php $image = get_sub_field('image_left_image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>

        <div class="image-text-wrapper m-grid">
            <h2 class="h2-pri"> <?php the_sub_field('image_left_title'); ?> </h2>
            <p class="p-pri"><?php the_sub_field('image_left_content'); ?> </p>
            <span class="primary-cta"><?php the_sub_field('image_left_cta'); ?> </span>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
    </div>

</section>  