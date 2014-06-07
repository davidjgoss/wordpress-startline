<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * The form for users to add a comment to a page/post
 */
?>

<?php /* store the setting for whether commenter name and email are required */
      $req = get_option( "require_name_email" ); ?>

<section id="respond">

	<h2><?php comment_form_title( "Add a Comment", "Reply to <em>%s</em>" ); ?></h2>

	<form method="post" action="<?php echo get_option( "siteurl" ); ?>/wp-comments-post.php">

		<ul>

			<li>
				<label for="author">Name <?php if ($req) echo "(required)"; ?></label><br />
				<input id="author" name="author" type="text" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo "required"; ?> />
			</li>

			<li>
				<label for="email">Email <?php if ($req) : ?>(required, but won't be published)<?php else : ?>(won't be published)<?php endif; ?></label><br />
				<input id="email" name="email" type="email" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo "required"; ?> />
			</li>

			<li>
				<label for="url">Website</label><br />
				<input id="url" name="url" type="url" value="<?php echo esc_attr($comment_author_url); ?>" />
			</li>

			<li>
				<label for="comment">You can use these tags: <code><?php echo allowed_tags(); ?></code></label><br />
				<textarea id="comment" name="comment"></textarea>
			</li>

			<li>
				<input name="submit" type="submit" value="Submit Comment" />		
			</li>

		</ul>

		<?php /* This must stay here, inserts hidden inputs to identify
		       * the post to the comment system */
		      comment_id_fields(); ?>

		<?php /* This must stay here, another hook similar to wp_head */
		      do_action( "comment_form" , $post->ID); ?>

	</form>

</section>