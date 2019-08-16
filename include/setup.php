<?php

function ino_theme_styles(){
	wp_enqueue_style('style_css', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_script('action_js', get_template_directory_uri().'/assets/js/action.js', array('jquery'), '', true);
}

function ino_after_setup(){
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	register_nav_menu('primary', __('Primary Menu', 'inohub'));
	register_nav_menu('secondary', __('Secondary Menu', 'inohub'));

}

function ino_widgets(){
	register_sidebar(array(
		'name' => __('sidebar', 'inohub'),
		'id' => 'ci_sidebar',
		'description' => __('Sidebar do theme', 'inohub'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="title_widget">',
		'after_title' => '</h4>',
	));
}