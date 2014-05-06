<?php
/**
 * Displays the sidebar and footer on every template
 *
 * @package WordPress
 * @subpackage Startline
 * @since Startline 0.9
 */

get_sidebar(); ?>

<footer role="contentinfo">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></footer>
<?php wp_footer(); ?>
</body>
</html>