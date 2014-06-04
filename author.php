<?php
/**
 * @package WordPress
 * @subpackage Startline
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php
		/* Queue the first post, that way we know
		 * what author we're dealing with (if that is the case).
		 *
		 * We reset this later so we can run the loop
		 * properly with a call to rewind_posts().
		 */
		the_post();
	?>

	<header>
		<h1>Posts by <?php the_author_meta( "display_name" ); ?></h1>
		<?php if ( get_the_author_meta( "description" ) ) : ?>
			<p><?php the_author_meta( "description" ); ?></p>
		<?php endif; ?>
	</header>

	<?php
		/* Since we called the_post() above, we need to
		 * rewind the loop back to the beginning that way
		 * we can run the loop properly, in full.
		 */
		rewind_posts();
	?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "list" ); ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( "content", "none" ); ?>
<?php endif; ?>

<?php get_footer(); ?>