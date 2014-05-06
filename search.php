<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<header>
		<h1>Search results for <mark><?php the_search_query(); ?></mark></h1>
	</header>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "list" ); ?>
	<?php endwhile; ?>

<?php else : ?>

	<h1>Sorry</h1>
	<p>Your search for <mark><?php the_search_query(); ?></mark> didn't match anything on this site &mdash; you might try again with a different or broader query.</p>

<?php endif; ?>

<?php get_footer(); ?>