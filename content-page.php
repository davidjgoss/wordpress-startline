<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	
	<footer>
		<p>Updated on <time datetime="<?php the_modified_time( "c" ) ?>"><?php the_modified_time( "j F Y" ) ?></time></p>
		<?php if ( comments_open() ) : ?>
			<p><?php comments_popup_link( "No comments", "1 comment", "% comments", "", "Comments off" ); ?></p>
		<?php endif; ?>
	</footer>

	<?php the_content(); ?>
</article>
