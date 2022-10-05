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
		<?php get_template_part('template-parts/content-nav');?>	
		<section class="content" id="scroll">
			<!-- left col-->
			<div id="leftcol">
				<div class="description-content">
					<div class="description-header">
						<h1>Dickens Leung, </h1>
						<h2>I am a Front-End Developer</h2>
						<h2>working from beautiful Vancouver, BC.</h2>
					</div>

					<div class="about-me-wrapper" id="about-me-wrapper">
						<h2><u><a class="about-me-link" href="/about/">About me</a></u></h2>
					<?php if(function_exists('get_field')):?>
						<h2 id="project-second-link"><u class="about-me-link">My Works</u></h2>
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
										<a href="mailto:dickens.leung@outlook.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-inbox"></i></a>
									</li>
									<li>
										<?php if(get_field('second_social_link')):?>
										<a href="<?php the_field('second_social_link');endif;?>"><i class="fab fa-github"></i></a>
									</li>
									<li>
										<?php if(get_field('third_social_link')):?>
										<a href="<?php the_field('third_social_link');endif;?>"><i class="fab fa-linkedin-in"></i></a>
									</li>
								</ul>
							<?php endif?>
						</div><!-- End Social icons-->
					</div><!-- End About Me Wrapper-->
				</div><!-- End Description Content -->
			</div><!-- End Left col -->

			<div id="rightcol"  class="col-right">
				<?php while(have_posts() ):the_post();
					$args = array(
						'post_type'      => 'dl-works',
						'posts_per_page' => -1,
						'orderby'		 => 'title',
						'order'			 => 'DES',
					);
					$query = new WP_Query( $args);?>
					<!-- linking to single post '<a id="project-link" href="' . esc_url( get_permalink() ) . '">';-->
					<!-- LIVE SITE LINK '<a id="project-link" target="_blank" href="'; the_field('live_site_link');'">';-->
					<ul id="project-card-wrapper">
						<h3 class="project-sub-title">my works</h3>
						<?php if ( $query -> have_posts() ){
								while ( $query-> have_posts() ) {
									$query -> the_post();
									if ( function_exists( 'get_field' ) ) {
										echo '<li>';
										//echo '<a id="project-link" href="' . esc_url( get_permalink() ) . '">';
										echo '<a id="project-link" target="_blank" href="';
										echo the_field('live_site_link');
										echo '">';
										echo '<h3 id="project-title" data-controls="#' . esc_attr(strtolower(get_the_title()) ) . '">' . esc_attr( get_the_title() ) . '</h3>';
										echo '</a>';
										echo '</li>';
									}
								}
								wp_reset_postdata();
						}?>
					</ul><!--end project card wrapper -->

					<div class="featured-image">
						<img alt="default-img" class="default-img" src="<?php echo get_template_directory_uri();?>/images/default-img.png">
						<img alt="desination-hyrule" class="desination-hyrule" src="<?php echo get_template_directory_uri();?>/images/desination-hyrule.jpg">
						<img alt="cat-cafe" class="cat-cafe" src="<?php echo get_template_directory_uri();?>/images/cat-cafe.jpg">
						<img alt="movie-watch" class="movie-watch" src="<?php echo get_template_directory_uri();?>/images/movie-watch.jpg">
					</div>
				<?php  endwhile; ?><!--end of the page loop-->
			</div><!-- End rightcol-->
		</section><!-- end page content -->

	</main><!-- #main -->

<?php
get_footer();
