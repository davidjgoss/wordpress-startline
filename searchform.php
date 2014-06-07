<?php
/**
 * @package WordPress
 * @subpackage Startline
 *
 * Shows a site search form
 * Note: Results can be formatted in search.php
 */
?>

<form method="get" action="<?php echo home_url( "/" ); ?>" role="search" >
	<label id="search-label" for="search-field">Search</label>
	<input id="search-field" type="search" name="s" placeholder="search site" autocorrect="off" autocapitalize="off" />
	<input id="search-submit" type="submit" value="Search" />
</form>