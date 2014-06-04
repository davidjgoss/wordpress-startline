<?php
/**
 * Displays the sidebar and footer on every template
 *
 * @package WordPress
 * @subpackage Startline
 */

get_sidebar(); ?>

<footer role="contentinfo">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></footer>
<?php wp_footer(); ?>
</body>
</html>