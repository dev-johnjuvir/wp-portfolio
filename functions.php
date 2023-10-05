<?php 

wp_enqueue_style( 'style', get_template_directory_uri().'/include/css/reset.css' );
wp_enqueue_style( 'style', get_template_directory_uri().'/include/css/style.css' );

function wpdocs_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/include/js/script.js',
		array('jquery')
	);
}
add_action('wp_enqueue_scripts', 'wpdocs_scripts_method');
?>

