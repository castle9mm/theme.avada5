<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
					<?php do_action( 'avada_after_main_content' ); ?>

				</div>  <!-- fusion-row -->
			</main>  <!-- #main -->
			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

			<?php
			/**
			 * Only include the footer.
			 */
			?>
			<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
				<?php $footer_parallax_class = ( 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

				<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">
					<?php get_template_part( 'templates/footer-content' ); ?>
				</div> <!-- fusion-footer -->
			<?php endif; // End is not blank page check. ?>

			<?php
			/**
			 * Add sliding bar.
			 */
			?>
			<?php if ( Avada()->settings->get( 'slidingbar_widgets' ) && ! is_page_template( 'blank.php' ) ) : ?>
				<?php get_template_part( 'sliding_bar' ); ?>
			<?php endif; ?>
		</div> <!-- wrapper -->

		<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = ( $c_page_id ) ? get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) : 'default';
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
			</div> <!-- #boxed-wrapper -->
		<?php endif; ?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
			<div class="fusion-top-frame"></div>
			<div class="fusion-bottom-frame"></div>
			<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
				<div class="fusion-boxed-shadow"></div>
			<?php endif; ?>
		<?php endif; ?>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>
		


<footer id="footer-custom" class="fusion-footer-copyright-area<?php echo esc_attr($footer_copyright_center_class); ?>">
<div class="fusion-row">
<div class="fusion-copyright-content">
<?php
/*Custom Footer*/
?>
<div class="footer-bar">
<div class="EcclesLogo"><a href="http://eccles.utah.edu"><img width="300px" src="<?php echo get_stylesheet_directory_uri(); ?>/logos/eccles_logo_footer.png"></a></div>
<div class="shell clear">

<div class="row-one"><ul class="uni-links">
<li class="first"><a rel="nofollow" href="tel:18015817676">801-581-7676</a></li>
<li><a rel="nofollow" href="http://eccles.utah.edu/about/connect-with-us/">Contact</a></li>
<li><a rel="nofollow" href="http://eccles.utah.edu/directory">Eccles Directory</a></li>
<li><a rel="nofollow" href="http://eccles.link/help">IT Support</a></li>
<li><a rel="nofollow" href="http://intranet.eccles.utah.edu">Intranet</a></li>
<li><a rel="nofollow" href="http://eccles.utah.edu/alumni/invest/ways-to-give/">Give</a></li>

</ul></div>
<div class="row-two"><ul class="eccles-links">
<li class="first">Spencer Fox Eccles Business Building,  1655 East Campus Center Drive,  Salt Lake City, Utah  84112-8939</li>
</ul></div>
<div><ul class="uni-links" style="display: none !important">
<li class="first">© <a href="http://www.utah.edu">University of Utah</a></li>
<li><a href="http://www.utah.edu/a-z/">A - Z Index</a></li>
<li><a href="http://people.utah.edu/uWho/basic.hml">U of U Directory</a></li>
<li><a href="http://map.utah.edu/">Map</a></li>
<li><a href="http://www.utah.edu/disclaimer/index.php">Disclaimer</a></li>
<li><a href="http://www.utah.edu/privacy/">Privacy</a></li>
<li><a href="http://www.utah.edu/nondiscrimination/">Nondiscrimination</a></li>
</ul></div>
</div>

<div class="eccles-socials-wrapper">
<ul>
<li><a href="https://www.facebook.com/ubusiness" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span></a></li>
<li><a href="https://twitter.com/UBusiness" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span></a></li>
<li><a href="https://www.instagram.com/ubusiness/" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
</span></a></li>
<li><a href="https://www.linkedin.com/edu/school?id=19557" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
</span></a></li>
<li><a href="http://is.gd/ecclesgplus" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
</span></a></li>
<li><a href="https://www.youtube.com/user/davidecclesbusiness" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
</span></a></li>
</ul>
</div>

</div>



</div> <!-- fusion-fusion-copyright-content -->
</div> <!-- fusion-row -->
</footer> <!-- #footer -->


<div id="footer-container" class="clearfix">
<footer class="wrapper clearfix">

<div class="top-container" style="">
	<div style="width:24%"></div>
	<nav id="bottom-nav" role="navigation">
	<ul class="menu">
	<li>
	<h3><a href="https://www.utah.edu/nondiscrimination/" target="_blank" >Nondiscrimination &amp; Accessibility</a></h3>
	
	</li>
	<li>
	<h3><a href="https://www.utah.edu/disclaimer/" target="_blank" >Disclaimer</a></h3>
	
	</li>
	<li><h3><a rel="nofollow" href="http://cis.utah.edu" target="_blank" >CIS</a></h3></li>
<li><h3><a rel="nofollow" href="http://www.umail.utah.edu/a-z/" target="_blank" >UMail</a></h3></h3></li>
	<li>
	<h3><a href="https://www.utah.edu/a-z/" target="_blank" >A-Z Index</a></h3>
	
	</li>
	<li>
	<h3><a href="https://www.utah.edu/contact/" target="_blank" >Contact - Feedback</a></h3>
	
	</li>
	</ul>
	</nav>
	<section class="brand-area ">
	
	<div class="bottom-brand">
	<div class="spacer"><a href="http://www.utah.edu/" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/logos/imagine_u.png" alt="Imagine U: The University of Utah"></a>
	</div>
	</div>
	
	</section>
</div>
	<section class="address">
	<div class="spacer">
	<p><a href="/">The University of Utah</a></p>
	<p>201 Presidents Circle Salt Lake City, UT 84112 </p>
	<p>801-581-7200 </p>
	<p><small>© 2017 The University of Utah</small></p>
	
	</div>
	</section>

</footer>
</div>
<!-- fusion-footer -->
</div> <!-- wrapper -->


<?php wp_footer(); ?>

<?php
/**
 * Echo the scripts added to the "before </body>" field in Theme Options.
 * The 'space_body' setting is not sanitized.
 * In order to be able to take advantage of this,
 * a user would have to gain access to the database
 * in which case this is the least on your worries.
 */

 //We commented this on May 3rd 2018 because it was showing double in the footer - It looks like avada changed that function 
 //echo Avada() -> settings -> get('space_body');
// WPCS: XSS ok.
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1312186-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-1312186-9');
  
</script>

</body>
</html>
