<?php

function portfolio_scripts() {

  wp_enqueue_style( 'siteStyle', get_template_directory_uri() . '/style.css', array(), '1.1' );

  wp_deregister_script('jquery');
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), '1.0', true );
  wp_enqueue_script('jquery');

  wp_enqueue_script( 'siteScript', get_template_directory_uri() . '/site.min.js', array('jquery'), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

function add_oembed_soundcloud(){
  wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
}
add_action('init','add_oembed_soundcloud');

?>