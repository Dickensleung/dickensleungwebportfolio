<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dickensleungwebportfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( '%1$s %2$s', 'dickensleungportfolio' ), '©2022 DICKENS LEUNG PORTFOLIO-ALL RIGHTS RESERVED.', '<a href="http://underscores.me/"></a>' );
			?>
			
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
