  <!-- Begin Header -->
    <?php
    /**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ashley_Childers_Blank_Template
 * @since Blank Template
 */
    get_header(); ?>
  <!-- End Header -->

  <!-- Begin Section Container -->
      <section class ="row">
          <div class="twelve columns">
            <!-- Begin Loop -->
            <?php
            if ( have_posts() ) {
              while ( have_posts() ){
                the_post(); ?>
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                  }
                ?>
                <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?>
                </a></h3>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Read More</a></p>

              <?php
              } //end while
            } //end if
          ?>
            <!-- End Loop -->
          </div>
      </section>
  <!-- End Section Container -->

  <!-- Begin Fooder -->
      <?php get_footer(); ?>
<!-- End Footer -->
