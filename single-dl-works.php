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
		<?php get_template_part('template-parts/content-loading');?>	
		<?php get_template_part('template-parts/content-nav');?>	

		<section>
		<?php if(function_exists('get_field')):?>
			<div class="single-work-container">
				<div id="single-work-wrapper">
					<div class="single-hero-header">
						<h1><?php the_title(); ?></h1>
						<h2>Role: <?php if(get_field('project_role')):the_field('project_role');endif; ?></h2>
					</div>
					<div id="block-underline-mobile"></div>
					
					<div class="single-layout">
						<div id="single-col-left">
							<div class="hero-description">
								<h2><?php if(get_field('project_description')):the_field('project_description');endif;?></h2>
								
								<div class="hero-bgm">
									<img alt="default-img" class="default-img-imac" src="<?php echo get_template_directory_uri();?>/images/imac_green_bgm.png">
									<?php get_template_part('template-parts/content-slick_slider');?>
								</div>
							</div>

							<p><?php if(get_field('project_description_two')):the_field('project_description_two');endif;?></p>														
						
							<?php
								//article titles scroll to # markup 
								$processfieldsubtitleone = get_field('process_sub_title_one');
								$processfieldsubtitletwo = get_field('process_sub_title_two');
								$processfieldsubtitlethree = get_field('process_sub_title_three');
								$processfieldsubtitlefour = get_field('process_sub_title_four');
								$processfieldsubtitlefive = get_field('process_sub_title_five');

								//article titles to display markup
								$processslugone = get_field('process_field_slug_one');
								$processslugtwo = get_field('process_field_slug_two');
								$processslugthree = get_field('process_field_slug_three');
								$processslugfour = get_field('process_field_slug_four');
								$processslugfive = get_field('process_field_slug_five');


								if($processslugone && isset($processslugone)):?>
									<div id="design-processes-mobile"><!-- MOBILE VIEW -->
										<h2> design process <h2>
										
										<div class="process-block">
										<?php if($processslugone ):?>
											<a href="#<?php the_field('process_field_slug_one');?>"><?php echo $processfieldsubtitleone; endif?></a>
										</div>

										<div class="process-block">
										<?php if($processslugtwo):?>
											<a href="#<?php the_field('process_field_slug_two');?>"><?php echo  $processfieldsubtitletwo; endif?></a>
										</div>
										<div class="process-block">
										<?php if($processslugthree):?>
											<a href="#<?php the_field('process_field_slug_three');?>"><?php echo $processfieldsubtitlethree; endif?></a>
										</div>
										<div class="process-block">
										<?php if($processslugfour):?>
											<a href="#<?php the_field('process_field_slug_four');?>"><?php echo  $processfieldsubtitlefour; endif?></a>
										</div>
										<div class="process-block">
										<?php if($processslugfive):?>
											<a href="#<?php the_field('process_field_slug_five');?>"><?php echo  $processfieldsubtitlefive; endif?></a>
										</div>
									</div>
							<?php endif; ?>
													
						</div><!-- end single-col-left-->

						<div id="single-col-right">
							<h1 class="single-desktop-title"><?php the_title(); ?></h1>
							<h2 class="single-desktop-subtitle">Role: <?php if(get_field('project_role')):the_field('project_role');endif; ?></h2>
							<div id="block-underline-desktop"></div>
							<h2 class="col-right-subtitle"><?php if(get_field('project_description')):the_field('project_description');endif;?></h2>
							
							<div class="flex-row">
								<li><?php if(get_field('live_site_link')):
									echo '<a target="_blank" id="live-site-link" href="';
									echo the_field('live_site_link');
									echo '">';
									echo 'View Live Site';
									echo '</a>'; endif?>
								</li>
								<li class="social-mail"><?php if(get_field('live_site_link')):
									echo '<a target="_blank" rel="noopener noreferrer" id="site-email" href="mailto:dickens.leung@outlook.com"';
									echo '">';
									echo 'Get in Touch';
									echo '</a>'; endif?>
								</li>


							</div>

							<?php if($processslugone && isset($processslugone)):?>
								<div id="design-processes-desktop"><!-- DESKTOP VIEW -->
									<h2> design process <h2>
									<div class="process-block">
										<?php if($processslugone ):?>
										<a href="#<?php the_field('process_field_slug_one');?>"><?php echo $processfieldsubtitleone; endif?></a>
									</div>

									<div class="process-block">
										<?php if($processslugtwo):?>
										<a href="#<?php the_field('process_field_slug_two');?>"><?php echo  $processfieldsubtitletwo; endif?></a>
									</div>
									<div class="process-block">
										<?php if($processslugthree):?>
										<a href="#<?php the_field('process_field_slug_three');?>"><?php echo $processfieldsubtitlethree; endif?></a>
									</div>
									<div class="process-block">
										<?php if($processslugfour):?>
										<a href="#<?php the_field('process_field_slug_four');?>"><?php echo  $processfieldsubtitlefour; endif?></a>
									</div>
									<div class="process-block">
										<?php if($processslugfive):?>
										<a href="#<?php the_field('process_field_slug_five');?>"><?php echo  $processfieldsubtitlefive; endif?></a>
									</div>
										</div>
							<?php endif; ?>

							<div class="single-tools-wrapper">
								<?php echo custom_taxonomies_terms_links();?>
							</div>
						</div>
					</div>
					
					<!-- this section will only show if process sub title is filled / not an empty field -->
					<?php if($processslugone && isset($processslugone)):?> 
						<section class="single-project-writeup-container">
							<div class="single-project-article-layout-one">
								<!-- Process 1 - Research & Wireframe
									https://help.figma.com/hc/en-us/articles/1500002613622-P2-and-Figma#:~:text=There%20are%20two%20ways%20to,link%20into%20the%20URL%20field.
								-->

								<?php if($processslugone):?>
									<h1 id="<?php the_field('process_field_slug_one');?>"><?php echo the_field('process_sub_title_one'); endif?></h1>

								<?php if(get_field('process_field_description_one')):?>
									<p><?php the_field('process_field_description_one'); endif?></p>
							</div>

							<div class="single-project-article-layout-one">
								<!-- Process 2 - Content List , what features to include -->							
								<?php if($processslugtwo):?>
									<h1 id="<?php the_field('process_field_slug_two');?>"><?php echo the_field('process_sub_title_two'); endif?></h1>

								<?php if(get_field('process_field_description_two')):?>
									<p><?php the_field('process_field_description_two'); endif?></p>
							
							</div>

							<div class="single-project-article-layout-one">
								<!-- Process 3 - information Architecture 
							custom field WYSIWYG
							-->	
								<?php 
								$wireframe = get_field('process_field_description_three');

								if($wireframe && isset($wireframe)):?>
									<h1 id="<?php the_field('process_field_slug_three'); ?>"><?php echo the_field('process_sub_title_three'); ?></h1>
									<p><? echo the_field('process_field_description_three'); ?></p>
								<?php endif ?>

							</div>
							
							<div class="single-project-article-layout-one">
								<!-- Process 4 - Custome Code Development 
									custom field WYSIWYG
							--> 
								<?php if($processslugfour):?>
									<h1 id="<?php the_field('process_field_slug_four');?>"><?php echo the_field('process_sub_title_four');?></h1>

									<?php if(get_field('process_field_description_four')): ?>
										<p><?php the_field('process_field_description_four');?></p>
									<?php endif; ?>

								<?php endif; ?>
							</div>
							<?php get_template_part('template-parts/content-custom-code-codepen');?>
								<!--<p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="LYgxZmq" data-user="Dickensleung" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
								<span>See the Pen <a href="https://codepen.io/Dickensleung/pen/LYgxZmq">
								Untitled</a> by DL (<a href="https://codepen.io/Dickensleung">@Dickensleung</a>)
								on <a href="https://codepen.io">CodePen</a>.</span>
								</p>
								<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>-->

							<div class="single-project-article-layout-one">
								<!-- Process 5 - Optimization, future development & Accessibility features 
									custom field WYSIWYG-->
								<?php if(get_field('process_field_slug_five')): ?>
									<h1 id="<?php the_field('process_field_slug_five');?>"><?php echo the_field('process_sub_title_five'); endif?></h1>
								
								<?php if(get_field('process_field_description_five')):?>
									<p><?php the_field('process_field_description_five'); endif?></p>
							</div>

						</section>
					<?php endif; ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_post_navigation(
							array(
								'prev_text' => '<span>' . esc_html__( 'Prev:', 'dickensleungwebportfolio' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span>' . esc_html__( 'Next:', 'dickensleungwebportfolio' ) . '</span> <span class="nav-title">%title</span>',
							)
						);?>
					</article>
				</div><!--end wrapper-->
			</div><!--end work container-->
			
			<?php endif;?><!-- end get field function -->
			<?php get_template_part('template-parts/content-page-footer');?>
		</section>
	</main><!-- #main -->

<?php
get_footer();
