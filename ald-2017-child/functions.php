<?php 
add_action( 'wp_enqueue_scripts', 'al17_child_enqueue_styles' );

add_filter( 'twentyseventeen_custom_header_args', 'al17_custom_header_args' );

// 6 sections dans la page d'accueil (au lieu de 4)
add_filter( 'twentyseventeen_front_page_sections', function(){ return 6; } );


function al17_child_enqueue_styles() { 

    $parent_style = 'twentyseventeen-style-css'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tw17-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

} 

function al17_custom_header_args( $args ) {
	
	// source https://kinsta.com/blog/twenty-seventeen-theme/
	$args['default-image'] = get_theme_file_uri( '/images/al_domotic-2000x350.png' );
	$args['height'] = 350 ;
	return $args;
}



?>