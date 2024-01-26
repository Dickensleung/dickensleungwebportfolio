<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dickensleungwebportfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found content">
		<div id="leftcol"></div>
		<div id="rightcol">
			<div id="four-zero-four-container">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dickensleungwebportfolio' ); ?></h1>
			</div>
			
		</div>
			
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
