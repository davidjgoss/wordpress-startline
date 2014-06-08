<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Template for the "sidebar"
 */
?>

<div role="complementary">

	<h2>About</h2>
	<?php bloginfo( "description" ); ?>

	<h2>Search</h2>
	<?php get_search_form(); ?>

	<h2>Archive</h2>
	<ul><?php wp_get_archives( array( 
		"type"            => "monthly",
		"limit"           => "",
		"format"          => "html", 
		"before"          => "",
		"after"           => "",
		"show_post_count" => false,
		"echo"            => 1,
		"order"           => "DESC"
		) ); ?></ul>

	<?php if ( dynamic_sidebar( "startline_sidebar" ) ) : else : endif; ?>

</div>