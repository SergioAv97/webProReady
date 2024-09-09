<?php
/**
 * RAW Components Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

namespace Acronyms\RAW;

/**
 * RAW Components Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 */
class Components {

	/**
	 * Components array
	 *
	 * @var array
	 */
	private array $components;

	/**
	 * Construct function.
	 */
	public function __construct() {

		// Store all components for easy later management.
		$this->components = $this->get_all_components();

		// Add Active Components Metabox.
		$this->add_active_components_metabox();

		// Add Metaboxes for Active Components.
		$this->add_metaboxes_for_active_components();
	}

	/**
	 * Get all the components names and paths.
	 */
	private function get_all_components(): array {

		$components = array();

		foreach ( glob( RAW_COMPONENTS_PATH . '*' ) as $component ) {
			$components[ basename( $component ) ] = $component;
		}

		return $components;
	}

	/**
	 * Load the component code.
	 *
	 * @param string $component Component slug.
	 */
	public static function load_component_code( $component ): void {

		if ( empty( $component ) ) {
			return;
		}

		$component_code_path = RAW_COMPONENTS_PATH . $component . '/index.php';

		// Load component code.
		if ( file_exists( $component_code_path ) ) {
			load_template( $component_code_path, 1 );
		}
	}

	/**
	 * Load the component resources.
	 *
	 * @param string $component Component slug.
	 */
	public static function load_component_resources( $component ): void {

		if ( empty( $component ) ) {
			return;
		}

		$css_deps = null;

		// Enqueue component styles and specific styles as dependencies of the main CSS/JS file.
		$component_css_uri = RAW_COMPONENTS_URI . $component . '/' . $component . '.css';
		$component_js_uri  = RAW_COMPONENTS_URI . $component . '/' . $component . '.js';

		// Set CSS dependencies.
		if ( 'buttons' === $component ) {
			$css_deps = array( 'raw-styles-colors' );
		}

		if ( self::resource_file_exists( $component_css_uri ) ) {
			wp_enqueue_style( 'raw-styles-' . $component, $component_css_uri, $css_deps, RAW_VERSION );
		}

		if ( self::resource_file_exists( $component_js_uri ) ) {
			wp_enqueue_script( 'raw-scripts-' . $component, $component_js_uri, array( 'jquery' ), RAW_VERSION, array( 'in_footer' => true ) );
		}
	}

	/**
	 * Add the active components metaboxes.
	 */
	public function add_active_components_metabox(): void {

		// Load Active Components MetaBox.
		$mb_active_components = new Metabox( 'RAW &rarr; Componentes', 'raw_active_components', 'side', 'high' );

		$this->order_components();

		// Display a checkbox for each Component but save as one field.
		foreach ( $this->components as $component => $component_src ) {
			$component_name_esc = esc_attr( $component );

			if ( 'index.php' === esc_attr( $component ) ) {
				continue;
			}

			$mb_active_components->add_field(
				array(
					'type'  => 'checkbox',
					'id'    => $component_name_esc,
					'name'  => $component_name_esc,
					'title' => $component_name_esc,
					'desc'  => self::normalize_component_name( $component_name_esc ),
				)
			);
		}
	}

	/**
	 * Add the active components metaboxes.
	 */
	public function add_metaboxes_for_active_components(): void {

		$all_components = $this->get_all_components();

		$post_id = self::get_the_damn_id();

		if ( ! $post_id ) {
			return;
		}

		$active_components = get_post_meta( $post_id, 'raw_active_components', true );

		// Display the form, using the current value.
		if ( ! empty( $active_components ) ) {
			foreach ( $active_components as $component => $active ) {
				if ( ! $active ) {
					continue;
				}

				// Clean deleted components.
				if ( ! isset( $all_components[ $component ] ) ) {
					unset( $active_components[ $component ] );
					continue;
				}

				$component_name_esc = esc_attr( $component );

				// Add Component Metabox.
				$mb_component = new Metabox( 'RAW &rarr; ' . self::normalize_component_name( $component_name_esc ), 'raw_component_' . $component_name_esc, 'advanced', 'high' );

				// Add Component Metabox fields.
				$component_metas = wp_json_file_decode( RAW_COMPONENTS_PATH . $component_name_esc . '/metas.json' );

				if ( ! empty( $component_metas ) ) {
					foreach ( $component_metas as $field_key => $field_type ) {
						if ( 'select' === $field_type ) {
							$mb_component->add_field(
								array(
									'type'    => $field_type,
									'id'      => $field_key,
									'name'    => $field_key,
									'title'   => self::normalize_component_field_name( $field_key, $component_name_esc ),
									'options' => $component_metas->{'raw_' . $component_name_esc . '_type_options'},
								)
							);
						} else {
							$mb_component->add_field(
								array(
									'type'  => $field_type,
									'id'    => $field_key,
									'name'  => $field_key,
									'title' => self::normalize_component_field_name( $field_key, $component_name_esc ),
								)
							);
						}
					}
				}
			}
		}
	}

	/**
	 * Normalize component names.
	 *
	 * @param string $name Component slug.
	 */
	private static function normalize_component_name( $name ): string {

		return ucwords(
			str_replace(
				array( '_', '-', 'cta', 'faq' ),
				array( ' ', ' ', 'CTA', 'FAQ' ),
				$name
			)
		);
	}

	/**
	 * Normalize component field names.
	 *
	 * @param string $field Field name.
	 * @param string $component Component name.
	 */
	public static function normalize_component_field_name( $field, $component ): string {

		return ucwords(
			str_replace(
				array( 'raw_' . $component . '_', '_', '-', 'cta', 'faq', 'url' ),
				array( '', ' ', ' ', 'CTA', 'FAQ', 'URL' ),
				$field
			)
		);
	}

	/**
	 * Get the current post ID no matter what!
	 */
	private static function get_the_damn_id(): bool|int {

		// phpcs:ignore
		return ( isset( $_GET['post'] ) ? intval( $_GET['post'] ) : get_the_ID() ) ?: false;
	}

	/**
	 * Check if resource file exists.
	 *
	 * @param string $file Resource File path.
	 */
	private static function resource_file_exists( $file ): bool {

		$headers  = get_headers( $file, true );
		$response = ( $headers && isset( $headers[0] ) ? $headers[0] : null );

		return str_contains( $response, '200' );
	}

	/**
	 * Order components.
	 */
	private function order_components(): void {

		$post_id = self::get_the_damn_id();

		// Load Components Order and Active Components.
		$components_order  = json_decode( get_post_meta( $post_id, 'raw_active_components_order', true ) );
		$active_components = (array) get_post_meta( $post_id, 'raw_active_components', true );
		$actives           = 0;

		// Check for Active Components.
		foreach ( $active_components as $component => $active ) {
			if ( ! empty( $active ) ) {
				++$actives;
			}
		}

		// Do not run if not Active Components.
		if ( ! $actives ) {
			return;
		}

		// Load Component.
		$all_components     = $this->get_all_components();
		$ordered_components = array();

		// Iterate components to fill new ordered array.
		foreach ( $components_order as $position => $component ) {
			// Clean deleted components.
			if ( ! isset( $all_components[ $component ] ) ) {
				unset( $this->components[ $component ] );
				continue;
			}

			$ordered_components[ $component ] = $this->components[ $component ];
		}

		$this->components = $ordered_components + $all_components;
	}

	/**
	 * Maybe order components.
	 */
	public function maybe_order_components(): bool|array {

		$this->order_components();

		if ( ! $this->components ) {
			return false;
		}

		return $this->components;
	}
}
