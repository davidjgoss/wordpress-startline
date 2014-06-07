<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * The comments area after the post itself, including the list of comments and the respond form
 */
?>

<?php /* Quit now if the post requires a password */
      if ( post_password_required() ) return; ?>

<?php if ( have_comments() ) : ?>

	<section id="comments">

		<h2><?php comments_number( "No comments", "1 comment", "% comments" ); ?> on <em><?php the_title(); ?></em></h2>
		
		<ol><?php /* List comments using template from comment_markup.php */
		          wp_list_comments( array(
			"callback"			=> "startline_comment_markup",
			"end-callback"		=> "startline_comment_close",
			"type"				=> "all",
			"echo"				=> true
		) ); ?></ol>

		<?php /* Show pagination if enabled, and there are enough comments for 2+ pages */
		      if ( get_option( "page_comments" ) && get_comment_pages_count() > 1 ) : ?>
			
			<nav>
				<?php previous_comments_link( "Older comments" ); ?>
				<?php next_comments_link( "Newer comments" ); ?>
			</nav>

		<?php endif; ?>

	</section>

<?php endif; ?>


<?php /* If comments are closed, say so */
      if ( !comments_open() ) : ?>

	<p>Comments are now closed.</p>

<?php /* If registration required to comment, and user isn't logged in,
       * show a link to login/register with callback to this section */
      elseif ( get_option( "comment_registration" ) && !is_user_logged_in() ) : ?>

	<p><a href="<?php echo wp_login_url( get_permalink() . "#respond" ); ?>">Login to add a comment</a></p>

<?php /* Now we've ruled out everything else, we can show the respond form */
      else : ?>

	<?php get_template_part( "respond" ); ?>

<?php endif; ?>