<?php get_header(); ?>

  <section class="row">
      <div class="twelve columns"><!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
<!-- END PAGE PHP -->
        <h3>Our First Page</h3>
        <p>Filler Content</p>
      </div>
    </section>

<?php get_footer(); ?>
