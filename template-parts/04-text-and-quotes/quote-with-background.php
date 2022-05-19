<section class="quote-with-background">

    <?php if (have_rows('quote_with_background')) : ?>

        <?php while (have_rows('quote_with_background')) : the_row(); ?>

            <?php $image = get_sub_field('quote_with_background_image'); ?>

            <style>
                
            .quote-with-background {
                background-image : url("<?php echo $image['url']; ?>");
            }

            </style>

            <div class="grid content-item">

                <h2 class="h2-white"><?php the_sub_field('quote_with_background_content'); ?></h2>

            </div>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>

    </div>

</section>