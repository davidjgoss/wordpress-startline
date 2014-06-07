<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Global header template, incuding the <head> and opening <body>
 */
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( "charset" ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title><?php wp_title( "|", true, "right" ); ?><?php bloginfo( "name" ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />
<?php /* This must stay here, used by WordPress and plugins to insert stylesheets, meta tags etc */
      wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header role="banner">

	<h1><a href="<?php echo home_url( "/" ); ?>"><?php bloginfo( "name" ); ?></a></h1>

	<nav role="navigation">
		<?php wp_page_menu( array(
	        "depth"       => 0,
			"sort_column" => "menu_order, post_title",
			"menu_class"  => "",
			"include"     => "",
			"exclude"     => "",
			"echo"        => true,
			"show_home"   => false,
			"link_before" => "",
			"link_after"  => ""
			) ); ?>
	</nav>

</header>

<main role="main">