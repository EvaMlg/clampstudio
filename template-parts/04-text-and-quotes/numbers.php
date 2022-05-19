<section class="numbers">
    <div class="grid numbers-wrapper">


        <?php if (have_rows('numbers')) : ?>
            <?php while (have_rows('numbers')) : the_row(); ?>

                <div class="titles-numbers">
                    <h2 class="h2-pri"><?php the_sub_field('numbers_title'); ?></h2>
                    <p class="p-pri"><?php the_sub_field('numbers_content'); ?></p>
                    <span class="primary-cta"><?php the_sub_field('numbers_cta'); ?></span>
                </div>


                <div class="numbers-container">
                    <?php if (have_rows('items')) : ?>
                        <?php while (have_rows('items')) : the_row(); ?>

                            <div class="number-item">
                                <h2 class="number"> <?php the_sub_field('number'); ?> </h2>
                                <span class="p-pri-uppercase"><?php the_sub_field('subtitle'); ?> </span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>