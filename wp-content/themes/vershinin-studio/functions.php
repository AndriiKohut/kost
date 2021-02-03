<?php

add_action( 'wp_enqueue_scripts', 'vershinin_studio_style' );
add_action( 'wp_enqueue_scripts', 'vershinin_studio_scripts' );

function vershinin_studio_style() {
	
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function vershinin_studio_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
	wp_enqueue_script( 'jquery' );


	wp_enqueue_script( 'fancybox_script', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), null, true );
	wp_enqueue_script( 'fancybox_script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'slick_script', get_template_directory_uri() .'/assets/js/slick.min.js', array(), null, true );
	wp_enqueue_script( 'telegram_script', get_template_directory_uri() .'/assets/js/telegramform.js', array(), null, true );
	wp_enqueue_script( 'main_script', get_template_directory_uri() .'/assets/js/main.js', array(), null, true );
}