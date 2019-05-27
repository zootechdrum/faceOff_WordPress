<?php 
    function faceOff_files() {
        // wp_enqueue_style('bootstrap', get_theme_file_uri('/js/scripts-bundles.js'), NULL,'1.0', true);
        wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
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
