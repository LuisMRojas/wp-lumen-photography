<?php
/**
 * Lumen — funciones del tema.
 *
 * @package Lumen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Soportes del tema y estilos del editor.
 */
function lumen_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( lumen_fonts_url(), 'assets/css/lumen.css' ) );
}
add_action( 'after_setup_theme', 'lumen_setup' );

/**
 * URL de Google Fonts usadas por el tema.
 */
function lumen_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Inter:wght@300;400;500&display=swap';
}

/**
 * Hojas de estilo del front-end.
 */
function lumen_enqueue() {
	$ver = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'lumen-fonts', lumen_fonts_url(), array(), null );
	wp_enqueue_style( 'lumen', get_theme_file_uri( 'assets/css/lumen.css' ), array(), $ver );
	wp_enqueue_script( 'lumen-reveal', get_theme_file_uri( 'assets/js/reveal.js' ), array(), $ver, array( 'strategy' => 'defer', 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'lumen_enqueue' );

/**
 * Categoría propia para los patrones.
 */
function lumen_pattern_category() {
	register_block_pattern_category( 'lumen', array( 'label' => __( 'Lumen · Fotografía', 'lumen' ) ) );
}
add_action( 'init', 'lumen_pattern_category' );

/**
 * Estilos de bloque adicionales.
 */
function lumen_block_styles() {
	register_block_style(
		'core/gallery',
		array(
			'name'  => 'lumen-masonry',
			'label' => __( 'Mosaico', 'lumen' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'lumen-grain',
			'label' => __( 'Película (grano)', 'lumen' ),
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'  => 'lumen-eyebrow',
			'label' => __( 'Antetítulo', 'lumen' ),
		)
	);
}
add_action( 'init', 'lumen_block_styles' );

/**
 * Los enlaces de plantillas y patrones son relativos a la raíz ("/#seccion").
 * Se convierten a la URL real del sitio para que funcionen también en
 * instalaciones en subdirectorio (p. ej. WordPress Playground).
 */
function lumen_absolute_links( $html ) {
	if ( false === strpos( $html, '="/' ) ) {
		return $html;
	}
	$home = untrailingslashit( home_url() );
	return preg_replace( '#(href|action)="/(?!/)#', '$1="' . esc_url( $home ) . '/', $html );
}
add_filter( 'render_block', 'lumen_absolute_links' );
