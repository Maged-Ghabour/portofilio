<?php
/**
 * Maged Portfolio functions and definitions
 *
 * @package Maged_Portfolio
 */

if ( ! function_exists( 'maged_portfolio_setup' ) ) :
	function maged_portfolio_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'maged_portfolio_setup' );

/**
 * Enqueue scripts and styles.
 */
function maged_portfolio_scripts() {
	// CSS
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&family=Poppins:wght@300;400;600;700;800&display=swap', array(), null );
	wp_enqueue_style( 'aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4' );
	wp_enqueue_style( 'maged-portfolio-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1' );

	// JS
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js', array(), '2.0.12', true );
	wp_enqueue_script( 'aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), '2.3.4', true );
	wp_enqueue_script( 'maged-portfolio-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'typed-js', 'aos-js'), '1.0.1', true );

	// Pass dynamic strings to JS for Typed.js
	$typed_en = get_theme_mod('maged_typed_en', 'PHP Developer, Laravel Developer, Full Stack Developer, Web Developer');
	$typed_ar = get_theme_mod('maged_typed_ar', 'مطور PHP, مطور Laravel, مطور ويب متكامل, مطور ويب');
	
	$typed_en_arr = array_map('trim', explode(',', $typed_en));
	$typed_ar_arr = array_map('trim', explode(',', $typed_ar));

	$inline_js = "window.magedTypedStrings = {
		en: " . json_encode($typed_en_arr) . ",
		ar: " . json_encode($typed_ar_arr) . "
	};";
	
	wp_add_inline_script( 'maged-portfolio-script', $inline_js, 'before' );
}
add_action( 'wp_enqueue_scripts', 'maged_portfolio_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
