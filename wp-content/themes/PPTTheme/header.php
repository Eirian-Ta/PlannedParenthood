<?php
/**
 * The header of the PlannedParenthood theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<div class="service-advisory">
				<!-- This is where I will place the service advisory which will be at the very top of the header -->
			</div>

			<header id="masthead" class="wrapper site-header 
			<?php if (is_page('services') || is_page('mental-health') || is_page('primary-care') || is_tax('programcat', 'workshop') || is_singular('fact') || is_tax('programcat', 'volunteer') || is_page_template( 'form-template.php' )) {
						echo "blue";
						} elseif (is_page('donate') || is_page('about') || is_page('privacy') || is_page('accessibility') || is_page('contact') || is_post_type_archive('board_member') ){
							echo "green";
						} elseif (is_page('education') || is_page('fqa') || is_post_type_archive('fact')) {
							echo "orange";
						} else {
							echo "purple";
						} ?>" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding (Will put the logo here as a background later in css)-->
				<div class="header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src= <?php echo get_template_directory_uri().'/assets/SVG/black-and-white-svgs/ppt-logo.svg' ?> alt="Planned Parenthood Logo">
					</a>
				</div> <!-- Will be moved to far left flex-start-->
				<div class="header-top-right">
				  <div class="header-pnumber">
				    <p>(416) 961-0113</p>
				  </div>
				  <div>
				    <button type="button" class="header-donate-button" >donate</button>
				  </div> <!-- .header-donate-button-->
				</div> <!-- .header-top-right The div where the number and donate button go -->
				<div class="nav-search">
				  <nav id="site-navigation" class="main-navigation" role="navigation">
					  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				  </nav><!-- #site-navigation -->
				  <div class="search-bar">
						<?php get_search_form( $echo = true );?>
				  </div><!-- .search-bar -->
				</div> <!-- .nav-search-->
			</header><!-- #masthead -->
			<a class="top-button" id="top-button">
				<img src= <?php echo get_template_directory_uri().'/assets/SVG/black-and-white-svgs/back-to-top-icon.svg' ?> alt="Back to top icon/image">
				<p>Back to Top</p>
			</a>
			<div class="escape-button">
			<a href="https://www.youtube.com/">
				<img src= <?php echo get_template_directory_uri().'/assets/SVG/black-and-white-svgs/escape-button.svg' ?> alt="escape icon/image">
			</a>
			</div>

			<div id="content" class="site-content">
