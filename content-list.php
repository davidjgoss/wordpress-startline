<?php
/**
 * @package WordPress
 * @subpackage Startline
 */
?>

<article id="post-<?php the_ID(); ?>" class="h-entry" itemscope itemtype="http://schema.org/BlogPosting">
	<h2 class="p-name" itemprop="headline"><a class="u-url" href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h2>

	<p>Posted on <time class="dt-published" datetime="<?php the_time( "c" ) ?>" itemprop="datePublished"><?php the_time( "j F Y" ) ?></time> by <em class="p-author h-card" itemprop="author" itemscope itemtype="http://schema.org/Person"><a class="u-url" href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>" itemprop="url"><span class="p-name" itemprop="name"><?php the_author(); ?></span></a></em></p>
	<?php if ( comments_open() ) : ?>
		<p><a href="<?php the_permalink(); ?>#comments"><span itemprop="commentCount"><?php comments_number( "0", "1", "%" ); ?></span> comments</a></p>
	<?php endif; ?>

	<div class="p-summary" itemprop="description"><?php the_excerpt(); ?></div>
</article>