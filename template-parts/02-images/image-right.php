<section class="image image-right">

    <div class="image-container">


        <?php if (have_rows('image_right')) : ?>

            <?php while (have_rows('image_right')) : the_row(); ?>
                <?php $image = get_sub_field('image_right_image'); ?>



                <div class="image-text-wrapper m-grid">
                    <h2 class="h2-pri"> <?php the_sub_field('image_right_title'); ?> </h2>
                    <p class="p-pri"><?php the_sub_field('image_right_content'); ?> </p>
                    <span class="primary-cta"><?php the_sub_field('image_right_cta'); ?> </span>

                </div>

                <div class="image-wrapper">

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>


            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>