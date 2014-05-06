<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
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
<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>