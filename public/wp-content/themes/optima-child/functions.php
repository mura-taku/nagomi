<?php
	
function gt3_child_scripts() {
	wp_enqueue_style( 'gt3-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'gt3_child_scripts' );

/**
 * Your code here.
 *
 */

function add_scripts() { 
	// 閉じBODYタグ前に出力
// WordPress提供のjquery.jsを読み込まない
wp_deregister_script('jquery');
 
// jQueryの読み込み
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "20160608", false );
wp_enqueue_script( 'slick-js', get_theme_file_uri('slick/slick.min.js'), '', '20160608', true );
wp_enqueue_script( 'index-js', get_theme_file_uri('js/index.js'), '', '20160608', true );
}
add_action('wp_print_scripts', 'add_scripts');