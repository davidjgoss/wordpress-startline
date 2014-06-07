<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Display a page (not post) title, metadata and content
 * Notice this uses the "Article" microdata type rather than "BlogPosting"
 */
?>

<article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

	<header>

		<h1 itemprop="headline"><?php the_title(); ?></h1>

	</header>
	
	<footer>

		<p>Updated on <time datetime="<?php the_modified_time( "c" ) ?>" itemprop="dateModified"><?php the_modified_time( "j F Y" ) ?></time></p>
		
		<?php /* If comments aren't closed, link to the comment section */
		      if ( comments_open() ) : ?>
			
			<p><a href="#comments"><span itemprop="commentCount"><?php comments_number( "0", "1", "%" ); ?></span> comments</a></p>
		
		<?php endif; ?>
	
	</footer>

	<div itemprop="articleBody"><?php the_content(); ?></div>

</article>