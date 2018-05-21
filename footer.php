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
<?php do_action('avada_after_main_content'); ?>

</div>  <!-- fusion-row -->
</main> <!-- #main -->
<?php do_action('avada_after_main_container'); ?>

<?php
	global $social_icons;
 ?>

<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?>
</div>
<?php endif; ?>

<?php
/**
 * Get the correct page ID.
 */
$c_page_id =  Avada() -> fusion_library -> get_page_id();
?>

<?php
/**
 * Only include the footer.
 */
?>
<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
<?php $footer_parallax_class = ('footer_parallax_effect' ==  Avada() -> settings -> get('footer_special_effects')) ? ' fusion-footer-parallax' : ''; ?>

<div class="fusion-footer<?php echo esc_attr($footer_parallax_class); ?>">

<?php
/**
 * Check if the footer widget area should be displayed.
 */
$display_footer = get_post_meta($c_page_id, 'pyre_display_footer', true);
?>
<?php if ( ( Avada()->settings->get( 'footer_widgets' ) && 'no' !== $display_footer ) || ( ! Avada()->settings->get( 'footer_widgets' ) && 'yes' === $display_footer ) ) : ?>
<?php $footer_widget_area_center_class = ( Avada() -> settings -> get('footer_widgets_center_content')) ? ' fusion-footer-widget-area-center' : ''; ?>

<footer role="contentinfo" style="display: none" class="fusion-footer-widget-area fusion-widget-area<?php echo esc_attr($footer_widget_area_center_class); ?>">
<div class="fusion-row">
<div class="fusion-columns fusion-columns-<?php echo esc_attr( Avada() -> settings -> get('footer_widgets_columns')); ?> fusion-widget-area">
<?php
/**
 * Check the column width based on the amount of columns chosen in Theme Options.
 */
$footer_widget_columns =  Avada() -> settings -> get('footer_widgets_columns');
$footer_widget_columns = (!$footer_widget_columns) ? 1 : $footer_widget_columns;
$column_width = ('5' ==  Avada() -> settings -> get('footer_widgets_columns')) ? 2 : 12 / $footer_widget_columns;

/* Custom HTML Footer*/
?>



<?php
/**
 * Render as many widget columns as have been chosen in Theme Options.
 */
?>
<?php
/*changed 1 from 1 to 7 so for doesn't run*/
for ( $i = 7; $i < 7; $i++ ) : ?>
<?php if ( $i <= Avada()->settings->get( 'footer_widgets_columns' ) ) : ?>
<div class="fusion-column<?php echo( Avada() -> settings -> get('footer_widgets_columns') == $i) ? ' fusion-column-last' : ''; ?> col-lg-<?php echo esc_attr($column_width); ?> col-md-<?php echo esc_attr($column_width); ?> col-sm-<?php echo esc_attr($column_width); ?>">
<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'avada-footer-widget-' . $i ) ) : ?>
<?php
/**
 * All is good, dynamic_sidebar() already called the rendering.
 */
?>
<?php endif; ?>
</div>
<?php endif; ?>
<?php endfor; ?>

<div class="fusion-clearfix"></div>
</div> <!-- fusion-columns -->
</div> <!-- fusion-row -->
</footer> <!-- fusion-footer-widget-area -->
<?php endif; // End footer wigets check. ?>

<?php
/**
 * Check if the footer copyright area should be displayed.
 */
$display_copyright = get_post_meta($c_page_id, 'pyre_display_copyright', true);
?>
<?php if ( ( Avada()->settings->get( 'footer_copyright' ) && 'no' !== $display_copyright ) || ( ! Avada()->settings->get( 'footer_copyright' ) && 'yes' === $display_copyright ) ) : ?>
<?php $footer_copyright_center_class = ( Avada() -> settings -> get('footer_copyright_center_content')) ? ' fusion-footer-copyright-center' : ''; ?>

<footer id="footer" class="fusion-footer-copyright-area<?php echo esc_attr($footer_copyright_center_class); ?>">
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

<?php
/**
 * Footer Content (Copyright area) avada_footer_copyright_content hook.
 *
 * @hooked avada_render_footer_copyright_notice - 10 (outputs the HTML for the Theme Options footer copyright text)
 * @hooked avada_render_footer_social_icons - 15 (outputs the HTML for the footer social icons)..
 */
//do_action( 'avada_footer_copyright_content' );
?>

</div> <!-- fusion-fusion-copyright-content -->
</div> <!-- fusion-row -->
</footer> <!-- #footer -->
<?php endif; // End footer copyright area check. ?>
<?php
// Displays WPML language switcher inside footer if parallax effect is used.
if (defined('ICL_SITEPRESS_VERSION') && 'footer_parallax_effect' ===  Avada() -> settings -> get('footer_special_effects')) {
	global $wpml_language_switcher;
	$slot = $wpml_language_switcher -> get_slot('statics', 'footer');
	if ($slot -> is_enabled()) {
		echo $wpml_language_switcher -> render($slot);
		// WPCS: XSS ok.
	}
}
?>
</div> <!-- fusion-footer -->
<?php endif; // End is not blank page check. ?>
</div> <!-- wrapper -->

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

<?php
/**
 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
 */
$page_bg_layout = ($c_page_id) ? get_post_meta($c_page_id, 'pyre_page_bg_layout', true) : 'default';
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



<?php
//The folowing  javascript code is for the timeline plugin

?>

<script type="application/javascript">
	jQuery(document).ready(function($){
		var total_event = $('.cd-horizontal-timeline .timeline .events-wrapper .events ol li').length;		
		for(var i=1; i<= total_event; i++){
			$('.cd-horizontal-timeline .timeline .events-wrapper .events ol li:nth-child('+i+') a').css('left',''+i*100+'px');
		}
	});
</script>

</body>
</html>
