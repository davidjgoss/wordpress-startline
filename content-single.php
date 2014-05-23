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
		<?php startline_category_list( get_the_ID(), ", ", "<p>Posted in ", ".</p>" ); ?>
		<?php startline_tag_list( get_the_ID(), ", ", "<p>Tagged with ", ".</p>" ); ?>
		<p><a href="#comments"><span itemprop="commentCount"><?php comments_number( "0", "1", "%" ); ?></span> comments</a></p>
	</footer>

	<div itemprop="articleBody"><?php the_content(); ?></div>

	<?php comments_template(); ?>
</article>