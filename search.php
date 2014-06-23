<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for search results
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<header>

			<h1>Search results for <mark><?php the_search_query(); ?></mark></h1>

		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( "content", "titles" ); ?>

		<?php endwhile; ?>

		<?php if ( get_previous_posts_link() != null || get_next_posts_link() != null ) : ?>
			<nav>
				<?php previous_posts_link( "Newer Posts" ); ?>
				<?php next_posts_link( "Older Posts" ); ?>
			</nav>
		<?php endif; ?>

	<?php else : ?>

		<h1>Sorry</h1>

		<p>Your search for <mark><?php the_search_query(); ?></mark> didn't match anything on this site &mdash; you might try again with a different or broader query.</p>

	<?php endif; ?>

<?php get_footer(); ?>