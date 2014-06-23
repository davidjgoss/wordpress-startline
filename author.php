<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for author pages e.g. /author/davidgoss
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Load the first matching post so we can get the author fields from it */
		      the_post(); ?>

		<header>

			<h1>Posts by <?php the_author_meta( "display_name" ); ?></h1>

			<?php if ( get_the_author_meta( "description" ) ) : ?>

				<p><?php the_author_meta( "description" ); ?></p>
			
			<?php endif; ?>

		</header>

		<?php /* go back to the start of the loop so we incude all posts */
		      rewind_posts(); ?>

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