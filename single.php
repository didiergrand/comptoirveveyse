<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package Comptoir_de_la_Veveyse
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'post' );
			?>
			<div class="container">
			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Précédent:', 'comptoir-veveyse' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Suivant:', 'comptoir-veveyse' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			?>
			</div>
			<?php

		endwhile; // End of the loop.
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
