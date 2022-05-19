<section class="quote-slider">

  <div class="grid">


    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php if (have_rows('quote_slider')) : ?>
          <?php while (have_rows('quote_slider')) : the_row(); ?>
            <div class="swiper-slide">


              <h2 class="h2-white"><?php the_sub_field('tagline'); ?></h2>
              <p class="quote"><?php the_sub_field('quote'); ?></p>
              <span class="p-pri-uppercase"><?php the_sub_field('author'); ?></span>

            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>



</section>