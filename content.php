<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Display title and content generically, for when content type in unknown
 */
?>

<article>

	<header>

		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	</header>

	<?php the_content(); ?>

</article>