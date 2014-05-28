<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */
?>

<li>
	<article id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
		<header>
			<?php echo get_avatar( get_comment_author_email(), 64 ); ?>
			<h3 itemprop="creator" itemscope itemtype="http://schema.org/Person">
				<?php if ( get_comment_author_url() ) : ?>
					<a href="<?php comment_author_url(); ?>" itemprop="url"><span itemprop="name"><?php comment_author(); ?></span></a>
				<?php else : ?>
					<span itemprop="name"><?php comment_author(); ?></span>
				<?php endif; ?>
			</h3>
		</header>
		<footer>
			<p><a href="<?php the_permalink(); ?>#comment-<?php comment_id(); ?>" itemprop="url">∞</a> Added on <time datetime="<?php comment_time( "c" ) ?>" itemprop="commentTime"><?php comment_time( "j F Y" ) ?></time></p>
			<?php if ( comments_open() && get_comment_type() == "comment" ) : ?>
				<p><a href="<?php the_permalink(); ?>?replytocom=<?php comment_id(); ?>#respond" itemprop="replyToUrl">Reply</a></p>
			<?php endif; ?>
		</footer>
		<div itemprop="commentText"><?php comment_text(); ?></div>
	</article>