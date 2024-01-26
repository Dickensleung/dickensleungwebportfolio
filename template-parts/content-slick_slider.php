<?php
/**
 * Template Name: show All Posts in slick Slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dickensleungwebportfolio
 */
?>


<div class="wp-block-group-slider">
	<div class="slider-container">
		<?php if(function_exists('get_field')):
			$args_array = array(
				'post_type'      => 'dl-works',
				'posts_per_page' => -1,
				'post_status'	 => 'publish',
				'orderby'		 => 'title',
				'order'			 => 'DESC',
			);
			$query = new WP_Query($args_array);?>

		<?php echo '<div class="custom-slider">';
			if($query -> have_posts()){
				$imageone = get_field( 'slick_image_one' );
				$imagetwo = get_field( 'slick_image_two' );
				$imagethree = get_field( 'slick_image_three' );
				$imagefour = get_field( 'slick_image_four' );
				$size = 'full';
				
				while ( $query->have_posts() ) : $query->the_post();
					echo '<div id="post_wrapper">';
						if($imageone){
							echo wp_get_attachment_image( $imageone, $size );
						}
					echo '</div>';

					echo '<div id="post_wrapper">';
					if($imagetwo){
						echo wp_get_attachment_image( $imagetwo, $size );
					}
					echo '</div>';

					echo '<div id="post_wrapper">';
					if($imagethree){
						echo wp_get_attachment_image( $imagethree, $size );
					}
					echo '</div>';

					echo '<div id="post_wrapper">';
					if($imagefour){
						echo wp_get_attachment_image( $imagefour, $size );
					}
					echo '</div>';
				endwhile;			
			wp_reset_postdata();
			}

		endif;		
		echo '</div>'?>
	
	</div><!-- end slider container -->
</div>
<?php
get_footer();