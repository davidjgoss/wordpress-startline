<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */
?>

<article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
	<header>
		<h1 itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h1>
	</header>
	
	<footer>
		<p>Posted on <time datetime="<?php the_time( "c" ) ?>" itemprop="datePublished"><?php the_time( "j F Y" ) ?></time> by <em itemprop="author" itemscope itemtype="http://schema.org/Person"><a href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>" itemprop="url"><span itemprop="name"><?php the_author(); ?></span></a></em></p>
		<?php if ( comments_open() ) : ?>
			<p><?php comments_popup_link( "No comments", "1 comment", "% comments", "", "Comments off" ); ?></p>
		<?php endif; ?>
	</footer>

	<div itemprop="description"><?php the_excerpt(); ?></div>
</article>