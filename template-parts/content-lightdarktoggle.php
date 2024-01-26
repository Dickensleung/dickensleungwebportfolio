<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dickensleungwebportfolio
 */

?>



<fieldset
	class="header__toggle toggle"
	aria-label="theme toggle"
	role="radiogroup"
	>
	<label for="dark" class="dark-mode-lable-padding">Dark Mode <span class="visually-hidden">On</span></label>
	<div class="toggle__wrapper">
		<input type="radio" name="theme" id="dark" checked />
		<input type="radio" name="theme" id="light" />
		<span aria-hidden="true" class="toggle__background"></span>
		<span aria-hidden="true" class="toggle__button"></span>
	</div>
	<label for="light" class="visually-hidden dark-mode-lable">Dark Mode</label>
	<label for="dark" class="visually-hidden">Dark</label>
	<label for="light" class="visually-hidden">Light</label>
	

</fieldset>
