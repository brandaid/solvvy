<?php
/**
 * Template for displaying search forms in Solvvy
 *
 * @package WordPress
 * @subpackage Solvvy
 * @since Solvvy
 */
?>

<form role="search" method="get" class="searchbox" action="">
	<input type="search" placeholder="Search......" name="s" id="s" class="searchbox-input" onkeyup="buttonUp();" required>
	<input type="submit" id="myBtnSearch" class="searchbox-submit" value="&#xe80f">
	<span class="searchbox-icon"><span class="icon-search-2"></span></span>
</form>