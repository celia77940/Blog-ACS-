<?php

// /
//  activation theme
// **/

function custom_enqueue_scripts() {
    //ajout pour js jquery
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js.js', array( 'jquery' ),  NULL, true);

    //Ajout des CSS
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css', array(), NULL, NULL);

}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 101);

