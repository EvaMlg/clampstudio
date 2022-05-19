<section class="simple-quote">

    <div class="grid center">

        <?php if (have_rows('simple_quote')) : ?>

            <?php while (have_rows('simple_quote')) : the_row(); ?>

                <h2 class="p-pri-uppercase-bold"> <?php the_sub_field('simple_quote_title'); ?> </h2>

                <div class="simple-quote-wrapper">

                    <p class="p-pri-big"><?php the_sub_field('simple_quote_content'); ?></p>

                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>