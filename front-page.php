<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dickensleungportfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<body class="cf">
			<?php get_template_part('template-parts/content-nav');?>			
			<section class="content my-waypoint" id="scroll">			
				<div id="leftcol" class="col-left">
				<div id="social-icons">
					<ul>
						<li>	
							<i class="fas fa-inbox"><a href="mailto:dickens.leung@outlook.com" target="_blank" rel="noopener noreferrer"></a></i>
						</li>
						<li>
							<i class="fab fa-github"><a href="https://github.com/Dickensleung"></a></i>
						</li>
						<li>
							<i class="fab fa-linkedin-in"><a href="https://www.linkedin.com/in/dickensleung/"></a></i>
						</li>
					</ul>
					<span class="trailing-line"></span>
				</div>
				<div class="landing-page">
					<div class="waveWrapper waveAnimation">
						<div class="waveWrapperInner bgTop">
							<div class="wave waveTop"></div>
						</div>
							
						<div class="waveWrapperInner bgMiddle">
							<div class="wave waveMiddle"></div>
						</div>
							
						<div class="waveWrapperInner bgBottom">
							<div class="wave waveBottom"></div>
						</div>
					</div>

					<div class="waveMargin"></div>
				</div>
					
					<div class="description-content">
						<div class="description-header">
							<h2>I am </h2>
							<h1>Dickens Leung, </h1>
							<h2>a Front-End Developer.</h2>
						</div>
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

						
						<p><a href="mailto:dickens.leung@outlook.com" target="_blank" rel="noopener noreferrer"><u>Send</u></a> me a quick message here!</p>
						<div class="footer-content">
							<p class="footer-content-text">Building Projects with:</p>
							<div class="tools-icon">
								<i class="fab fa-html5"></i>
								<i class="fab fa-css3-alt"></i>
								<i class="fab fa-sass"></i>			
								<i class="fab fa-js"></i>
								<i class="fab fa-php"></i>
								<i class="fab fa-react"></i>
							</div>
						</div>
						
					</div>
				</div>
				<div id="rightcol" class="col-right">
					<h2 id="home-section-title">Projects</h2>
					
					<div class="project-card-container">
						<?php while(have_posts() ):the_post();?>
							<?php 
								$args = array(
									'post_type'      => 'dl-works',
									'posts_per_page' => -1,
									'orderby'		 => 'title',
									'order'			 => 'ASC',
								);
								$query = new WP_Query( $args);
								
								

								if ( $query -> have_posts() ):
									while ($query-> have_posts()) : $query -> the_post();
										if(function_exists('get_field')):?>

										<div id="project-card-wrapper">	
											<?php if(get_field('project_title')):
												echo '<h3 id="project-title">';
												the_field('project_title');
												echo '</h3>';	
											endif;

											if(get_field('project_sub_title')):
												echo '<h4>';
												the_field('project_sub_title');
												echo '</h4>';
											endif;

											if(get_field('project_description')):
												echo '<p>';
												the_field('project_description');
												echo '</p>';
											endif;

											if(get_field('project_description_two')):
												echo '<div class="project-tools">';
													echo '<p>';
													the_field('project_description_two');
													echo '</p>';?>
												<?php echo '</div>';
											endif;
											//displaying custom taxonoies according to custom post from function.php
											echo custom_taxonomies_terms_links();
											
											endif;

											echo '<button class="choice-btn"><a href="';
											if(get_field('live_site_link')) :the_field('live_site_link');
											endif;
											echo '"target="#">';
											echo 'Check it out live ⇛';
											echo '</a></button>';?>
										</div>
									<?php endwhile;
								endif;
							?>
						<?php endwhile;?>
						
					</div>
					

			
				</div>
			</section>
		</body>
	</main><!-- #main -->

<?php
get_footer();

