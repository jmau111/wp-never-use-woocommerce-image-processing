<?php
/*
Plugin Name: WP never use Woocommerce Processing images
Description: Prevents hard time for server if image processing should not be handled by Woocommerce
Version: 1.0
*/
defined( "ABSPATH" )
    or die( "trying" );

add_filter( 'woocommerce_background_image_regeneration', '__return_false' );
add_filter( 'woocommerce_resize_images', '__return_false' );