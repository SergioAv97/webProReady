<?php
/**
 * RAW Metabox Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Metabox
 * @since 1.0.0
 */

namespace Acronyms\RAW;

/**
 * RAW Metabox Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 */
class Metabox extends Settings {

	/**
	 * Metabox Title
	 *
	 * @var string
	 */
	protected string $title = '';

	/**
	 * Metabox ID
	 *
	 * @var string
	 */
	protected string $slug = '';

	/**
	 * Array of post types for which we allow the metabox
	 *
	 * @var array
	 */
	protected array $post_types = array( 'post', 'page' );

	/**
	 * Post ID used to save or retrieve the settings
	 *
	 * @var int
	 */
	protected int $post_id = 0;

	/**
	 * Metabox context
	 *
	 * @var string
	 */
	protected string $context = '';

	/**
	 * Metabox priority
	 *
	 * @var string
	 */
	protected string $priority = '';

	/**
	 * Construct function.
	 *
	 * @param string $title Metabox title.
	 * @param string $slug Metabox slug.
	 * @param string $context Metabox context.
	 * @param string $priority Metabox priority.
	 */
	public function __construct( $title, $slug, $context = 'advanced', $priority = 'default' ) {

		if ( empty( $title ) || empty( $slug ) || empty( $context ) || empty( $priority ) ) {
			return;
		}

		$this->title       = $title;
		$this->slug        = $slug;
		$this->post_types  = array( 'page' );
		$this->settings_id = $this->slug;
		$this->context     = $context;
		$this->priority    = $priority;

		add_action( 'add_meta_boxes', array( $this, 'register' ) );
		add_action( 'save_post', array( $this, 'save_meta_settings' ) );
	}

	/**
	 * Register metabox.
	 *
	 * @param string $post_type Post type.
	 */
	public function register( $post_type ): void {

		if ( in_array( $post_type, $this->post_types, true ) ) {
			add_meta_box( $this->slug, $this->title, array( $this, 'render' ), $post_type, $this->context, $this->priority );
		}
	}

	/**
	 * Render metabox.
	 *
	 * @param object $post Post object.
	 */
	public function render( $post ): void {

		$this->post_id = $post->ID;

		$this->init_settings();

		wp_nonce_field( 'metabox_' . $this->slug . '_nonce', 'metabox_' . $this->slug . '_nonce' );

		$this->render_fields( 'general' );
	}

	/**
	 * Get the settings from the database.
	 *
	 * @return void
	 */
	public function init_settings(): void {

		$meta = get_post_meta( $this->post_id, $this->settings_id, true );

		if ( ! empty( $meta ) ) {
			$this->settings = $meta;
		}

		foreach ( $this->fields as $tab_key => $tab ) {
			foreach ( $tab as $name => $field ) {
				if ( isset( $this->settings[ $name ] ) ) {
					$this->fields[ $tab_key ][ $name ]['default'] = $this->settings[ $name ];
				}
			}
		}
	}

	/**
	 * Save meta settings.
	 *
	 * @param int $post_id Post ID.
	 */
	public function save_meta_settings( $post_id ) {

		// Check if our nonce is set.
		if ( ! isset( $_POST[ 'metabox_' . $this->slug . '_nonce' ] ) ) {
			return $post_id;
		}

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( sanitize_key( $_POST[ 'metabox_' . $this->slug . '_nonce' ] ), 'metabox_' . $this->slug . '_nonce' ) ) {
				return $post_id;
		}

		/*
		* If this is an autosave, our form has not been submitted,
		* so we don't want to do anything.
		*/
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
		}

		$this->posted_data = $_POST;
		$this->post_id     = $post_id;

		$this->save_settings();

		return $post_id;
	}

	/**
	 * Save settings from POST.
	 */
	public function save_settings(): void {

		if ( empty( $this->settings ) ) {
			$this->init_settings();
		}

		foreach ( $this->fields as $tab => $tab_data ) {
			foreach ( $tab_data as $name => $field ) {
				$this->settings[ $name ] = $this->{ 'validate_' . $field['type'] }( $name );
			}
		}

		// Save all metaboxes in each content type that start with "raw_".
		foreach ( $this->posted_data as $k => $v ) {
			if ( str_contains( $k, 'raw_' ) && ! str_contains( $k, 'nonce' ) && ! empty( $v ) ) {
				update_post_meta( $this->post_id, $k, $v );
			}
		}

		update_post_meta( $this->post_id, $this->settings_id, $this->settings );
	}
}
