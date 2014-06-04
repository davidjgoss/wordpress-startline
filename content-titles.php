<?php
/**
 * @package WordPress
 * @subpackage Startline
 */
?>

<article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
	<h2 itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h2>

	<p>Posted on <time datetime="<?php the_time( "c" ) ?>" itemprop="datePublished"><?php the_time( "j F Y" ) ?></time> by <em itemprop="author" itemscope itemtype="http://schema.org/Person"><a href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>" itemprop="url"><span itemprop="name"><?php the_author(); ?></span></a></em></p>
	<?php if ( comments_open() ) : ?>
		<p><a href="<?php the_permalink(); ?>#comments"><span itemprop="commentCount"><?php comments_number( "0", "1", "%" ); ?></span> comments</a></p>
	<?php endif; ?>
</article>