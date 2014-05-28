<?php
/**
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<?php if ( have_comments() ) : ?>
	<section id="comments">
		<h2><?php comments_number( "No comments", "1 comment", "% comments" ); ?> on <em><?php the_title(); ?></em></h2>
		<ol><?php wp_list_comments( array(
			"callback"			=> "startline_comment_markup",
			"end-callback"		=> "startline_comment_close",
			"type"				=> "all",
			"echo"				=> true
		) ); ?></ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( "page_comments" ) ) : ?>
			<nav>
				<?php previous_comments_link( "Older comments" ); ?>
				<?php next_comments_link( "Newer comments" ); ?>
			</nav>
		<?php endif; ?>
	</section>
<?php endif; ?>


<?php if ( !comments_open() ) : ?>
	<p>Comments are now closed.</p>
<?php elseif ( get_option( "comment_registration" ) && !is_user_logged_in() ) : ?>
	<p><a href="<?php echo wp_login_url( get_permalink() . "#respond" ); ?>">Login to add a comment</a></p>
<?php else : ?>
	<?php
	/* Call either the standard Wordpress comment form,
	or our custom one (uncomment as desired) */
	//comment_form();
	get_template_part( "respond" );
	?>
<?php endif; ?>




