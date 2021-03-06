<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main faq" role="main">

      <div class="faq-title banner">
        <h1>frequently asked questions</h1>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>

        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

      <?php endwhile; // End of the loop. ?>
      <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
  </main>
</div>

<?php get_footer(); ?>

