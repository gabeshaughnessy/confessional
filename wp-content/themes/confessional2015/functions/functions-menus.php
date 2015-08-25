<?php
function register_gi_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
//add_action( 'init', 'register_gi_menus' );
?>