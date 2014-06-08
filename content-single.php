<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Display the post title, metadata, full content and comments section
 */
?>

<article id="post-<?php the_ID(); ?>" class="h-entry" itemscope itemtype="http://schema.org/BlogPosting">

	<header>

		<h1 class="p-name" itemprop="headline"><a class="u-url" href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h1>
	
	</header>
	
	<footer>

		<p>Posted on <time class="dt-published" datetime="<?php the_time( "c" ) ?>" itemprop="datePublished"><?php the_time( "j F Y" ) ?></time> by <em class="p-author h-card" itemprop="author" itemscope itemtype="http://schema.org/Person"><a class="u-url" href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>" itemprop="url"><span class="p-name" itemprop="name"><?php the_author(); ?></span></a></em></p>

		<?php /* Show our clean category list from functions.php */
		      startline_category_list( get_the_ID(), ", ", "<p>Posted in ", ".</p>" ); ?>

		<?php /* Show our clean tag list from functions.php */
		      startline_tag_list( get_the_ID(), ", ", "<p>Tagged with ", ".</p>" ); ?>

		<?php /* If comments aren't closed, link to the comment section */
		      if ( comments_open() ) : ?>
	    	
	    	<p><a href="#comments"><span itemprop="commentCount"><?php comments_number( "0", "1", "%" ); ?></span> comments</a></p>

	    <?php endif; ?>
	
	</footer>

	<div class="e-content" itemprop="articleBody"><?php the_content(); ?></div>

	<?php /* This calls our comments.php template */
	      comments_template(); ?>

</article>