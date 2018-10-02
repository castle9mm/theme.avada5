<?php




function custom_post_type_job() {

    $labels = array(
        'name'                  => 'Job Posts',
        'singular_name'         => 'Job',
        'menu_name'             => 'Jobs',
        'name_admin_bar'        => 'Jobs',
        'archives'              => 'Jobs Archives',
        'parent_item_colon'     => 'Parent Job:',
        'all_items'             => 'All Jobs',
        'add_new_item'          => 'Add New Job',
        'add_new'               => 'Add Job',
        'new_item'              => 'New Job',
        'edit_item'             => 'Edit Job',
        'update_item'           => 'Update Job',
        'view_item'             => 'View Job',
        'search_items'          => 'Search Job',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into job',
        'uploaded_to_this_item' => 'Uploaded to this job',
        'items_list'            => 'Job list',
        'items_list_navigation' => 'Job list navigation',
        'filter_items_list'     => 'Filter job list',
    );
    $rewrite = array(
        'slug'                  => 'job',
        'with_front'            => false,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => 'Job',
        'description'           => 'jobs',
        'slug'                  => 'job',
        'labels'                => $labels,
        'taxonomies'            => array( 'companies', 'job-types' ),
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
        'supports'              => array( 'title', 'thumbnail', 'editor','excerpt'),
        'capability_type'       => 'post',
    );
    register_post_type( 'job', $args );

}
add_action( 'init', 'custom_post_type_job', 0 );



add_action( 'init', 'build_taxonomies_companies', 0 );
function build_taxonomies_companies() {
    register_taxonomy(
        'companies',
        array( 'job' ),  // this is the custom post type(s) I want to use this taxonomy for
        array(
                'hierarchical' => true,
                'label' => 'Companies',
                'query_var' => true,
                'rewrite' => array('with_front' => false, 'slug' => 'companies')
            )

    );
};/**/


add_action( 'init', 'build_taxonomies_jobType', 0 );
function build_taxonomies_jobType() {
    register_taxonomy(
        'jobType',
        array( 'job' ),  // this is the custom post type(s) I want to use this taxonomy for
        array(
                'hierarchical' => true,
                'label' => 'Job Types',
                'query_var' => true,
                'rewrite' => array('with_front' => false, 'slug' => 'job-types')
            )

    );
};

?>