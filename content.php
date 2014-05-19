<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */
?>

<article>
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>

	<?php the_content(); ?>
</article>