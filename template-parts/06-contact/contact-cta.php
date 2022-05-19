<section class="contact-cta">


    <div class="grid contact-cta-wrapper">

        <?php if (have_rows('contact')) : ?>

            <?php while (have_rows('contact')) : the_row(); ?>

                <h2 class="h2-pri"> <?php the_sub_field('contact_tagline'); ?> </h2>

                    <div class="vertical-line"></div>

                    <p class="p-pri"><?php the_sub_field('contact_content'); ?></p>
                    

                <span class="secondary-cta cta-contact"><?php the_sub_field('contact_cta'); ?></span>


            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>
