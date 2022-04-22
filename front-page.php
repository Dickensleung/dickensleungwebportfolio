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
						<h2>I am a Front-End Developer from beautiful Vancouver, BC.</h2>
					</div>

					<div class="about-me-wrapper" id="about-me-wrapper">
						<h2><u>About me</u></h2>
						<div class="about-content">
							<?php if(function_exists('get_field')): 
								if(get_field('about_me')):
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
								endif;?>	
							</div>
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
						'order'			 => 'ASC',
					);
					$query = new WP_Query( $args);?>
					<ul id="project-card-wrapper">
						<?php if ( $query -> have_posts() ){
							while ($query-> have_posts()) : $query -> the_post();
								if ( function_exists( 'get_field' )) :
									if ( get_field( 'project_title' ) ) {
									echo '<li>';
									echo '<a id="project-link" href="' . esc_url( get_permalink() ) . '">';
									echo '<h3 id="project-title" data-controls="#' . esc_attr(strtolower(get_the_title()) ) . '">' . esc_attr( get_the_title() ) . '</h3>';
									echo '</a>';
									echo '</li>';
									}
								
								endif;
							endwhile;
						}?>
					</ul>
				<?php endwhile; ?><!--end the loop--> 

				<div id="featured-image">
				
				</div>
				
			</div><!-- End rightcol-->
		</section><!-- end page content -->

	</main><!-- #main -->

<?php
get_footer();
