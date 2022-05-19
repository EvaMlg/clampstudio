<section class="list">
    <div class="grid">

        <?php if (have_rows('list')) : ?>
        
            <?php while (have_rows('list')) : the_row(); ?>
                <h2 class="h2-pri"><?php the_sub_field('list_title'); ?></h2>

                <?php if (have_rows('list_item')) : ?>
                    <?php while (have_rows('list_item')) : the_row(); ?>
                    <div class="list-wrapper">

                            <h4 class="p-pri-uppercase-bold"><?php the_sub_field('list_item_title'); ?></h4>
                            <p class="p-pri"><?php the_sub_field('list_item_content'); ?></p>

                    </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>

                <span class="list-cta primary-cta"><?php the_sub_field('list_cta'); ?></h2>

                <?php endwhile; ?>
            <?php endif; ?>


    </div>

</section>