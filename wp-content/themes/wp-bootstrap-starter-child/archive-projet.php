<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2>Mes projets</h2>
			</header><!-- .page-header -->
			<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 
			?>
			<div class="col-sm-12 col-md-6 my-4 projet">
			<?php
			the_title( '<h3 class="entry-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
			<div>
				
			<?php 

				$image = get_field('image');
				$size = 'large'; // (thumbnail, medium, large, full or custom size)

				if( $image ) {

				echo wp_get_attachment_image( $image, $size );

				}

			?>
				</div>
			

			</div>

			<?php

			endwhile;

			the_posts_navigation(); ?>

			</div>
			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
