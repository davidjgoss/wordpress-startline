<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "list" ); ?>
	<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( "content", "none" ); ?>

<?php endif; ?>

<?php get_footer(); ?>