<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package harley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="l-constrained">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="app-caption"><?php the_field( 'app_caption' ); ?> </div>
		</div> <!-- l-constrained -->
		<div class="app-banner-image"><?php echo harley_edlynk_app_image('app_banner'); ?></div>

		<div class="entry-meta">
			<?php //harley_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="app-summary"><?php the_field('app_summary'); ?></div>
		<div class="key-features">
			<h2>Why is it awesome?</h2>
			<?php the_field('key_features'); ?>
		</div><!-- key-features -->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'harley' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php harley_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

