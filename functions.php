<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Custom functions that can be called in templates,
 * or uses for hooks and filters. Add yours at the
 * bottom before the closing "?>"
 */

// tell WordPress this theme uses HTML5
add_theme_support( "html5", array( "search-form", "comment-form", "comment-list", "gallery", "caption" ) );


// tell WordPress this theme supports widgets in the sidebar
function startline_widgets_init() {
	register_sidebar( array(
		"name" => "Sidebar",
		"id" => "startline_sidebar",
		"before_widget" => "<section>",
		"after_widget" => "</section>",
		"before_title" => "<h2>",
		"after_title" => "</h2>",
	) );
}
add_action( "widgets_init", "startline_widgets_init" );


// strip align, width and height attributes from img tags
function startline_img_sanitise($html)
{
	// strip obsolete align, width and height attributes from generated <img> tag
	$pattern = '/ (?:align|width|height)=\"\w+\"/i';
	$html = preg_replace($pattern, "", $html);
	return $html;
}
add_filter( "get_image_tag", "startline_img_sanitise", 10, 1);


// customise the <title> tag format
function startline_wp_title($title, $sep, $seplocation)
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


// generate a clean list of a post's categories, with links
function startline_category_list( $postid, $sep, $before, $after )
{
	$post_categories = wp_get_post_categories( $postid );
	if ( empty( $post_categories ) ) return;

	echo $before;

	$i = 0;	
	foreach ( $post_categories as $c )
	{
		if ( $sep != "" && $i > 0 ) echo $sep;
		$category = get_category( $c );
		echo "<a href=\"" . esc_url( get_category_link( $category->term_id ) ) . "\"><span itemprop=\"articleSection\">" . $category->name . "</span></a>";
		$i++;
	}

	echo $after;
}


// generate a clean list of a post's tags, with links
function startline_tag_list( $postid, $sep, $before, $after )
{
	$post_tags = wp_get_post_tags( $postid );
	if ( empty( $post_tags ) ) return;

	echo $before . "<span itemprop=\"keywords\">";

	$i = 0;	
	foreach ( $post_tags as $t )
	{
		if ( $sep != "" && $i > 0 ) echo $sep;
		$tag = get_tag( $t );
		echo "<a href=\"" . esc_url( get_tag_link( $tag->term_id ) ) . "\">" . $tag->name . "</a>";
		$i++;
	}

	echo "</span>" . $after;
}


// call custom comment markup template
function startline_comment_markup( $comment, $args, $depth )
{
	$GLOBALS["comment"] = $comment;
	get_template_part( "comment-markup" );
}


// close comment markup with </li> tag
function startline_comment_close( $comment, $args, $depth )
{
	echo "</li>";
}

?>