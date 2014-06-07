<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for year, month and day archive pages e.g. /2014/06/07
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<header>

			<h1>Posts from <?php
				if ( is_day() ) :
					print( get_the_date( "j F Y" ) );
				elseif ( is_month() ) :
					print( get_the_date( "F Y" ) );
				elseif ( is_year() ) :
					print( get_the_date( "Y" ) );
				else :
					echo "Archive";
				endif;
			?></h1>

		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( "content", "list" ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( "content", "none" ); ?>
		
	<?php endif; ?>

<?php get_footer(); ?>