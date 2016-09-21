<?php get_header(); ?>

  <section class="row">
      <div class="twelve columns">

<!-- BEGIN PAGE PHP -->
            <?php
                if( have_posts() ){
                    while( have_posts() ){
                      the_post(); ?>

                  <h2><?php the_title(); ?></h2>
                  <?php the_content(); ?>

                <?php
                }//end while
              }//end if
             ?>
             <!-- End Loop -->
      </div>
    </section>
<!-- End Section Container -->
<?php get_footer(); ?>
