<?php
/**
 * Template for displaying search forms in Solvvy
 *
 * @package WordPress
 * @subpackage Solvvy
 * @since Solvvy
 */
?>

<form role="search" method="get" id="formSearch" class="searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" placeholder="Search......" name="s" id="s" class="searchbox-input" onkeyup="buttonUp();" required>
	<input type="submit" class="searchbox-submit" value="&#xe80f">
	<span class="searchbox-icon"><span class="icon-search-2"></span></span>
</form>