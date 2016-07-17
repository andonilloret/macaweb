<?php
  add_filter( 'woocommerce_enqueue_styles', '__return_false' );
  add_theme_support( 'woocommerce' );

  function wp_enqueue_woocommerce_style(){
  	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce.css' );

  	if ( class_exists( 'woocommerce' ) ) {
  		wp_enqueue_style( 'mytheme-woocommerce' );
  	}
  }
  add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );
?>
