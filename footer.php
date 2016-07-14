<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package harley
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="l-constrained">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'harley' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'harley' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'harley' ), 'harley', '<a href="http://eseosaaigbogun.com" rel="designer">Eseosa Aigbogun</a>' ); ?>
			</div><!-- .site-info -->
			
			<div class="l-connections">
				 <div class="site-connections">
					<h2 class="region__title">Site Connections</h2>
					<ul class="links links--inline clearfix">
						<li class="0 first"><a href="http://facebook.com/#" title="Facebook" class="icon icon-facebook">Facebook</a></li>
						<li class="1"><a href="http://twitter.com/#" title="Twitter" class="icon icon-twitter">Twitter</a></li>
						<li class="2"><a href="https://plus.google.com/+#" title="Google+" class="icon icon-gplus">Google+</a></li>
						<li class="3 last"><a href="/contact" title="Contact Us" class="icon icon-contact">Contact Us</a></li>
					</ul>  
				 </div><!-- .site-connections -->
			</div><!-- .l-connections -->
			
			<div class="l-copyright">
				<div class="copyright">&#169; Copyright 2016 <a href="http://www.conzultrix.com">Conzultrix</a>. All Rights Reserved</div>
			</div><!-- .l-copyright -->
		</div><!-- .l-constrained -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
