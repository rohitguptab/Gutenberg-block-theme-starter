<?php
// React Block enqueue
add_action( 'enqueue_block_editor_assets', 'Gutenberg_block_theme_starter_editor_assets' );

function Gutenberg_block_theme_starter_editor_assets() {

	wp_register_script( 'Gutenberg_block_theme_starter_block',
		get_template_directory_uri() . '/Gutenberg-block-theme-starter/js/block.build.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-components' )
	);

	// editor css
	wp_register_style(
		'Gutenberg_block_theme_starter_block',
		get_template_directory_uri() . '/Gutenberg-block-theme-starter/css/editor.css'
	);

	register_block_type( 'rg/gutenberg-block-theme-starter', array(
		'editor_script' => 'Gutenberg_block_theme_starter_block',
		'editor_style'  => 'Gutenberg_block_theme_starter_block',
	) );

}

add_action( 'wp_enqueue_scripts', 'Gutenberg_block_theme_starter_front_enqueue' );

function Gutenberg_block_theme_starter_front_enqueue() {

	wp_enqueue_script( 'Gutenberg_block_theme_starter-custom-js', get_template_directory_uri() . '/Gutenberg-block-theme-starter/js/custom.js', array( 'jquery' ), null, true );
	
	// front css
	wp_enqueue_style( 'Gutenberg_block_theme_starter-front-css', get_template_directory_uri() . '/Gutenberg-block-theme-starter/css/front.css' );
    
}


// Include in your function.php file
// 
// require get_template_directory() . '/Gutenberg-block-theme-starter/js/gutenberg-block-theme-starter.php';
