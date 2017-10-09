<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'avada-parent-stylesheet', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function theme_enqueue_child_styles() {
    wp_enqueue_style( 'avada-child-stylesheet', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_child_styles' );

function avada_header_template_child( $slider_position = 'Below' ) {

		$page_id = get_queried_object_id();

		$reverse_position = ( 'Below' == $slider_position ) ? 'Above' : 'Below';

		$menu_text_align = '';

		$theme_option_slider_position = Avada()->settings->get( 'slider_position' );
		$page_option_slider_position  = fusion_get_page_option( 'slider_position', $page_id );

		if ( ( ! $theme_option_slider_position || ( $slider_position == $theme_option_slider_position && strtolower( $reverse_position ) != $page_option_slider_position ) || ( $theme_option_slider_position != $slider_position && strtolower( $slider_position ) == $page_option_slider_position ) ) && ! is_page_template( 'blank.php' ) && 'no' != fusion_get_page_option( 'display_header', $page_id ) && 'Top' == Avada()->settings->get( 'header_position' ) ) {
			$header_wrapper_class  = 'fusion-header-wrapper';
			$header_wrapper_class .= ( Avada()->settings->get( 'header_shadow' ) ) ? ' fusion-header-shadow' : '';

			/**
			 * The avada_before_header_wrapper hook.
			 */
			do_action( 'avada_before_header_wrapper' );

			$sticky_header_logo = Avada()->settings->get( 'sticky_header_logo' );
			$sticky_header_logo = ( is_array( $sticky_header_logo ) && isset( $sticky_header_logo['url'] ) && $sticky_header_logo['url'] ) ? true : false;
			$mobile_logo        = Avada()->settings->get( 'mobile_logo' );
			$mobile_logo        = ( is_array( $mobile_logo ) && isset( $mobile_logo['url'] ) && $mobile_logo['url'] ) ? true : false;

			$sticky_header_type2_layout = '';

			if ( in_array( Avada()->settings->get( 'header_layout' ), array( 'v4', 'v5' ) ) ) {
				$sticky_header_type2_layout = ( 'menu_and_logo' == Avada()->settings->get( 'header_sticky_type2_layout' ) ) ? ' fusion-sticky-menu-and-logo' : ' fusion-sticky-menu-only';
				$menu_text_align = 'fusion-header-menu-align-' . Avada()->settings->get( 'menu_text_align' );
			}
			?>

			<header class="<?php echo esc_attr( $header_wrapper_class ); ?>">
				<div class="<?php echo esc_attr( 'fusion-header-' . Avada()->settings->get( 'header_layout' ) . ' fusion-logo-' . strtolower( Avada()->settings->get( 'logo_alignment' ) ) . ' fusion-sticky-menu-' . has_nav_menu( 'sticky_navigation' ) . ' fusion-sticky-logo-' . $sticky_header_logo . ' fusion-mobile-logo-' . $mobile_logo . ' fusion-mobile-menu-design-' . strtolower( Avada()->settings->get( 'mobile_menu_design' ) ) . $sticky_header_type2_layout . ' ' . $menu_text_align ); ?>">
					<?php
					/**
					 * The avada_header hook.
					 *
					 * @hooked avada_secondary_header - 10.
					 * @hooked avada_header_1 - 20 (adds header content for header v1-v3).
					 * @hooked avada_header_2 - 20 (adds header content for header v4-v5).
					 */
					
					//Logo Eccles HTML Custom
					
					?>
					<div id ="custom-header-logo" class="logo">
						
						<a href="<?php echo get_option( 'siteurl' );?>" class="blogLink">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/logos/eccles-main-logo-black.svg" alt="David Eccles School of Business">
						</a>
					</div>
					
					<?php
					
					
					//Menu function - logo removed by css child theme
					do_action( 'avada_header' );
					
					//Custom Script to change the text of the Search Button of the menu 
					?>
					
					<script>
						x=document.getElementsByClassName("searchsubmit");  // Find the elements
					    
					    x=document.getElementsByClassName("s");  // Find the elements
					    for(var i = 0; i < x.length; i++){
					    x[i].placeholder="Search Eccles.Utah.edu";    // Change the content
					    }
						
							
					</script>
				</div>
				<div class="fusion-clearfix"></div>
			</header>
			<?php
			/**
			 * The avada_after_header_wrapper hook.
			 */
			do_action( 'avada_after_header_wrapper' );
		} // End if().
	}
?>
