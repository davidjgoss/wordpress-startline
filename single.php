<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for individual posts e.g. /2014/06/07/something
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( "content", "single" ); ?>		
	
	<?php endwhile; ?>

<?php get_footer(); ?>