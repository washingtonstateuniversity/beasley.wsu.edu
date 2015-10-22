<?php

/**
 * Remove additional page templates from the drop-down menu when editing pages.
 */
function tfc_remove_page_templates( $templates ) {
    unset( $templates['templates/halves.php'] );
    unset( $templates['templates/margin-left.php'] );
    unset( $templates['templates/margin-right.php'] );
    unset( $templates['templates/side-left.php'] );
    unset( $templates['templates/side-right.php'] );
    unset( $templates['templates/single.php'] );
    return $templates;
}
add_filter( 'theme_page_templates', 'tfc_remove_page_templates' );


// Enqueue custom Beasley Coliseum scripts
// Enqueue Colorbox script
//add_action( 'wp_enqueue_scripts', 'custom_scripts', 'colorbox_script', 11 );

function fittext_scripts() {
	wp_enqueue_script( 'custom_scripts', get_stylesheet_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ), spine_get_script_version(), true );
	wp_enqueue_script( 'colorbox_script', get_stylesheet_directory_uri() . '/js/jquery.colorbox.js', array( 'jquery' ), spine_get_script_version(), true );

}
