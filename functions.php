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
				/*	
					?>
					<div id ="custom-header-logo" class="logo">
						
						<a href="<?php echo get_option( 'siteurl' );?>" class="blogLink">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/logos/eccles-main-logo-black.svg" alt="David Eccles School of Business">
						</a>
					</div>
					
					<?php
					*/
					
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


include ('includes/acf-pro-fields.php'); // This is to include custom fields for the Directory Profiles via the Advanced Custom Fields plugin
	
// Register Custom Post Type
function custom_post_type_directory() {

    $labels = array(
        'name'                  => 'Profiles',
        'singular_name'         => 'Profile',
        'menu_name'             => 'Directory',
        'name_admin_bar'        => 'Directory',
        'archives'              => 'Directory Archives',
        'parent_item_colon'     => 'Parent Profile:',
        'all_items'             => 'All Profiles',
        'add_new_item'          => 'Add New Profile',
        'add_new'               => 'Add Profile',
        'new_item'              => 'New Profile',
        'edit_item'             => 'Edit Profile',
        'update_item'           => 'Update Profile',
        'view_item'             => 'View Profile',
        'search_items'          => 'Search Profile',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into profile',
        'uploaded_to_this_item' => 'Uploaded to this profile',
        'items_list'            => 'Profile list',
        'items_list_navigation' => 'Profile list navigation',
        'filter_items_list'     => 'Filter profile list',
    );
    $rewrite = array(
        'slug'                  => 'team',
        'with_front'            => false,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => 'Profile',
        'description'           => 'Directory',
        'labels'                => $labels,
        'supports'              => array( 'title', 'author', ),
        'taxonomies'            => array( 'departments', ' area-of-expertise' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'supports'              => array( 'title', 'thumbnail', ),
        'capability_type'       => 'page',
    );
    register_post_type( 'directory', $args );

}
add_action( 'init', 'custom_post_type_directory', 0 );


add_action( 'init', 'build_taxonomies_areas_of_expertise', 0 );
function build_taxonomies_areas_of_expertise() {
    register_taxonomy(
        'areas_of_expertise',
        array( 'directory' ),  // this is the custom post type(s) I want to use this taxonomy for
        array(
                'hierarchical' => true,
                'label' => 'Areas of Expertise',
                'query_var' => true,
                'rewrite' => array('with_front' => false, 'slug' => 'expertise')
            )

    );
};/**/
add_action( 'init', 'build_taxonomies_departments', 0 );
function build_taxonomies_departments() {
    register_taxonomy(
        'departments',
        array( 'directory' ),  // this is the custom post type(s) I want to use this taxonomy for
        array(
                'hierarchical' => true,
                'label' => 'Department',
                'query_var' => true,
                'rewrite' => array('with_front' => false, 'slug' => 'department')
            )

    );
};/**/


add_action( 'init', 'build_taxonomies_ecclesRoles', 0 );
function build_taxonomies_ecclesRoles() {
    register_taxonomy(
        'ecclesRoles',
        array( 'directory' ),  // this is the custom post type(s) I want to use this taxonomy for
        array(
                'hierarchical' => true,
                'label' => 'Role',
                'query_var' => true,
                'rewrite' => array('with_front' => false, 'slug' => 'role')
            )

    );
};
/* Fix for media attachement pages conflicting with page/post urls.  This adds a random string to the media "posts" */
function append_attachment_slug( $slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug ) {
    if ( 'attachment' == $post_type )
          $slug = $original_slug . uniqid( '-' );
      return $slug;
}
add_filter( 'wp_unique_post_slug', 'append_attachment_slug', 10, 6 );
function custom_header(){
	//List of Sites without custom header
		$list_of_urls[0] = 'http://eccles.utah.edu';
		$list_of_urls[1] = "//dmz-test.eccles.utah.edu/ecclesv5";
		$list_of_urls[2] = '//localhost/Workspace/Wordpress_New/eccles';
		
		
		$custom_header=TRUE;
		$site_url = get_option( 'siteurl' );
		foreach ($list_of_urls as $key => $value) {
			if($site_url==$value){
				$custom_header=FALSE;
			}

		}
		return $custom_header;
}
?>
