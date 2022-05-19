<section class="double-column-text">

    <div class="grid">


        <?php if (have_rows('double_column_text')) : ?>

            <?php while (have_rows('double_column_text')) : the_row(); ?>

            <div class="double-column-title">

                <h4 class="p-pri-uppercase-bold"><?php the_sub_field('double_column_text_surtitle'); ?></h4>
                <h2 class="h2-pri"><?php the_sub_field('double_column_text_title'); ?></h2>

            </div>    
    
                <p class="p-pri columns"><?php the_sub_field('double_column_text_content'); ?></p>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>