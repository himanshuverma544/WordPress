<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
 <div class="container">
        <div class="row">

          <div class="col-xs-6 col-md-2">
		  <div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php endif; ?>
			</div><!-- .site-name -->
          </div>

          <div class="col-xs-6 col-md-2">
            <ul class="footer-links">
              <li><a href="http://localhost/wordpress/home/">Home</a></li>
              <li><a href="#">Practice Areas</a></li>
              <li><a href="#">Attorneys</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-2">
            <ul class="footer-links">
			<li><a href="#">Insights</a></li>
			<li><a href="#">News & Events</a></li>
			<li><a href="#">About SDM</a></li>
            </ul>
          </div>

		  <div class="col-xs-6 col-md-2">
            <ul class="footer-links">
			<li><a href=" http://localhost/wordpress/contact-us/">Contact Us</a></li>
			<li><a href="#">Disclaimer</a></li>
            <li class="social-icons">
		    	<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
	    	</li>           
          </div>

          <div class="col-xs-6 col-md-3">
            <ul class="footer-links">
			<li>303 Colorado Street, Suite 2400<br>Austin, TX 78701</li>
			<li>P | (512) 495-6300</li>
			<li>P | (512) 495-6399</li>
            </ul>
          </div>
        </div>
   </div>
   <hr>
   <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <p class="copyright-text">&copy;<?php echo date('Y');?> Scott Douglass & McConnico LLP, Austin, Texas - All Rights Reserved</p>
        </div>
	</div>


	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
