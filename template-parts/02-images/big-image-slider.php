<section class="big-image-slider">

    <div class="grid">

            <?php if (have_rows('big_image_slider')) : ?>
                <?php while (have_rows('big_image_slider')) : the_row(); ?>

                    <h2 class="h2-pri"> <?php the_sub_field('big_image_slider_title'); ?> </h2>

                        <?php if (have_rows('images')) : ?>
                            <?php while (have_rows('images')) : the_row(); ?>

                                <div class="big-image-slide-image"><?php $image1 = get_sub_field('image'); ?>
                                    <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>

</section>