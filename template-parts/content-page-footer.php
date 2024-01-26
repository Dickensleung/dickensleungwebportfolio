<?php
/**
 * Template part for displaying custom page footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dickensleungwebportfolio
 */

?>
<div class="child-theme-footer">
	<div class="footer-info">
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		$current_year = date("Y"); 
		$copy_rights = "©". $current_year ." DICKENS LEUNG PORTFOLIO - ALL RIGHTS RESERVED.";
		printf( esc_html__( '%1$s %2$s', 'dickensleungportfolio' ), $copy_rights, '<a href="http://underscores.me/"></a>' );
		?>
		
	</div><!-- .site-info -->
</div>

<?php
