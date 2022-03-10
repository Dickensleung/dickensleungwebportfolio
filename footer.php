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
			printf( esc_html__( 'Custom wordPress theme %2$s.'), 'dickensleungwebportfolio', '<a href="http://underscores.me/"> Dickens Leung ©2022</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
