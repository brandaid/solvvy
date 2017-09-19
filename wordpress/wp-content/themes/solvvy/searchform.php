<?php
/**
 * Template for displaying search forms in Solvvy
 *
 * @package WordPress
 * @subpackage Solvvy
 * @since Solvvy
 */
?>

<form role="search" method="get" class="searchbox" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<input type="text" value="" placeholder="Search......" id="st-search-input" class="searchbox-input" onkeyup="buttonUp();" required />
	<input type="submit" id="searchsubmit" class="searchbox-submit" value="&#xe80f" />
	<span class="searchbox-icon"><span class="icon-search-2"></span></span>
</form>