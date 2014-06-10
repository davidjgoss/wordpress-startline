<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for image attachments
 */

get_header(); ?>

	<article id="attachment-<?php the_ID(); ?>">

		<header>
			
			<h1>Image: <em><?php the_title(); ?></em></h1>
		
		</header>

		<footer>
			
			<p>Uploaded on <time datetime="<?php the_time( "c" ) ?>"><?php the_time( "j F Y" ) ?></time></p>
		
		</footer>

		<figure>

			<?php /* No filter exists for wp_get_attachment_image, so we
			       * have to call the function to strip the unnecessary attrs
			       * from right here */
			      echo startline_img_sanitise( wp_get_attachment_image( get_the_ID(), "full" ) ); ?>

			<?php if ( has_excerpt() ) : ?>
			
				<figcaption><?php the_excerpt(); ?></figcaption>

			<?php endif; ?>

		</figure>

	</article>

<?php get_footer(); ?>