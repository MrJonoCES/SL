<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomadsun
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css"/>
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/sl-new/css/basscss.min.css">
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/sl-new/css/custom.css">
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/sl-new/css/slideshow.css">
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/sl-new/css/fonts.css">
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/sl-new/css/process.css">
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/sl-new/css/contact.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nomadsun' ); ?></a>

	<header id="masthead" class="site-header">

	<!-- <div class="main-title">
		<h1>
		Smith & Lewarne
		</h1>
	</div> -->
  
	<div class="inner-header pa3">
	
		<h2 class="mint-bold mv0 tl">
		<a href="http://localhost:8888/">Smith & Lewarne</a>
		</h2>

		<h2 class="italic strap mv0">
		The illustration and design studio 
		</h2>

		<nav id="site-navigation" class="main-navigation">
		<?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id'        => 'primary-menu',
			// ) );
		?>
		<a class="mint" href="http://localhost:8888/projects/">Projects</a>
		<a class="mint" href="http://localhost:8888/contact/">Process</a>
		<a class="mint" href="http://localhost:8888/contact/">Contact</a>
		</nav><!-- #site-navigation -->

	</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
