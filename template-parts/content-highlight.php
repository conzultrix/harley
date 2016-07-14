<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package harley
 */

?>

<li>
	<aside id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header><!-- .entry-header -->
	
		<div class="entry-content">
			<div class="highlight-image">
				<a href="<?php echo esc_url(get_post_permalink()); ?>">
					<?php echo harley_edlynk_app_image('highlight_image'); ?>
				</a>
			</div><!-- .highlight_image -->
			<?php the_content(); ?>
			
		</div><!-- .entry-content -->
	
		<footer class="entry-footer">
			<?php harley_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</aside><!-- #post-## -->
</li>

