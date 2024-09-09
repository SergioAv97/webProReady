<?php
/**
 * RAW Engine main Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

namespace Acronyms;

use Acronyms\RAW\Components;
use Acronyms\RAW\Shortcodes;

/**
 * RAW Engine main Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @since 1.0.0
 */
class RAW {

	/**
	 * Global styles
	 *
	 * @var array Global styles.
	 */
	public array $global_styles = array();

	/**
	 * Construct function.
	 */
	public function __construct() {

		// Define globals.
		define( 'RAW_VERSION', '1.4.0' );

		define( 'RAW_COMPONENTS_PATH', get_stylesheet_directory() . '/components/' );
		define( 'RAW_COMPONENTS_URI', get_stylesheet_directory_uri() . '/components/' );

		define( 'RAW_SHORTCODES_PATH', get_stylesheet_directory() . '/shortcodes/' );
		define( 'RAW_SHORTCODES_URI', get_stylesheet_directory_uri() . '/shortcodes/' );

		define( 'RAW_JS_PATH', get_stylesheet_directory() . '/js/' );
		define( 'RAW_JS_URI', get_stylesheet_directory_uri() . '/js/' );

		// Include classes.
		require get_stylesheet_directory() . '/engine/class-performance.php';
		require get_stylesheet_directory() . '/engine/class-settings.php';
		require get_stylesheet_directory() . '/engine/class-metabox.php';
		require get_stylesheet_directory() . '/engine/class-components.php';
		require get_stylesheet_directory() . '/engine/class-shortcodes.php';

		// Define static global styles.
		$this->global_styles = array(
			'raw-reset'               => get_stylesheet_directory_uri() . '/css/globals/reset.css',
			'raw-pico'                => 'https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css',
			'raw-font-awesome'        => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css',
			'raw-google-fonts'        => 'https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.2.2"',
			'raw-styles-colors'       => get_stylesheet_directory_uri() . '/css/globals/colors.css',
			'raw-styles-typography'   => get_stylesheet_directory_uri() . '/css/globals/typography.css',
			'raw-styles-buttons'      => get_stylesheet_directory_uri() . '/css/globals/buttons.css',
			'raw-styles-icons'        => get_stylesheet_directory_uri() . '/css/globals/icons.css',
			'raw-styles-architecture' => get_stylesheet_directory_uri() . '/css/globals/architecture.css',
			'raw-styles-menus'        => get_stylesheet_directory_uri() . '/css/globals/menus.css',
			'raw-styles-keyframes'    => get_stylesheet_directory_uri() . '/css/globals/keyframes.css',
			'raw-styles-slider'       => get_stylesheet_directory_uri() . '/css/globals/slider.css',
			'raw-styles-cards'        => get_stylesheet_directory_uri() . '/css/globals/cards.css',
			'raw-styles-forms'        => get_stylesheet_directory_uri() . '/css/globals/forms.css',
			'raw-styles-header'       => get_stylesheet_directory_uri() . '/css/header.css',
			'raw-styles-footer'       => get_stylesheet_directory_uri() . '/css/footer.css',
		);

		// Init components.
		new Components();

		// Init shortcodes.
		new Shortcodes();

		// Set up theme supports.
		add_action( 'after_setup_theme', array( $this, 'raw_after_setup_theme' ) );

		// Set up the theme resources.
		add_action( 'wp_enqueue_scripts', array( $this, 'load_resources' ) );

		// Set up the theme admin resources.
		add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_resources' ) );

		// Customize excerpt length.
		add_filter( 'excerpt_length', array( $this, 'raw_custom_excerpt_length' ), 666 );

		// Customize excerpt more.
		add_filter( 'excerpt_more', '__return_empty_string' );

		// ASYNC CSS files.
		add_filter( 'style_loader_tag', array( $this, 'style_loader_tag' ), 10, 2 );

		// Preconnect, Prefetch.
		add_action( 'wp_head', array( $this, 'preconnect_prefetch' ), 5 );

		// Fix wpautop priority to not run on shortcodes.
		remove_filter( 'the_content', 'wpautop' );
		add_filter( 'the_content', 'wpautop', 99 );
		add_filter( 'the_content', 'shortcode_unautop', 100 );
	}

	/**
	 * WPO : Preconnect and prefetch domains.
	 */
	public function preconnect_prefetch() {

		$domains = array(
			// Cloudflare.
			'cdn.cloudflare.com',
			'static.cloudflareinsights.com',

			// Google tracking.
			'www.googletagmanager.com',
			'www.google-analytics.com',
			'stats.g.doubleclick.net',

			// HubSpot.
			'forms.hsforms.com',

			// Google Fonts.
			'fonts.gstatic.com',
			'fonts.googleapis.com',

			// JSdelivr.
			'cdn.jsdelivr.net',
		);

		foreach ( $domains as $domain ) {
			print '<link rel="preconnect" href="' . esc_url( $domain ) . '" crossorigin>';
			print '<link rel="dns-prefetch" href="' . esc_url( $domain ) . '">';
		}
	}

	/**
	 * Proper way to enqueue scripts and styles.
	 */
	public function load_resources(): void {

		// Start Performance tweaks.
		// Move jQuery to footer.
		wp_scripts()->add_data( 'jquery', 'group', 1 );
		wp_scripts()->add_data( 'jquery-core', 'group', 1 );
		wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );

		// Remove Gutenberg block library CSS.
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-blocks-style' );
		// End Performance tweaks.

		// Enqueue global styles.
		foreach ( $this->global_styles as $k => $v ) {
			wp_register_style( $k, $v, null, RAW_VERSION );
		}

		// Enqueue global styles and specific styles as dependencies of the main CSS file.
		wp_enqueue_style( 'raw-styles-global', get_stylesheet_uri(), array_keys( $this->global_styles ), RAW_VERSION );

		// Enqueue specific author archive styles.
		if ( is_author() ) {
			wp_enqueue_style( 'raw-styles-author', get_stylesheet_directory_uri() . '/css/author.css', null, RAW_VERSION );
		}

		// Enqueue specific category archive styles.
		if ( is_category() ) {
			wp_enqueue_style( 'raw-styles-category', get_stylesheet_directory_uri() . '/css/category.css', null, RAW_VERSION );
		}

		// Enqueue specific single styles.
		if ( is_single() ) {
			wp_enqueue_style( 'raw-styles-single', get_stylesheet_directory_uri() . '/css/single.css', null, RAW_VERSION );
			wp_enqueue_style( 'raw-styles-sidebar', get_stylesheet_directory_uri() . '/css/sidebar.css', null, RAW_VERSION );
			wp_enqueue_style( 'raw-styles-shortcodes', get_stylesheet_directory_uri() . '/css/shortcodes.css', null, RAW_VERSION );
		}

		// Enqueue footer scripts.
		if ( wp_is_mobile() ) {
			wp_enqueue_script(
				'raw-scripts-global',
				get_stylesheet_directory_uri() . '/js/global.js',
				array( 'jquery' ),
				RAW_VERSION,
				array(
					'in_footer' => true,
					'strategy'  => 'async',
				)
			);
		}

		// Register component resources and enqueue dynamically just for the page and device we are in.
		$active_components = get_post_meta( get_the_ID(), 'raw_active_components', true );

		if ( $active_components ) {
			foreach ( $active_components as $component => $active ) {
				if ( $active ) {
					Components::load_component_resources( $component );
				}
			}
		}
	}

	/**
	 * Load CSS Asynchronously and eliminate blocking-resources.
	 *
	 * @param string $html HTML tag code.
	 * @param string $handle Resource name.
	 */
	public function style_loader_tag( $html, $handle ) {

		// Preload and ASYNC all CSS.
		if ( str_contains( $handle, 'raw-' ) || str_contains( $handle, 'font' ) || str_contains( $handle, 'all' ) || str_contains( $handle, 'rank' ) || 'dashicons' === $handle || 'admin-bar' === $handle ) {
			$async_html  = str_replace( 'rel="stylesheet"', 'rel="preload" as="style"', $html );
			$async_html .= str_replace( 'media="all"', 'media="print" onload="this.media=\'all\'"', $html );

			return $async_html;
		}

		return $html;
	}

	/**
	 * Proper way to enqueue scripts and styles in admin.
	 */
	public function load_admin_resources(): void {

		// Enqueue admin styles.
		wp_enqueue_style( 'raw-styles-admin', get_stylesheet_directory_uri() . '/css/admin.css', null, RAW_VERSION );

		// Enqueue admin scripts.
		wp_enqueue_script(
			'raw-scripts-admin',
			get_stylesheet_directory_uri() . '/js/admin.js',
			array( 'jquery', 'jquery-ui-core', 'jquery-ui-draggable', 'jquery-ui-sortable', 'jquery-ui-droppable' ),
			RAW_VERSION,
			true
		);
	}

	/**
	 * Set Theme defaults.
	 */
	public function raw_after_setup_theme(): void {
		/*
		 * Add Custom logo support.
		 */
		add_theme_support( 'custom-logo' );

		/*
		 * Add default posts and comments RSS feed links to head.
		 */
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded  tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 250, 250, true );

		/*
		 * Register Navigation Menus.
		 */
		register_nav_menus(
			array(
				'primary'         => __( 'Primary Menu', 'raw' ),
				'secondary'       => __( 'Secondary Menu', 'raw' ),
				'social'          => __( 'Social Menu', 'raw' ),
				'foot-navigation' => __( 'Footer Navigation', 'raw' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' )
		);

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css' ) );

		/*
		 * Third Parties: Rank Math Breadcrumbs.
		 */
		add_theme_support( 'rank-math-breadcrumbs' );
	}

	/**
	 * Set proper excerpt length.
	 */
	public function raw_custom_excerpt_length(): int {
		return 10;
	}
}
