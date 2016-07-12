<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package harley
 */

?>

<li class="slide">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<div class="app-caption">
				<?php the_field('app_caption'); ?>
			</div>
			
			<div class="cta">
				<a href="<?php echo esc_url(get_post_permalink()); ?>" class="btn btn-learn_more">Learn More</a>
			</div>
			<div class="app-image">
				<a href="<?php echo esc_url(get_post_permalink()); ?>">
					<?php echo harley_edlynk_app_image('app_image'); ?>
				</a>
			</div><!-- .app_image -->
			
		</div><!-- .entry-content -->
	
		<footer class="entry-footer">
			<?php harley_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</li>

