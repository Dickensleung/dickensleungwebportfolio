<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dickensleungwebportfolio
 */

?>
<div class="project-card-container">
	<h2 id="home-section-title">My Work</h2>
	<?php while(have_posts() ):the_post();
		$args = array(
			'post_type'      => 'dl-works',
			'posts_per_page' => -1,
			'orderby'		 => 'title',
			'order'			 => 'ASC',
		);
		$query = new WP_Query( $args);?>
		<?php if ( $query -> have_posts() ):
			while ($query-> have_posts()) : $query -> the_post();
				if(function_exists('get_field')):?>
					<div id="project-card-wrapper">
					<?php if ( get_field( 'project_title' ) ) :
							echo '<a id="project-link" href="' . esc_url( get_permalink() ) . '">';
							echo '<h3 id="project-title" data-controls="#' . esc_attr( get_the_title() ) . '">' . esc_attr( get_the_title() ) . '</h3>';
							echo '</a>';
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
					echo custom_taxonomies_terms_links();?>
					
					<?php 
					echo '<button class="choice-btn"><a href="';
						if(get_field('live_site_link')) :the_field('live_site_link');
						endif; 
					echo '"target="#">';
					echo 'Check it out live ⇛';
					echo '</a></button>';
					
					?>

				<?php endif; //end work post?>
				</div>
			<?php endwhile;//end project card container
		endif;//end project card container
	endwhile;
?>
</div>

