<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Global footer template, including the closing </body>
 */
?>

</main>

<?php /* Call the sidebar code here, to save calling sidebar
       * and footer in every template, and make it easier
       * to remove the sidebar if we don't need it */
      get_sidebar(); ?>

<footer role="contentinfo">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></footer>

<?php /* This must stay here, used by WordPress and plugins to insert scripts etc */
      wp_footer(); ?>

</body>
</html>