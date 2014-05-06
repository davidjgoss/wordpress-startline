<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "page" ); ?>
		<?php comments_template( "", false ); ?>
	<?php endwhile; ?>

<?php get_footer(); ?>