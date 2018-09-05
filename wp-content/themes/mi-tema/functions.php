<?php 

function register_enqueue_style(){
	$theme_data = wp_get_theme();


wp_register_style('bootstrap-css', get_theme_file_uri ('vendor/boostrap/css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('portfolio-css', get_theme_file_uri('css/style.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');

	
wp_enqueue_style('bootstrap-css');
wp_enqueue_style('portfolio-css');
wp_enqueue_style('fontawesome');


}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );





function register_enqueue_scripts(){
	$theme_data = wp_get_theme();

wp_deregister_script('jquery');
wp_deregister_script('jquery-migrate');


wp_register_script('jquery3', get_parent_theme_file_uri('vendor/jquery/jquery-3.3.1.min.js'), null, "3.3.1", true);

wp_register_script('boostrap', get_parent_theme_file_uri('vendor/boostrap/js/bootstrap.min.js'), null, "1.0", true);


wp_enqueue_script('jquery3');
wp_enqueue_script('boostrap');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

?>



