<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
	while ( have_posts() ) : the_post();

	if ( !function_exists('get_field')) return;
	
	?>

				<h2>
					<?php the_field('titre'); ?>
				</h2>

				<div class="row">
					<div class="col-6">

						<?php 

$image = get_field('image');
$size = 'large'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>
					</div>
					<div class="col-6">
						<p>
							<?php the_field('description'); ?>
						</p>
						<p>Technologies :
							<?php $terms = get_the_terms( $post->ID , 'technologie' ); 
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term, 'yourtaxonomyhere' );
                        if( is_wp_error( $term_link ) )
                        continue;
                    echo '<a class="technologies"" href="' . $term_link . '">' . $term->name . '</a>' . ',  ' ;
                    } 
                ?>
						</p>
						<a class="btn btn-dark" href="<?php the_field('lien'); ?>">Voir le projet</a>
					
					</div>
				</div>
				<?php
	 the_post_navigation(); 

		endwhile; // End of the loop.
		?>


		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->

	<?php
get_sidebar();
get_footer();
