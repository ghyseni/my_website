<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-media' => __( 'Social Media' )
    )
  );
}
add_action( 'init', 'register_my_menus');

