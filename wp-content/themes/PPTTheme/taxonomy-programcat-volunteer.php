<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <div class="top-hero-blue">
          <h1 class="page-title">volunteer at ppt</h1>

          <?php echo '<img src="'. get_site_url() .'/wp-content/uploads/2018/12/Volunteer-hero.png" alt="Volunteer hero image">' ?>
      </div>

      <div class="content">
        <p>Change happens one person, one moment and one action at a time. As a peer volunteer, you’ll transform lives and give youth the knowledge, tools, and resources they need to make informed choices.  Take the first step. Apply for a volunteer opportunity at PPT today.</p>

        <p>Volunteer opportunities are open to youth 29 and under.</p>

        <p>These programs are looking for great volunteers like you:</p>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          get_template_part( 'template-parts/content','program' );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    <p>To see career opportunities at PPT, please visit our <a href="">employment </a>page. </p>

  </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>