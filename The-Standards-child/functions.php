<?php

//wp_enqueue_style( 'the_standards-uswds-styles', get_template_directory_uri() . '/assets/css/uswds.min.css' );
	//wp_enqueue_style( 'the_standards-style', get_stylesheet_uri() );


// Our custom post type function
function training_videos_posttype() {
 
    register_post_type( 'Training Videos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Training Videos' ),
                'singular_name' => __( 'Training Video' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Training Videos'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'training_videos_posttype' );
?>


<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Business Domain Callout', 'the-standards-child' ),
        'id'            => 'business-domain-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Security Architecture Callout', 'the-standards-child' ),
        'id'            => 'security-architecture-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Strategic Architecture Callout', 'the-standards-child' ),
        'id'            => 'strategic-architecture-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Cloud Architecture Callout', 'the-standards-child' ),
        'id'            => 'cloud-architecture-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Data Architecture Callout', 'the-standards-child' ),
        'id'            => 'data-architecture-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Systems & Applications Domain Callout', 'the-standards-child' ),
        'id'            => 'sa-domain-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Network Architecture Callout', 'the-standards-child' ),
        'id'            => 'network-architecture-callout',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '<div class="usa-hero-callout usa-section-dark">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><span class="usa-hero-callout-alt">',
        'after_title'   => '</span></h2>',
    ) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );


function standardschild_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Business Domain Box Section', 'the-standards-child' ),
        'id'            => 'business-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Security Domain Box Section', 'the-standards-child' ),
        'id'            => 'security-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Cloud Domain Box Section', 'the-standards-child' ),
        'id'            => 'cloud-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Data Domain Box Section', 'the-standards-child' ),
        'id'            => 'data-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Network Domain Box Section', 'the-standards-child' ),
        'id'            => 'network-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Strategic Domain Box Section', 'the-standards-child' ),
        'id'            => 'strategic-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'S&A Domain Box Section', 'the-standards-child' ),
        'id'            => 'systems-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'VASI Box Section', 'the-standards-child' ),
        'id'            => 'VASI-box-section',
        'description'   => esc_html__( 'Add widget here.', 'the-standards-child' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );
}

add_action( 'widgets_init', 'standardschild_widgets_init' );
?>

<?php

function wpbsearchform( $form ) {
 
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="search-text" />
    <input type="submit" id="searchsubmit" class="hidden-btn" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';
 
    return $form;
}
 
add_shortcode('wpbsearch', 'wpbsearchform');

add_action('init', 'custom_trainings_post_type_init');
function custom_trainings_post_type_init() 
{
  $labels = array(
    'name' => _x('Trainings', 'post type general name'),
    'singular_name' => _x('Training', 'post type singular name'),
    'add_new' => _x('Add New', 'Training'),
    'add_new_item' => __('Add New Training'),
    'edit_item' => __('Edit Training'),
    'new_item' => __('New Training'),
    'view_item' => __('View Training'),
    'search_items' => __('Search Trainings'),
    'not_found' =>  __('No Trainings found'),
    'not_found_in_trash' => __('No Trainings found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Trainings'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'taxonomies' => array('category', 'post_tag'),
    'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields')
  ); 
  register_post_type('training',$args);
}
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
          'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 196, 110, true );
