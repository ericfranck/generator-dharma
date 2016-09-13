<?php
/**
 * WordPress Dashboard modifications
 * Customising login screens, and other wp-admin hooks
 *
 * @package dharma
 */


/**
 * Customise the login screen.
 */
add_action( 'login_head', 'd_login_styles' );
add_filter( 'login_headerurl', 'd_login_logourl' );
add_filter( 'login_headertitle', 'd_login_logotitle' );

if ( ! function_exists( 'd_login_styles' ) ) {

  function d_login_styles() {

    wp_register_style( 'login-css', get_template_directory_uri() . '/assets/styles/login-style.css' );
    wp_enqueue_style( 'login-css' );

  }

}