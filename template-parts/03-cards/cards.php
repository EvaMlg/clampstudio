<section class="cards">

    <div class="t-grid">

        <?php if (have_rows('cards')) : ?>
            <?php while (have_rows('cards')) : the_row(); ?>
            
                <div class="header-cards">
                    <h2 class="h2-pri"><?php the_sub_field('cards_title'); ?></h2>
                    <p class="p-pri"><?php the_sub_field('cards_content'); ?></p>

                </div>

                <div class="cards-container">
                    <?php if (have_rows('card')) : ?>
                        <?php while (have_rows('card')) : the_row(); ?>

                            <div class="card">
                                <?php $icon = get_sub_field('card_icon'); ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                <h3 class="h3-pri"> <?php the_sub_field('card_title'); ?> </h3>
                                <p class="p-pri"> <?php the_sub_field('card_content'); ?> </p>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

</section>