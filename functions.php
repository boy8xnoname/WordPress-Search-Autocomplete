<?php
/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function ja_global_enqueues() {

	wp_enqueue_style(
		'jquery-auto-complete',
		get_template_directory_uri() . '/css/jquery.auto-complete.css',
		array(),
		'1.0.7'
	);

	wp_enqueue_script(
		'jquery-auto-complete',
		get_template_directory_uri() . '/js/jquery.auto-complete.min.js',
		array( 'jquery' ),
		'1.0.7',
		true
	);

	wp_enqueue_script(
		'global',
		get_template_directory_uri() . '/js/global.min.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);

	wp_localize_script(
		'global',
		'global',
		array(
			'ajax' => admin_url( 'admin-ajax.php' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'ja_global_enqueues' );
