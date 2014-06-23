<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for the homepage, shows the most recent posts unfiltered
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( "content", "list" ); ?>

		<?php endwhile; ?>

		<?php if ( get_previous_posts_link() != null || get_next_posts_link() != null ) : ?>
			<nav>
				<?php previous_posts_link( "Newer Posts" ); ?>
				<?php next_posts_link( "Older Posts" ); ?>
			</nav>
		<?php endif; ?>

	<?php else : ?>

		<?php get_template_part( "content", "none" ); ?>

	<?php endif; ?>

<?php get_footer(); ?>