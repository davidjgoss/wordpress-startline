<?php
/**
 *
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div itemscope itemtype="http://schema.org/BlogPosting">
		<?php get_template_part( "content", "single" ); ?>
		<?php comments_template(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>