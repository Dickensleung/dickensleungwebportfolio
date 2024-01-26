<?php
/**
 * The template for displaying archive pages
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
		<section class="error-not-found">
			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
				<p>This is a showcase of my work in a variety of fields including copywriting, development & web design.</p> 
			<p>The world of digital design and developer is contantly evolving and so has my role. I'm still learning and gaining new skills every day.</p>
			</header><!-- .page-header -->
			<div class="work-wrapper">
			<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>

			<?php get_template_part('template-parts/content-page-footer');?>
		</section>

	</main><!-- #main -->

<?php
get_footer();
