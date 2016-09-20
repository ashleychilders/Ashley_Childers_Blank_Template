<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ashley Childers Blank Template</title>

  <!-- Links to our Style.css file -->
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!--
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src-"custom.js"></script>
-->

<body>
  <div class="container">

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
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
    get_header(); ?>
  <!-- End Header -->

  <!-- Begin Section Container -->
      <section class ="row">
          <div class="twelve columns">
              <h2>Section Content - cool</h2>
              <p>This is a cool section</p>
          </div>
      </section>
  <!-- End Section Container -->

  <!-- Begin Fooder -->
      <?php get_footer(); ?>
<!-- End Footer -->
</div>
</body>
</html>
