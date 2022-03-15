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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nomadsun' ); ?></a>

	<header id="masthead" class="site-header fixed w-100">
  
	<div class="inner-header fixed flex-ns justify-between">


	<a href="http://localhost:8888/contact/" class="mint italic strap mv0" id="strap">The illustration and design studio</a>

		<a href="http://localhost:8888/contact/" class="mint italic strap mv0" id="strap">The illustration and design studio </a>

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
