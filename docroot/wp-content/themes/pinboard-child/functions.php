<?php

/**
 * Add various scripts to front end
 */

function OPN_enqueue_scripts() {
  wp_enqueue_script( 'opn-javascript', get_stylesheet_directory_uri() . '/js/scripts.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'OPN_enqueue_scripts' );

?>
