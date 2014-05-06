<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	
	<footer>
		<p>Posted on <time datetime="<?php the_time( "c" ) ?>"><?php the_time( "j F Y" ) ?></time> by <?php the_author_posts_link(); ?></p>
		<?php if ( comments_open() ) : ?>
			<p><?php comments_popup_link( "No comments", "1 comment", "% comments", "", "Comments off" ); ?></p>
		<?php endif; ?>
	</footer>

	<?php the_content(); ?>
</article>