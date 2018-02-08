<?php
/**
 * Header template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
	exit('Direct script access denied.');
}
?>
<!DOCTYPE html>
<?php
	global $woocommerce;
 ?>
<html class="<?php echo( Avada() -> settings -> get('smooth_scrolling')) ? 'no-overflow-y' : ''; ?>" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NZQ4NSL');</script>
<!-- End Google Tag Manager -->

		<?php Avada() -> head -> the_viewport(); ?>

		<?php wp_head(); ?>

		<?php $object_id = get_queried_object_id(); ?>
		<?php $c_page_id =  Avada() -> fusion_library -> get_page_id(); ?>

		<script type="text/javascript">
			var doc = document.documentElement;
			doc.setAttribute('data-useragent', navigator.userAgent);
		</script>
		<link rel="icon" href="http://eccles.utah.edu/wp-content/uploads/2016/11/U_Favicon_57.png" sizes="32x32">
		<link rel="icon" href="http://eccles.utah.edu/wp-content/uploads/2016/11/U_Favicon_57.png" sizes="192x192">
		<?php
		/**
		 *
		 * The settings below are not sanitized.
		 * In order to be able to take advantage of this,
		 * a user would have to gain access to the database
		 * in which case this is the least on your worries.
		 */
		echo Avada() -> settings -> get('google_analytics');
		// WPCS: XSS ok.
		echo Avada() -> settings -> get('space_head');
		// WPCS: XSS ok.
	?>
	</head>

	<?php
	$wrapper_class = ( is_page_template('blank.php')) ? 'wrapper_blank' : '';

	if ('modern' ===  Avada() -> settings -> get('mobile_menu_design')) {
		$mobile_logo_pos = strtolower( Avada() -> settings -> get('logo_alignment'));
		if ('center' === strtolower( Avada() -> settings -> get('logo_alignment'))) {
			$mobile_logo_pos = 'left';
		}
	}
?>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZQ4NSL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<?php do_action('avada_before_body_content');

		$boxed_side_header_right = false;
		$page_bg_layout = ($c_page_id) ? get_post_meta($c_page_id, 'pyre_page_bg_layout', true) : 'default';
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && ( 'default' === $page_bg_layout || '' == $page_bg_layout ) ) || 'boxed' === $page_bg_layout ) && 'Top' != Avada()->settings->get( 'header_position' ) ) :
		?>
		<?php if ( Avada()->settings->get( 'slidingbar_widgets' ) && ! is_page_template( 'blank.php' ) && ( 'Right' == Avada()->settings->get( 'header_position' ) || 'Left' == Avada()->settings->get( 'header_position' ) ) ) :
		?>
		<?php get_template_part('slidingbar'); ?>
		<?php $boxed_side_header_right = true; ?>
		<?php endif; ?>
		<div id="boxed-wrapper">
			<?php endif; ?>
			<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) ) :
			?>
			<div class="fusion-sides-frame"></div>
			<?php endif; ?>
			<div id="wrapper" class="<?php echo esc_attr($wrapper_class); ?>">

				<?php
		
		//List of Sites without custom header
		$list_of_urls[0] = 'http://eccles.utah.edu';
		$list_of_urls[1] = "//dmz-test.eccles.utah.edu/ecclesv5";
		$list_of_urls[2] = '//localhost/Workspace/Wordpress_New/eccles';
		$list_of_urls[3] = 'http://dmz-test.eccles.utah.edu/undergraduate/';
		
		$custom_header=TRUE;
		$site_url = get_option( 'siteurl' );
		foreach ($list_of_urls as $key => $value) {
			if($site_url==$value){
				$custom_header=FALSE;
			}

		}
		//if true displays custom top menu for subpages
		if($custom_header){

				?>
				<div id="menu-eccles" class="fusion-header-wrapper-eccles">
					<div class="fusion-header-v1 fusion-logo-left f fusion-mobile-logo- fusion-mobile-menu-design-modern ">
						<div class="" style="display: none;"></div>
						<div class="fusion-header">
							<div class="fusion-row">
								<div class="fusion-logo" data-margin-top="auto" data-margin-bottom="auto" data-margin-left="0px" data-margin-right="0px">
									<a class="fusion-logo-link" href="http://eccles.utah.edu"> 
										
									<!--	<img src="wp-content/themes/Avada-Child-Theme/logos/logo-white.png" width="" height="" alt="The David Eccles School of Business Logo" class="fusion-logo-1x fusion-standard-logo"> 
										<img src="wp-content/themes/Avada-Child-Theme/logos/logo-white.png"width="" height="" alt="The David Eccles School of Business Retina Logo" class="fusion-standard-logo fusion-logo-2x"> <!-- mobile logo --> <!-- sticky header logo --> 
										
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/logos/eccles-logo-final-white.png" width="" height="" alt="The David Eccles School of Business Logo" class="fusion-logo-1x fusion-standard-logo"> 
										
									</a>
								</div>
								<nav class="fusion-main-menu" aria-label="Main Menu">
									<ul role="menubar" id="menu-main-menu-1" class="fusion-menu">
										<li role="menuitem" id="menu-item-1-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-157 fusion-dropdown-menu">
											<a href="http://eccles.utah.edu/about/" aria-haspopup="true"><span class="menu-text">About</span></a>
											
										</li>
										<li role="menuitem" id="menu-item-2-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-401 fusion-dropdown-menu">
											<a href="http://eccles.utah.edu/programs/" aria-haspopup="true"><span class="menu-text">Programs</span></a>
											
										</li>
										<li role="menuitem" id="menu-item-3-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-490 fusion-dropdown-menu">
											<a href="http://eccles.utah.edu/students/" aria-haspopup="true"><span class="menu-text">Students</span></a>
											
										</li>
										<li role="menuitem" id="menu-item-4-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-559 fusion-dropdown-menu">
											<a href="http://eccles.utah.edu/faculty/" aria-haspopup="true"><span class="menu-text">Faculty</span></a>
											
										</li>
										<li role="menuitem" id="menu-item-5-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-559 fusion-dropdown-menu">
											<a href="http://eccles.utah.edu/directory/" aria-haspopup="true"><span class="menu-text">Directory</span></a>
											
										</li>
										<li role="menuitem" id="menu-item-6-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-747 fusion-dropdown-menu">
											<a href="http://eccles.utah.edu/alumni/" aria-haspopup="true"><span class="menu-text">Alumni</span></a>
											
										</li>
										<li role="menuitem" id="menu-item-7-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-815 fusion-last-menu-item">
											<a href="http://eccles.utah.edu/employers/"><span class="menu-text">Employers</span></a>
										</li>
										<li role="menuitem" id="menu-item-8-custom" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8 fusion-last-menu-item">
											<a href="http://eccles.utah.edu/alumni/invest/ways-to-give/"><span class="menu-text">Give</span></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="fusion-clearfix"></div>
				</div>
<script>
//Custom code on load add items to mobile menu
	document.addEventListener('DOMContentLoaded', function() {
   // your code here
   	var para = document.createElement("ul");
	para.innerHTML= '<li role="menuitem" id="mobile-menu-item-156-1" class="fusion-mobile-nav-item" style=""><span href="#" aria-haspopup="true" class="fusion-open-submenu eccles-open" onclick="show_sub_menu();"></span><a href="http://eccles.utah.edu"><span>David Eccles School</span></a><ul id="eccles-sub" role="menu" class="sub-menu" style="display: none;"><li role="menuitem" id="mobile-menu-item-157-1" class="fusion-mobile-nav-item" style=""><a href="http://eccles.utah.edu/about/"><span class="menu-text eccles-mobile-menu-item">About</span></a></li><li role="menuitem" id="mobile-menu-item-401-1" class="fusion-mobile-nav-item" style=""><a href="http://eccles.utah.edu/programs/"><span class="menu-text eccles-mobile-menu-item">Programs</span></a></li>	<li role="menuitem" id="mobile-menu-item-490-1" class="fusion-mobile-nav-item" style=""><a href="http://eccles.utah.edu/students/"><span class="menu-text eccles-mobile-menu-item">Students</span></a></li><li role="menuitem" id="mobile-menu-item-559-1" class="fusion-mobile-nav-item" style=""><a href="http://eccles.utah.edu/faculty-staff/"><span class="menu-text eccles-mobile-menu-item">Faculty &amp; Staff</span></a></li><li role="menuitem" id="mobile-menu-item-747-1" class="fusion-mobile-nav-item" style=""><a href="http://eccles.utah.edu/alumni/"><span class="menu-text eccles-mobile-menu-item">Alumni</span></a></li><li role="menuitem" id="mobile-menu-item-815-1" class="fusion-mobile-nav-item" style=""><a href="http://eccles.utah.edu/employers/"><span class="menu-text eccles-mobile-menu-item">Employers</span></a></li></ul></li>';


	var element = document.getElementsByClassName("fusion-mobile-nav-holder");
	
	//var child = document.getElementsByClassName("fusion-menu");
	//element[0].innerHTML=para.innerHTML+element[0].innerHTML;
	element[0].insertBefore(para,element[0].children[0]);

	}, false);

function show_sub_menu(){
	if(document.getElementById('eccles-sub').style.display === 'block'){
		document.getElementById('eccles-sub').style.display = 'none';
	}else{
		document.getElementById('eccles-sub').style.display = 'block';
		
	}
	
}

</script>
				<?php
				}else{
					//This code makes header black for eccles and sites without custom heder nav
					?>
					<script>
					//Changes link of header logo to point to eccles
						document.addEventListener('DOMContentLoaded', function() {
						var logo_link = document.getElementsByClassName("fusion-logo-link");
						
						logo_link[0].href='http://eccles.utah.edu';
							}, false);
					</script>
					<style>
					#wrapper header nav{
						
						float:right !important;
					}
					#wrapper header .fusion-header nav span {
						color: #fff !important;
					}
					#wrapper header .fusion-header nav .sub-menu span {
						color: #333 !important;
					}
					#wrapper header .fusion-header .fusion-logo{
							margin:0px !important;
						}
					#wrapper .fusion-header,#wrapper .fusion-header-wrapper.fusion-is-sticky .fusion-header{
						background-color: #000 !important;
					}
					#wrapper .fusion-header span, #wrapper .fusion-header span .fa-external-link:before{
						color :#DDDDDD;
					}
					#wrapper .fusion-header li:hover >a  span, #wrapper .fusion-header li:hover >a span .fa-external-link:before{
						color :#CC0000 !important;
					}
					#wrapper .fusion-header .sub-menu span{
						color : #333;
					}
					#wrapper header .fusion-logo{
						display: block !important;
					}
					#wrapper header .fusion-header, #wrapper header .fusion-header .fusion-row {
						    max-height: 70px;
						    height: 70px;
						    width:100%;
						}
					#wrapper header .fusion-header .fusion-main-menu > ul > li > a {
					    line-height: 66px;
					    height: 66px;
					}				
					#wrapper .fusion-logo-1x {
						height: 55px !important;
						max-height: 45px;
					}
					/* IE6+ */
					#wrapper header .fusion-row{
					/*	display: block !important;*/
					}
					@media (max-width:1200px){
						#wrapper header .fusion-header, #wrapper header .fusion-header .fusion-row {
						    max-height: none;
						    height: auto !important;
						    width:100%;
						}
						
					}
					</style>
					<?php					
				}
				?>

				<div id="home" style="position:relative;top:-1px;"></div>
				<?php if ( Avada()->settings->get( 'slidingbar_widgets' ) && ! is_page_template( 'blank.php' ) && ! $boxed_side_header_right ) :
				?>
				<?php get_template_part('slidingbar'); ?>
				<?php endif; ?>
				<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) :
				?>
				<div class="above-footer-wrapper">
					<?php endif; ?>

					<?php avada_header_template_child('Below'); ?>
					<?php if ( 'Left' === Avada()->settings->get( 'header_position' ) || 'Right' === Avada()->settings->get( 'header_position' ) ) :
					?>
					<?php avada_side_header(); ?>
					<?php endif; ?>

					<div id="sliders-container">
						<?php
						$slider_page_id = '';
						if (!is_search()) {
							$slider_page_id = '';
							if ((!is_home() && !is_front_page() && !is_archive() && isset($object_id)) || (!is_home() && is_front_page() && isset($object_id))) {
								$slider_page_id = $object_id;
							}
							if (is_home() && !is_front_page()) {
								$slider_page_id = get_option('page_for_posts');
							}
							if (class_exists('WooCommerce') && is_shop()) {
								$slider_page_id = get_option('woocommerce_shop_page_id');
							}

							if (('publish' === get_post_status($slider_page_id) && !post_password_required()) || (current_user_can('read_private_pages') && in_array(get_post_status($slider_page_id), array('private', 'draft', 'pending')))) {
								avada_slider($slider_page_id);
							}
						}
						?>
					</div>

					<?php

					$slider_fallback = get_post_meta($slider_page_id, 'pyre_fallback', true);
					?>
					<?php if ( $slider_fallback ) :
					?>
					<div id="fallback-slide">
					<img src="<?php echo esc_url_raw($slider_fallback); ?>" alt="" />
					</div>
					<?php endif; ?>
					<?php avada_header_template('Above'); ?>

					<?php if ( has_action( 'avada_override_current_page_title_bar' ) ) :
					?>
					<?php do_action('avada_override_current_page_title_bar', $c_page_id); ?>
					<?php else : ?>
					<?php avada_current_page_title_bar($c_page_id); ?>
					<?php endif; ?>

					<?php if ( is_page_template( 'contact.php' ) && Avada()->settings->get( 'recaptcha_public' ) && Avada()->settings->get( 'recaptcha_private' ) ) :
					?>
					<script type="text/javascript">
						var RecaptchaOptions = { theme : '<?php echo esc_attr( Avada() -> settings -> get('recaptcha_color_scheme')); ?>
						' };
					</script>
					<?php endif; ?>

					<?php if ( is_page_template( 'contact.php' ) && Avada()->settings->get( 'gmap_address' ) && Avada()->settings->get( 'status_gmap' ) ) :
					?>
					<?php
					$map_popup = (! Avada() -> settings -> get('map_popup')) ? 'yes' : 'no';
					$map_scrollwheel = ( Avada() -> settings -> get('map_scrollwheel')) ? 'yes' : 'no';
					$map_scale = ( Avada() -> settings -> get('map_scale')) ? 'yes' : 'no';
					$map_zoomcontrol = ( Avada() -> settings -> get('map_zoomcontrol')) ? 'yes' : 'no';
					$address_pin = ( Avada() -> settings -> get('map_pin')) ? 'yes' : 'no';
					$address_pin_animation = ( Avada() -> settings -> get('gmap_pin_animation')) ? 'yes' : 'no';
					?>
					<div id="fusion-gmap-container">
						<?php
						echo Avada() -> google_map -> render_map(array(// WPCS: XSS ok.
						'address' => esc_html( Avada() -> settings -> get('gmap_address')), 'type' => esc_attr( Avada() -> settings -> get('gmap_type')), 'address_pin' => esc_attr($address_pin), 'animation' => esc_attr($address_pin_animation), 'map_style' => esc_attr( Avada() -> settings -> get('map_styling')), 'overlay_color' => esc_attr( Avada() -> settings -> get('map_overlay_color')), 'infobox' => esc_attr( Avada() -> settings -> get('map_infobox_styling')), 'infobox_background_color' => esc_attr( Avada() -> settings -> get('map_infobox_bg_color')), 'infobox_text_color' => esc_attr( Avada() -> settings -> get('map_infobox_text_color')), 'infobox_content' => htmlentities( Avada() -> settings -> get('map_infobox_content')), // WPCS: XSS ok.
						'icon' => esc_attr( Avada() -> settings -> get('map_custom_marker_icon')), 'width' => esc_attr( Avada() -> settings -> get('gmap_dimensions', 'width')), 'height' => esc_attr( Avada() -> settings -> get('gmap_dimensions', 'height')), 'zoom' => esc_attr( Avada() -> settings -> get('map_zoom_level')), 'scrollwheel' => esc_attr($map_scrollwheel), 'scale' => esc_attr($map_scale), 'zoom_pancontrol' => esc_attr($map_zoomcontrol), 'popup' => esc_attr($map_popup), ));
						?>
					</div>
					<?php endif; ?>

					<?php if ( is_page_template( 'contact-2.php' ) && Avada()->settings->get( 'gmap_address' ) && Avada()->settings->get( 'status_gmap' ) ) :
					?>
					<?php
					$map_popup = (! Avada() -> settings -> get('map_popup')) ? 'yes' : 'no';
					$map_scrollwheel = ( Avada() -> settings -> get('map_scrollwheel')) ? 'yes' : 'no';
					$map_scale = ( Avada() -> settings -> get('map_scale')) ? 'yes' : 'no';
					$map_zoomcontrol = ( Avada() -> settings -> get('map_zoomcontrol')) ? 'yes' : 'no';
					$address_pin_animation = ( Avada() -> settings -> get('gmap_pin_animation')) ? 'yes' : 'no';
					?>
					<div id="fusion-gmap-container">
						<?php
						echo Avada() -> google_map -> render_map(array(// WPCS: XSS ok.
						'address' => esc_html( Avada() -> settings -> get('gmap_address')), 'type' => esc_attr( Avada() -> settings -> get('gmap_type')), 'map_style' => esc_attr( Avada() -> settings -> get('map_styling')), 'animation' => esc_attr($address_pin_animation), 'overlay_color' => esc_attr( Avada() -> settings -> get('map_overlay_color')), 'infobox' => esc_attr( Avada() -> settings -> get('map_infobox_styling')), 'infobox_background_color' => esc_attr( Avada() -> settings -> get('map_infobox_bg_color')), 'infobox_text_color' => esc_attr( Avada() -> settings -> get('map_infobox_text_color')), 'infobox_content' => htmlentities( Avada() -> settings -> get('map_infobox_content')), // WPCS: XSS ok.
						'icon' => esc_attr( Avada() -> settings -> get('map_custom_marker_icon')), 'width' => esc_attr( Avada() -> settings -> get('gmap_dimensions', 'width')), 'height' => esc_attr( Avada() -> settings -> get('gmap_dimensions', 'height')), 'zoom' => esc_attr( Avada() -> settings -> get('map_zoom_level')), 'scrollwheel' => esc_attr($map_scrollwheel), 'scale' => esc_attr($map_scale), 'zoom_pancontrol' => esc_attr($map_zoomcontrol), 'popup' => esc_attr($map_popup), ));
						?>
					</div>
					<?php endif; ?>
					<?php
					$main_css = '';
					$row_css = '';
					$main_class = '';

					if ( Avada() -> layout -> is_hundred_percent_template()) {
						$main_css = 'padding-left:0px;padding-right:0px;';
						$hundredp_padding = get_post_meta($c_page_id, 'pyre_hundredp_padding', true);
						if ( Avada() -> settings -> get('hundredp_padding') && !$hundredp_padding) {
							$main_css = 'padding-left:' .  Avada() -> settings -> get('hundredp_padding') . ';padding-right:' .  Avada() -> settings -> get('hundredp_padding');
						}
						if ($hundredp_padding) {
							$main_css = 'padding-left:' . $hundredp_padding . ';padding-right:' . $hundredp_padding;
						}
						$row_css = 'max-width:100%;';
						$main_class = 'width-100';
					}
					do_action('avada_before_main_container');
					?>

					<main id="main" role="main" class="clearfix <?php echo esc_attr($main_class); ?>" style="<?php echo esc_attr($main_css); ?>">
						<div class="fusion-row" style="<?php echo esc_attr($row_css); ?>">
							
