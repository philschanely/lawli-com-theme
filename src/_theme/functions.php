<?php
$lawli_com_theme_parent_style = 'parent-style';

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts' );
function my_theme_enqueue_styles_and_scripts() {

  // Enqueue the styles
  wp_enqueue_style( $lawli_com_theme_parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $lawli_com_theme_parent_style ),
    wp_get_theme()->get('Version')
  );

  // Enqueue the styles
  wp_enqueue_script( 'app', get_template_directory_uri() . '/app.js', array(), 1.0, true);
}
