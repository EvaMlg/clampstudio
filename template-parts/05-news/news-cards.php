<section class="news-cards">

    <div class="t-grid">

        <h2 class="h2-pri">News</h2>
        <div>
            <!-- Arrow  -->
            <h4 class="h4-sec">All news</h4>
        </div>

        <div class="articles-container">


            <?php
            $args = array('post_type' => 'post');
            // The Query
            $the_query = new WP_Query($args);
            $the_query->query('showposts=3');


            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>

                    <article class="article-wrapper">

                        <div class="article-thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="thumb" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                            <?php else : ?>
                                <img class="thumb" src="https://picsum.photos/600" />
                            <?php endif; ?>
                        </div>

                        <div class="article-content">

                            <p class="post__meta"><span class="p-pri-uppercase"><?php the_time(get_option('date_format')); ?></span></p>

                            <h3 class="h3-pri"><?php the_title(); ?></h3>

                            <p class="p-pri"><?php the_excerpt(); ?></p>

                            <h4 class="h4-sec">
                                <a href="<?php the_permalink(); ?>" class="post__link">Read more</a>
                            </h4>

                        </div>
                    </article>
            <?php


                }
            } else {
                // no posts found
            }
            // Restore original Post Data 
            wp_reset_postdata();
            ?>
        </div>




</section>