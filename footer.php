<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package natm-v1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-wrap">
			<div class="footer-top">
				<div class="footer-search">
					<?php get_search_form(); ?>
				</div>
				<div class="footer-nav">
					<ul class="text-uppercase">
						<li><a href="<?php echo get_site_url() ?>/sponsors">Become a Sponsor</a></li>
						<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc1KxwCzi5XnZLXdB1y7doDEq7YWCN86HfcuO1ykTsMYwCMWA/viewform">Vendor Application</a></li>
						<li><a href="<?php echo get_site_url() ?>/contact">Contact Us</a></li>
					</ul>
				</div>
				<div class="footer-social">
					<h5 class="mt-0">
						Connect with us
					</h5>
					<ul>
						<li><a href="https://www.instagram.com/northashevilletailgatemarket/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/instagram-icon.svg" alt="Instagram"></a></li>
						<li><a href="https://www.facebook.com/North-Asheville-Tailgate-Market-365664308791/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/facebook-icon.svg" alt="Facebook"></a></li>
						<li><a href="<?php echo get_site_url() ?>/contact"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/email-icon.svg" alt="Email"></a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-info">
					<p class="m-0">
						<?php echo date('Y'); ?> Copyright North Asheville Tailgate Market, All Rights Reserved.
					</p>
					<p class="m-0">
						Website Design by <a href="https://longlivesimple.com">Long Live Simple.</a>
					</p>
				</div>
				<div class="footer-vendor">
					<a href="<?php echo get_site_url() ?>/wp-admin">Vendor Login</a>
				</div>
			</div>
		</div>
		<div class="footer-back-top">
			<button class="back-top-button">Back To Top</button>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
