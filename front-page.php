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
		<main id="main" class="site-main l-main" role="main">
			
			<?php $query = new WP_Query( array( 'post_type' => 'edlynk_app', 'orderby' => 'data', 'order' => 'ASC' ) ); ?>
			<?php //print_r($query); ?>
			<?php echo $query->have_posts(); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_field('app_caption'); ?>
				<?php echo get_post_permalink() ?>
				<div class="app-image"><?php echo harley_edlynk_app_image('app_image'); ?></div>
			<?php endwhile; ?>

		<?php while ( have_posts() ) : the_post(); ?>
				
			<?php //get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php //the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
