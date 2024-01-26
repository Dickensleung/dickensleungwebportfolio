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
		<?php get_template_part('template-parts/content-loading');?>
		<div class="theme-page-header"><?php get_template_part('template-parts/content-nav');?></div>	
		
		<section class="about-me-page-container">
			<div class="about-left">
				<article class="about-me-header">
					<h2>about me</h2>
					<div class="about-me-header-innerwrap">
						<img alt="about-me-profile-picture" class="profile-picture profile-picture-mobile" src="<?php echo get_template_directory_uri();?>/images/profile-picture.jpg">
						<h1>the Developer.</h1>
					</div>

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
			<?php get_template_part('template-parts/content-page-footer');?>
		</section>
							
	</main><!-- #main -->

<?php
get_footer();
