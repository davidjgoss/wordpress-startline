<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9	
 */

$req = get_option( "require_name_email" );

?>

<section id="respond">
	<h2><?php comment_form_title( "Add a Comment", "Reply to <em>%s</em>" ); ?></h2>
	<form id="commentform" method="post" action="<?php echo get_option( "siteurl" ); ?>/wp-comments-post.php">
		<ol>
			<li>
				<label for="author">Name <?php if ($req) echo "(required)"; ?></label><br />
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo "required"; ?> />
			</li>
			<li>
				<label for="email">Email <?php if ($req) : ?>(required, but won't be published)<?php else : ?>(won't be published)<?php endif; ?></label><br />
				<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo "required"; ?> />
			</li>
			<li>
				<label for="url">Website</label><br />
				<input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" />
			</li>
			<li>
				<label for="comment">You can use these tags: <code><?php echo allowed_tags(); ?></code></label><br />
				<textarea id="comment" name="comment"></textarea>
			</li>
			<li>
				<input id="submit" name="submit" type="submit" value="Submit Comment" />		
			</li>
		</ol>
		<?php comment_id_fields(); ?>
		<?php do_action( "comment_form" , $post->ID); ?>
	</form>
</section>