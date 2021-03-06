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

	<footer id="colophon" class="site-footer l-footer" role="contentinfo">
		<div class="l-constrained">
			<div class="l-connections">
				 <div class="site-connections">
					<h2 class="region__title">Site Connections</h2>
					<ul class="links links--inline clearfix">
						<li class="0 first"><a href="http://facebook.com/#" title="Facebook" class="icon icon-facebook">Facebook</a></li>
						<li class="1"><a href="http://twitter.com/edlynkapps" title="Twitter" class="icon icon-twitter">Twitter</a></li>
						<li class="2"><a href="https://plus.google.com/+#" title="Google+" class="icon icon-gplus">Google+</a></li>
						<li class="3 last"><a href="/contact" title="Contact Us" class="icon icon-contact">Contact Us</a></li>
					</ul>  
				 </div><!-- .site-connections -->
			</div><!-- .l-connections -->
			
			<div class="l-copyright">
				<div class="copyright">&#169; Copyright <?php echo date('Y'); ?> <a href="http://www.conzultrix.com">Conzultrix</a>. All Rights Reserved</div>
			</div><!-- .l-copyright -->
		</div><!-- .l-constrained -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
