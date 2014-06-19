<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for category pages e.g. /category/javascript
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<header>

			<h1>Posts from <em><?php single_cat_title( "", true ); ?></em></h1>

			<?php if ( category_description() ) : ?>

				<p><?php echo category_description(); ?></p>

			<?php endif; ?>
			
		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( "content", "list" ); ?>

		<?php endwhile; ?>

		<nav>
			<?php previous_posts_link( "Newer Posts" ); ?>
			<?php next_posts_link( "Older Posts" ); ?>
		</nav>

	<?php else : ?>

		<?php get_template_part( "content", "none" ); ?>
	
	<?php endif; ?>

<?php get_footer(); ?>