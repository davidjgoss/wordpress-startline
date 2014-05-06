<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */
?>

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

</main>