<?php 
    function faceOff_files() {
        // wp_enqueue_style('bootstrap', get_theme_file_uri('/js/scripts-bundles.js'), NULL,'1.0', true);
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array());
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
        wp_enqueue_script( 'front_page', get_template_directory_uri() . '/js/frontPage.js', array('jquery'), true );
        wp_enqueue_style('custom-google-fonts', 'fonts.googleapis.com/css?family=Open+Sans:300,400,800&display=swap');
        wp_enqueue_style('custom-google-fonts', 'fonts.googleapis.com/css?family=Raleway:900&display=swap');
        wp_enqueue_style('font-awesome' , 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
        wp_enqueue_style('faceOff_main_styles', get_stylesheet_uri());
    }
    function faceOff_features() {
        add_theme_support('title-tag');
    }

    //calls our function we names or calls wordpress defined funtions
    add_action('wp_enqueue_scripts', 'faceOff_files');
    //The below adds a title name to the open tab
    add_action('after_setup_theme','faceOff_features');

    // Register Widget Locations
function wpbasics_init_widgets($id){
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id'    => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}
add_action('widgets_init','wpbasics_init_widgets' );

