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
		<hgroup>
			<div class="l-constrained">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<h2 class="app-caption"><?php the_field( 'app_caption' ); ?> </h2>
			</div> <!-- l-constrained -->
		</hgroup>
			<div class="entry-meta">
				<?php //harley_posted_on(); ?>
			</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="app-banner-image"><?php echo harley_edlynk_app_image('app_banner'); ?></div>
		<div class="l-constrained">
			<div class="l-region-summary">
				<div class="l-gutter-summary"></div>
				<div class="app-summary l-app-summary"><?php the_field('app_summary'); ?></div>
			</div><!-- .l-region-summary -->
			<div class="key-features l-app-features">
				<h2>Why is it awesome?</h2>
				<?php the_field('key_features'); ?>
			</div><!-- key-features -->
			<div class="app-details l-app-details"><?php the_content(); ?></div>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'harley' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .l-constrained -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="l-constrained">
			<?php harley_entry_footer(); ?>
		</div><!-- .l-constrained -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

