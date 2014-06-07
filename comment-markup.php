<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Used for each comment on a post, having been called by a
 * custom function which is in turned specified in arguments
 * on a wp_list_comments call in comments.php
 */
?>

<li>

	<article id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
		
		<header>
			
			<?php /* This echoes an <img> tag that points to a Gravatar,
			       * unless the admin has disabled avatars in settings */
			      echo get_avatar( get_comment_author_email(), 64 ); ?>
			
			<h3 itemprop="creator" itemscope itemtype="http://schema.org/Person">

				<?php /* If the commenter provided a URL for themselves, link to them... */
				      if ( get_comment_author_url() ) : ?>

					<a href="<?php comment_author_url(); ?>" itemprop="url"><span itemprop="name"><?php comment_author(); ?></span></a>
				
				<?php /* ...otherwise just show their name as text */
				      else : ?>
					
					<span itemprop="name"><?php comment_author(); ?></span>
				
				<?php endif; ?>

			</h3>

		</header>

		<footer>

			<p><a href="<?php the_permalink(); ?>#comment-<?php comment_id(); ?>" itemprop="url">∞</a> Added on <time datetime="<?php comment_time( "c" ) ?>" itemprop="commentTime"><?php comment_time( "j F Y" ) ?></time></p>
			
			<?php /* Show a reply link only if comments are not closed yet,
			       * and the original comment wasn't a trackback/pingback */
			      if ( comments_open() && get_comment_type() == "comment" ) : ?>

				<p><a href="<?php the_permalink(); ?>?replytocom=<?php comment_id(); ?>#respond" itemprop="replyToUrl">Reply</a></p>

			<?php endif; ?>

		</footer>

		<div itemprop="commentText"><?php comment_text(); ?></div>

	</article>

<?php /* No closing </li> tag is deliberate, to allow for nested comments, WordPress will add this for us */ ?>