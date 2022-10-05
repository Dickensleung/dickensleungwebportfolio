<?php
/**
 * The active template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dickensleungwebportfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/content-nav');?>	

		<section>
		<?php if(function_exists('get_field')):?>
			<div class="single-work-container">
				<div id="single-work-wrapper">
					<div class="single-hero-container">
						<div class="single-hero-header">
							<h1><?php the_title(); ?></h1>
							<h2>Role: <?php if(get_field('project_role')):the_field('project_role');endif; ?></h2>
						</div>
						<div id="block-underline"></div>
						
						<div class="single-layout">
							<div id="single-col-left">
								<div class="single-bg-img">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="hero-description">
									<h2><?php if(get_field('project_description')):the_field('project_description');endif;?></h2>
								</div>

								<p><?php if(get_field('project_description_two')):the_field('project_description_two');endif;?></p>
															
								
								<?php if(get_field('live_site_link')):
									echo '<a id="live-site-link" href="';
									echo the_field('live_site_link');
									echo '">';
									echo 'See live site';
									echo '</a>';?>
								<?php endif;?>

								<?php echo custom_taxonomies_terms_links();?>
							</div>

							<div id="single-col-right">
								<aside id="design-processes">
								<h2>Design process</h2>
								<div class="process-block"><?php if(get_field('process_field_one')):the_field('process_field_one');endif;?></div>
								<div class="process-block"><?php if(get_field('process_field_two')):the_field('process_field_two');endif;?></div>
								<div class="process-block"><?php if(get_field('process_field_three')):the_field('process_field_three');endif;?></div>
								<div class="process-block"><?php if(get_field('process_field_four')):the_field('process_field_four');endif;?></div>
								<div class="process-block"><?php if(get_field('process_field_five')):the_field('process_field_five');endif;?></div>
								</aside>	
							</div>

							<!-- Trigger/Open The Modal
							GOES UNDER DESIGN PROCESS. onClick Each Process blocks to open modal for contents inside. 

							
								<button id="open-modal">Open Modal</button>
								<div id="the-modal" class="modal">
									<div class="modal-content">
										<span class="close-modal">&times;</span>
										<p>Some text in the Modal..

											displaying content from post permalink, from page single-dl-works.php 
											https://allurewebsolutions.com/open-wordpress-post-modal-without-plugin
											https://stackoverflow.com/questions/70288764/how-to-call-for-bootstrap-modal-on-only-specific-pages-using-php
										https://www.youtube.com/watch?v=Fw6VDOZYqrM

										</p>
									</div>
								</div>
								-->
						</div>
					</div>



					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dickensleungwebportfolio' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dickensleungwebportfolio' ) . '</span> <span class="nav-title">%title</span>',
						)
					);?>
					</article>
				</div><!--end wrapper-->
			</div><!--end work container-->
			<?php endif;?><!-- end get field function -->


		</section>

		<section id="page-end-footer">
			<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</section>
	</main><!-- #main -->

<?php
get_footer();
