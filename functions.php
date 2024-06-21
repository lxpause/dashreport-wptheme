<?php
/**
 * Functions and definitions
 *
 * @package dashreport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'DASHREPORT_VERSION', '1.0.0' );
define( 'DASHREPORT_DIR', rtrim( get_template_directory(), '/' ) );
/**
 * Theme setup.
 *
 * @since 1.0.0
 */
function dashreport_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Admin editor styles.
	add_theme_support( 'editor-styles' );

	// Switch default core markup for different forms to output valid HTML5.
	add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Enable block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style();
}

add_action( 'after_setup_theme', 'dashreport_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function dashreport_scripts() {
	wp_enqueue_style( 'dashreport-style', get_stylesheet_uri(), array(), DASHREPORT_VERSION );
	wp_style_add_data( 'dashreport-style', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'dashreport_scripts' );

/**
 * Register block patterns category.
 *
 * @since 1.0.0
 */
function dashreport_register_block_patterns_category() {
	register_block_pattern_category(
		'dashreport',
		array(
			'label' => esc_html__( 'dashreport', 'dashreport' ),
		)
	);
}

add_action( 'init', 'dashreport_register_block_patterns_category', 9 );

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function dashreport_register_block_styles() {
	$block_styles = array(
		'core/list'      => array(
			'checklist'        => esc_html__( 'Checklist', 'dashreport' ),
			'checklist-circle' => esc_html__( 'Checklist Circle', 'dashreport' ),
			'square'           => esc_html__( 'Square', 'dashreport' ),
			'none'             => esc_html__( 'None', 'dashreport' ),
		),
		'core/separator' => array(
			'dotted'         => esc_html__( 'Dotted', 'dashreport' ),
			'wide-thin-line' => esc_html__( 'Wide Thin Line', 'dashreport' ),
			'left-aligned'   => esc_html__( 'Left Aligned', 'dashreport' ),
			'right-aligned'  => esc_html__( 'Right Aligned', 'dashreport' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}

add_action( 'init', 'dashreport_register_block_styles' );
