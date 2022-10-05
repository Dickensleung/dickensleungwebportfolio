<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * https://codepen.io/krishandeep/pen/oNoXMwE
 * @package dickensleungwebportfolio
 */
?>

<header>
	<div class="overlay overlay-slide-up" id="overlay">
		<!-- MENU OVERLAY -->
		<nav>
			<!-- MENU ITEMS -->
			<ul>
				<li id="nav-1" class="slide-out-1 center">
					<a href="/">Home</a>
				</li>

				<li id="nav-2" class="slide-out-2 center">
					<a href="/about/">About</a>
				</li>

				<li id="nav-3" class="slide-out-3 center">
					<a href="mailto:dickens.leung@outlook.com" target="_blank" rel="noopener noreferrer">Contact</a>
				</li>
				
				<?php if(!is_archive()):?>
					<li id="nav-4" class="slide-out-4 center">
						<div class="project-nav-header">
							<h4><u>Featured Works</u></h4>
						</div>	

						<section id="project-nav-content">
							<?php	while(have_posts() ):the_post();
								$args = array(
									'post_type'      => 'dl-works',
									'posts_per_page' => -1,
									'orderby'		 => 'title',
									'order'			 => 'ASC',
								);
									$query = new WP_Query( $args);
									
									if ( $query -> have_posts() ){
										while ( $query-> have_posts() ) {
											$query -> the_post();
											if ( function_exists( 'get_field' ) ) {
												echo '<div>';
												echo '<a target="_blank" href="'; 
												echo the_field('live_site_link');
												echo '">';
												echo '<h4>' . esc_attr( get_the_title() ) . '</h4>';
												echo '</a>';
												echo '</div>';
											}
										}
										wp_reset_postdata();
									}
								endwhile;?>
						</section>
					</li>
				<?php endif;?> <!--end conditional nav -->
				
				<div class="footer-content">
					<p class="footer-content-text">Building Projects with:</p>
					<div class="tools-icon">
						<i class="fab fa-html5" alt="icon html5"></i>
						<i class="fab fa-css3-alt" alt="icon css3"></i>
						<i class="fab fa-sass" alt="icon sass"></i>			
						<i class="fab fa-js" alt="icon javascript"></i>
						<i class="fab fa-php" alt="icon php"></i>
						<i class="fab fa-react" alt="icon react reactjs"></i>
				</div>

				

			</ul>
		</nav>
	</div>
	<!-- HAMBURGER MENU -->
	<div class="hamburger-menu" id="hamburger-menu">
		<div class="menu-bar1 menu-bar"></div>
		<div class="menu-bar2 menu-bar"></div>
		<div class="menu-bar3 menu-bar"></div>
	</div>
	<!-- LOGO  -->
	<div class="user-logo" id="user-logo">
		<a href="/">dl.</a>
	</div>

</header>
<?php