<?php

/**
 *	Register navwalker
 */

if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
  // file does not exist... return an error.
  return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
  // file exists... require it.
  require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function mzghi_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'mzghi' ),
		// 'expanded' => __( 'Desktop Expanded Menu', 'mzghi' ),
		// 'mobile'   => __( 'Mobile Menu', 'mzghi' ),
		// 'footer'   => __( 'Footer Menu', 'mzghi' ),
		// 'social'   => __( 'Social Menu', 'mzghi' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'mzghi_menus' );







