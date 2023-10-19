<?php 

wp_enqueue_style( 'style', get_template_directory_uri().'/include/css/reset.css' );
wp_enqueue_style( 'custom-style', get_template_directory_uri().'/include/css/style.css' );
wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/include/css/bootstrap.min.css' );

function wpdocs_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/include/js/script.js',
		array('jquery')
	);
	
}

function bootstrap_scripts_method() {
	wp_enqueue_script(
		'bootstrap-script',
		get_template_directory_uri() . '/include/js/bootstrap.js',
		array('jquery')
	);
	
}

add_action('wp_enqueue_scripts', 'wpdocs_scripts_method');
add_action('wp_enqueue_scripts', 'bootstrap_scripts_method');
?>

