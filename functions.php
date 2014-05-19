<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

function startine_wp_title($title, $sep, $seplocation)
{
	// apply a custom title on certain types of page
	$newtitle = "";
	if ( is_day() ) :
		$newtitle = "Posts from " . get_the_date( "j F Y" );
	elseif ( is_month() ) :
		$newtitle = "Posts from " . get_the_date( "F Y" );
	elseif ( is_year() ) :
		$newtitle = "Posts from " . get_the_date( "Y" );
	endif;

	// if we've applied a custom title, override wp_title with it
	if ( $newtitle != "" )
	{
		if ( $seplocation == "right" )
		{
			$title = $newtitle . " " . $sep . " ";
		}
		else
		{
			$title = " " . $sep . " " . $newtitle;
		}
	}

	return $title;
}
add_filter( "wp_title", "startline_wp_title", 10, 3 );

?>