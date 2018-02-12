<?php
/*
Template Name: cv
*/
?>

<?php
get_header(); ?>

	<section id="primary" class="content-area col-12">
		<main id="main" class="site-main" role="main">
			
			<div style="width: 100%" class="d-flex justify-content-center">
				<div class="mx-auto">
				<?php 

					$image = get_field('photo');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {

						echo wp_get_attachment_image( $image, $size, "", ["class" => "rounded-circle"] );

					}

				?>
				</div>
			</div>

		<h2 class="text-center my-5">Compétences</h2>
		<div style="widht: 100%" class="row">
			<div class="col-12 col-md-6 col-lg-4 col">
				<div class="row">
				<?php 

					$image = get_field('picto1');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size, "", ["class" => "col-6"] );
					}
				?>
				<p class="align-middle"><?php the_field('competence1'); ?></p>
				</div>
				<div class="row">
				<?php 

					$image = get_field('picto2');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size, "", ["class" => "col-6"] );
					}
				?>
				<p class="align-middle"><?php the_field('competence2'); ?></p>
				</div>
	
			</div>
			<div class="col-12 col-md-6 col-lg-4 col">
				<div class="row">
				<?php 

					$image = get_field('picto3');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size, "", ["class" => "col-6"] );
					}
				?>
				<p class="align-middle"><?php the_field('competence3'); ?></p>
				</div>
				<div class="row">
				<?php 

					$image = get_field('picto4');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size, "", ["class" => "col-6"] );
					}
				?>
				<p class="align-middle"><?php the_field('competence4'); ?></p>
				</div>
	
			</div>
			<div class="col-12 col-md-6 col-lg-4 col">
				<div class="row">
				<?php 

					$image = get_field('picto5');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size, "", ["class" => "col-6"] );
					}
				?>
				<p class="align-middle"><?php the_field('competence5'); ?></p>
				</div>
			</div>
		
		
		
		</div>
		<h2 class="text-center my-5">Formations</h2>

		<div>
			<?php the_field('formations'); ?>
		</div>

		<h2 class="text-center my-5">Expériences</h2>

		<div>
			<?php the_field('experiences'); ?>
		</div>











		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();