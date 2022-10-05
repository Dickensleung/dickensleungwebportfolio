<?php
/**
 * The template for displaying Dickens Leung's about pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dickensleungwebportfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/content-nav');?>	
		
		<section class="about-me-page-container">
			<div class="about-left">
				<article class="about-me-header">
					<h2>hello</h2>
					<h1>My name is Dickens.</h1>
					<h1>I am a front-end developer and a musician.</h1>
				</article>
				

				<article>
					<?php if(function_exists('get_field')):?>
					<p class="about-me-paragraph"><?php if(get_field('about_me')){
						the_field('about_me');}?>
					</p>
				
				</article>

				<article>
					<p class="about-me-paragraph paragraph-two"><?php if(get_field('about_me_two')){
						the_field('about_me_two');}?>
					</p>
				
				</article>

				<article>
					<p class="about-me-paragraph paragraph-three"><?php if(get_field('about_me_three')){
						the_field('about_me_three');}?>
					</p>
				</article>
				<?php endif;?> <!-- end about me description-->
			</div>

			<aside class="about-right">
				<h2>get in touch</h2>
				<a href="mailto:dickens.leung@outlook.com" target="_blank" rel="noopener noreferrer"><button class="choice-btn">email</button></a>
			</aside>
		</section>

	
		<section id="page-end-footer"></section>
	</main><!-- #main -->

<?php
get_footer();
