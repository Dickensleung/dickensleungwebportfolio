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
	<?php get_template_part('template-parts/content-nav');?>	
	<body class="cf">		
	<section class="content my-waypoint" id="scroll">
		<div id="leftcol" class="col-left">
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
					</div>
				</div>
			</div>
		</div>
		

		<div id="rightcol" class="col-right">
			<div class="project-card-container">
				<h2 id="home-section-title">My Work</h2>
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
									echo '<a href='.get_permalink().'>';
										echo '<h3 id="project-title">';
										the_field('project_title');
										echo '</h3>';
									echo'</a>';
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
									
									echo '<div id="bg-image" class="col-right-image">';
									the_post_thumbnail();
									echo '</div>';
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
		<?php get_footer();?>
	</section>
	</body>
	</main><!-- #main -->

<?php



