<?php

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	Function bridge_qode_child_theme_enqueue_scripts() { 


		// Register css files               
		wp_register_style('bridge-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_register_style('bridge-childstyle-tv', get_stylesheet_directory_uri() . '/assets/css/tv-style.css');
		wp_register_style('bridge-childstyle-mb', get_stylesheet_directory_uri() . '/assets/css/mb-style.css');
		wp_register_style('bridge-childstyle-r', get_stylesheet_directory_uri() . '/assets/css/r-style.css');
		wp_enqueue_style('bridge-childstyle');
		wp_enqueue_style('bridge-childstyle-tv');
		wp_enqueue_style('bridge-childstyle-mb');
		wp_enqueue_style('bridge-childstyle-r');

		// Register and enqueue scripts
        wp_register_script('bridge-childscript-r', get_stylesheet_directory_uri() . '/assets/js/r-main.js');
		wp_register_script('bridge-childscript-mb', get_stylesheet_directory_uri() . '/assets/js/mb-main.js', array(), '1.0', true);
		wp_register_script('bridge-childscript-tv', get_stylesheet_directory_uri() . '/assets/js/tv-main.js', array(), '1.0', true);
        wp_enqueue_script('bridge-childscript-r');
		wp_enqueue_script('bridge-childscript-tv');
		wp_enqueue_script('bridge-childscript-mb');


	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}