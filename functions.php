<?php

function portfolio_scripts() {
  
  wp_enqueue_style( 'siteStyle', get_template_directory_uri() . '/style.css', array(), '1.1' );
  
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), '1.0', true );
  wp_enqueue_script( 'siteScript', get_template_directory_uri() . '/js/portfolio.js', array('jquery'), '1.0', true );
  
}

add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
?>