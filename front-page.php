<?php
/**
 * The template for displaying all pages
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
		<?php get_template_part('template-parts/content-nav');?>
				
		<section class="content" id="scroll">
			<div id="rightcol"  class="col-right tracking-section">
				<?php while(have_posts() ):the_post();
					$args = array(
						'post_type'      => 'dl-works',
						'posts_per_page' => -1,
						'orderby'		 => 'title',
						'order'			 => 'DES',
					);
					$query = new WP_Query( $args);?>
					
					<ul id="project-card-wrapper">
						<?php if ( $query -> have_posts() ){
								while ( $query-> have_posts() ) {
									$query -> the_post();
									if ( function_exists( 'get_field' ) ) {
										echo '<li>';
										echo '<div class="projectContainer">';
										echo '<a id="project-link" href="' . esc_url( get_permalink() ) . '">';
										echo '<h3 id="project-title" data-controls="#' . esc_attr(strtolower(get_the_title()) ) . '">' . esc_attr( get_the_title() ) . '</h3>';
										echo '</a>';
										echo '</div>';
										echo '</li>';
									}

								}
								wp_reset_postdata();
						}?>
					</ul><!--end project card wrapper -->

					<div class="featured-image">
						<img alt="desination-hyrule" class="desination-hyrule" src="<?php echo get_template_directory_uri();?>/images/desination-hyrule.png">
						<img alt="cat-cafe" class="cat-cafe" src="<?php echo get_template_directory_uri();?>/images/cat-cafe.png">
						<img alt="movie-watch" class="movie-watch" src="<?php echo get_template_directory_uri();?>/images/movie-watch.png">
					</div>
				<?php  endwhile; ?><!--end of the page loop-->
			</div><!-- End rightcol-->

			<!-- left col-->
			<div id="leftcol" class="tracking-section">
				<div class="description-content">
					<div class="description-header">
						<p>Dickens Leung</p>

						<div class="intro-wrapper">
							<h2>Hello<span>.</span>
								<div class="mtracking">
									<div class="t-body">
										<div class="t-eye"></div>
									</div>
								</div></h2>
							<h2>|| Front-End Developer</h2>
							<h2>|| Vancouver, BC.</h2>
							<br/>
						</div>
						<h2 class="get-in-touch">Get in touch with me via email or my socials!</h2>


					</div>

					<div class="about-me-wrapper" id="about-me-wrapper">
						<h2 class="about-me-link"><a href="/about/" alt="about me internal link">About me</a></h2>
						<h2 class="about-mobile"><a href="/works/" alt="projects internal link">Work</a></h2>
						<?php if(function_exists('get_field')):?>
						<div class="about-content">
							<?php if(get_field('about_me')):
									echo '<p class="body-content-row">';
									the_field('about_me');
									echo '</p>';
								endif;
							?>

							<div class="description-small">
								<?php
									if(get_field('about_me_two')):
										echo '<p class="body-content-column">';
										the_field('about_me_two');
										echo '</p>';
									endif;
								?>
								<?php
									if(get_field('about_me_three')):
										echo '<p class="body-content-column">';
										the_field('about_me_three');
										echo '</p>';
									endif;
								?>	
							</div>
							<?php endif;?><!--end about me loop-->
						</div>
						<div id="social-icons">
							<?php if(function_exists('get_field')):?>
								<ul>
									<li>	
										<a href="mailto:dickens.leung@outlook.com" target="_blank" rel="noopener noreferrer">
											<svg  class="socialiconssvg social-inbox"xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M121 32C91.6 32 66 52 58.9 80.5L1.9 308.4C.6 313.5 0 318.7 0 323.9V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V323.9c0-5.2-.6-10.4-1.9-15.5l-57-227.9C446 52 420.4 32 391 32H121zm0 64H391l48 192H387.8c-12.1 0-23.2 6.8-28.6 17.7l-14.3 28.6c-5.4 10.8-16.5 17.7-28.6 17.7H195.8c-12.1 0-23.2-6.8-28.6-17.7l-14.3-28.6c-5.4-10.8-16.5-17.7-28.6-17.7H73L121 96z"/></svg>
										</a>
									</li>
									<li>

										<a href="<?php if(get_field('second_social_link')):the_field('second_social_link');endif;?>" target="_blank" rel="noopener noreferrer">
											<svg class="socialiconssvg social-github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
												<path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="<?php if(get_field('third_social_link')):the_field('third_social_link');endif;?>" target="_blank" rel="noopener noreferrer">
											<svg class="socialiconssvg social-linkedin"xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
										</a>
									</li>
								</ul>
							<?php endif?>
						</div><!-- End Social icons-->
					</div><!-- End About Me Wrapper-->
				</div><!-- End Description Content -->
			</div><!-- End Left col -->
			<?php get_template_part('template-parts/content-page-footer');?>
		</section><!-- end page content -->
	</main><!-- #main -->

<?php
get_footer();
