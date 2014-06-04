<?php
/**
 * @package WordPress
 * @subpackage Startline
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<header>
		<h1>Posts tagged <em><?php single_tag_title( "", true ); ?></em></h1>
		<?php if ( tag_description() ) : ?>
			<p><?php echo tag_description(); ?></p>
		<?php endif; ?>
	</header>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content" ); ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( "content", "none" ); ?>
<?php endif; ?>

<?php get_footer(); ?>