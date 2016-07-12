<?php
/**
 * The template for displaying a custom front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package harley
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="constrained">
			<main id="main" class="site-main l-main" role="main">
				
				<?php $query = new WP_Query( array( 'post_type' => 'edlynk_app', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
				<div class="app-teasers">	
					<div class="carousel">
						<ul class="inner app-list">
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							
								<?php get_template_part( 'template-parts/content', 'front' ); ?>
								
							<?php endwhile; ?>
						</ul>
					</div> <!-- .carousel -->
					<div class="arrow arrow-left"></div>
					<div class="arrow arrow-right"></div>
				</div><!-- .app-cover -->
				
	
			</main><!-- #main -->
		</div><!-- .constrained -->
	</div><!-- #primary -->

<?php get_footer(); ?>
