<?php
/**
 * RAW Settings Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Settings
 * @since 1.0.0
 */

namespace Acronyms\RAW;

/**
 * RAW Settings Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @since 1.0.0
 */
abstract class Settings {
	/**
	 * ID of the settings
	 *
	 * @var string
	 */
	public string $settings_id = '';

	/**
	 * Tabs for the settings page
	 *
	 * @var array
	 */
	public array $tabs = array( 'general' => 'General' );

	/**
	 * Settings from database
	 *
	 * @var array
	 */
	protected array $settings = array();

	/**
	 * Array of fields for the general tab
	 * array(
	 *  'tab_slug' => array(
	 *      'field_name' => [],
	 *      ),
	 *  )
	 *
	 * @var array
	 */
	protected array $fields = array();

	/**
	 * Data gotten from POST
	 *
	 * @var array
	 */
	protected array $posted_data = array();

	/**
	 * Get the settings from the database
	 *
	 * @return void
	 */
	public function init_settings(): void {

		$this->settings = (array) get_option( $this->settings_id );

		foreach ( $this->fields as $tab_key => $tab ) {
			foreach ( $tab as $name => $field ) {
				if ( isset( $this->settings[ $name ] ) ) {
					$this->fields[ $tab_key ][ $name ]['default'] = $this->settings[ $name ];
				}
			}
		}
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

		update_option( $this->settings_id, $this->settings );
	}

	/**
	 * Gets an option from the settings API, using defaults if necessary to prevent undefined notices.
	 *
	 * @param  string $key Option key.
	 * @param  mixed  $empty_value Empty value.
	 * @return mixed  The value specified for the option or a default value for the option.
	 */
	public function get_option( $key, $empty_value = null ): mixed {

		if ( empty( $this->settings ) ) {
			$this->init_settings();
		}

		// Get option default if unset.
		if ( ! isset( $this->settings[ $key ] ) ) {
			$form_fields = $this->fields;

			foreach ( $this->tabs as $tab_key => $tab_title ) {
				if ( isset( $form_fields[ $tab_key ][ $key ] ) ) {
					$this->settings[ $key ] = $form_fields[ $tab_key ][ $key ]['default'] ?? '';
				}
			}
		}

		if ( ! is_null( $empty_value ) && empty( $this->settings[ $key ] ) && '' === $this->settings[ $key ] ) {
			$this->settings[ $key ] = $empty_value;
		}

		return $this->settings[ $key ];
	}

	/**
	 * Validate text field
	 *
	 * @param  string $key name of the field.
	 * @return string
	 */
	public function validate_text( $key ): string {

		$text = $this->get_option( $key );

		if ( isset( $this->posted_data[ $key ] ) ) {
			$text = wp_kses_post( trim( stripslashes( $this->posted_data[ $key ] ) ) );
		}

		return $text;
	}

	/**
	 * Validate textarea field
	 *
	 * @param  string $key name of the field.
	 * @return string
	 */
	public function validate_textarea( $key ): string {

		$text = $this->get_option( $key );

		if ( isset( $this->posted_data[ $key ] ) ) {
			$text = wp_kses(
				trim( stripslashes( $this->posted_data[ $key ] ) ),
				array_merge(
					array(
						'iframe' => array(
							'src'   => true,
							'style' => true,
							'id'    => true,
							'class' => true,
						),
					),
					wp_kses_allowed_html( 'post' )
				)
			);
		}

		return $text;
	}

	/**
	 * Validate WPEditor field
	 *
	 * @param  string $key name of the field.
	 * @return string
	 */
	public function validate_wpeditor( $key ): string {

		$text = $this->get_option( $key );

		if ( isset( $this->posted_data[ $key ] ) ) {
			$text = wp_kses(
				trim( stripslashes( $this->posted_data[ $key ] ) ),
				array_merge(
					array(
						'iframe' => array(
							'src'   => true,
							'style' => true,
							'id'    => true,
							'class' => true,
						),
					),
					wp_kses_allowed_html( 'post' )
				)
			);
		}

		return $text;
	}

	/**
	 * Validate select field
	 *
	 * @param  string $key name of the field.
	 * @return string
	 */
	public function validate_select( $key ): string {

		$value = $this->get_option( $key );

		if ( isset( $this->posted_data[ $key ] ) ) {
			$value = stripslashes( $this->posted_data[ $key ] );
		}

		return $value;
	}

	/**
	 * Validate radio
	 *
	 * @param  string $key name of the field.
	 * @return string
	 */
	public function validate_radio( $key ): string {

		$value = $this->get_option( $key );

		if ( isset( $this->posted_data[ $key ] ) ) {
			$value = stripslashes( $this->posted_data[ $key ] );
		}

		return $value;
	}

	/**
	 * Validate checkbox field
	 *
	 * @param  string $key name of the field.
	 * @return string
	 */
	public function validate_checkbox( $key ): string {

		$status = '';

		if ( isset( $this->posted_data[ $key ] ) && ! empty( $this->posted_data[ $key ] ) ) {
			$status = $this->posted_data[ $key ];
		}

		return $status;
	}

	/**
	 * Adding fields
	 *
	 * @param array  $options options for the field to add.
	 * @param string $tab tab for which the field is.
	 */
	public function add_field( $options, $tab = 'general' ): void {

		$allowed_field_types = array(
			'text',
			'textarea',
			'wpeditor',
			'select',
			'radio',
			'checkbox',
		);

		// If a type is set that is now allowed, don't add the field.
		if ( ! empty( $options['type'] ) && ! in_array( $options['type'], $allowed_field_types, true ) ) {
			return;
		}

		$defaults = array(
			'name'        => '',
			'title'       => '',
			'placeholder' => '',
			'type'        => 'text',
			'options'     => array(),
			'default'     => '',
			'desc'        => '',
		);

		$options = array_merge( $defaults, $options );

		if ( empty( $options['name'] ) ) {
			return;
		}

		foreach ( $this->fields as $tabs ) {
			if ( isset( $tabs[ $options['name'] ] ) ) {
				return;
			}
		}

		// If there are options set, then use the first option as a default value.
		if ( ! empty( $options['options'] ) && empty( $options['default'] ) ) {
			$array_options      = json_decode( wp_json_encode( $options['options'], true ) );
			$array_values       = array_values( $array_options );
			$array_keys         = array_map( 'sanitize_key', $array_values );
			$options['options'] = array_combine( $array_keys, $array_values );
			$options['default'] = $array_keys[0];
		}

		if ( ! isset( $this->fields[ $tab ] ) ) {
			$this->fields[ $tab ] = array();
		}

		$array_name = is_array( $options['name'] ) ? $options['name'][0] : $options['name'];

		$this->fields[ $tab ][ $array_name ] = $options;
	}

	/**
	 * Adding tab
	 *
	 * @param array $options options.
	 */
	public function add_tab( $options ): void {

		$defaults = array(
			'slug'  => '',
			'title' => '',
		);

		$options = array_merge( $defaults, $options );

		if ( empty( $options['slug'] ) || empty( $options['title'] ) ) {
			return;
		}

		$this->tabs[ $options['slug'] ] = $options['title'];
	}

	/**
	 * Rendering fields
	 *
	 * @param  string $tab slug of tab.
	 * @return void
	 */
	public function render_fields( $tab ): void {

		if ( ! isset( $this->fields[ $tab ] ) ) {

			print '<p>There are no settings on these page.</p>';

			return;

		}

		foreach ( $this->fields[ $tab ] as $name => $field ) {
			$this->{ 'render_' . $field['type'] }( $field );
		}
	}

	/**
	 * Render text field
	 *
	 * @param  string $field options.
	 * @return void
	 */
	public function render_text( $field ): void {

		// phpcs:ignore WordPress.PHP.DontExtract
		extract( $field );

		$saved = get_post_meta( get_the_ID(), $name, true );

		printf(
			'<div class="raw"><label for="%2$s"><span>%5$s</span> <input type="%1$s" name="%2$s" id="%2$s" value="%3$s" placeholder="%4$s" /></label></div>',
			esc_attr( $type ),
			esc_attr( $name ),
			esc_attr( empty( $saved ) ? $default : $saved ),
			esc_attr( $placeholder ),
			esc_attr( $title )
		);

		if ( ! empty( $desc ) ) {
			print '<p class="description">' . esc_html( $desc ) . '</p>';
		}
	}

	/**
	 * Render textarea field
	 *
	 * @param  string $field options.
	 * @return void
	 */
	public function render_textarea( $field ): void {

		// phpcs:ignore WordPress.PHP.DontExtract
		extract( $field );

		$saved = get_post_meta( get_the_ID(), $name, true );

		printf(
			'<div class="raw"><label for="%1$s"><span>%4$s</span> <textarea name="%1$s" id="%1$s" placeholder="%2$s" >%3$s</textarea></label></div>',
			esc_attr( $type ),
			esc_attr( $name ),
			esc_attr( empty( $saved ) ? $default : $saved ),
			esc_attr( $placeholder )
		);

		if ( ! empty( $desc ) ) {
			print '<p class="description">' . esc_html( $desc ) . '</p>';
		}
	}

	/**
	 * Render WPEditor field
	 *
	 * @param  string $field  options.
	 * @return void
	 */
	public function render_wpeditor( $field ): void {

		// phpcs:ignore WordPress.PHP.DontExtract
		extract( $field );

		$saved = get_post_meta( get_the_ID(), $name, true );

		printf( '<div class="raw"><label for="%1$s"><span>%2$s</span> ', esc_attr( $name ), esc_html( $title ) );

		wp_editor(
			( empty( $saved ) ? $default : $saved ),
			esc_attr( $name ),
			array(
				'wpautop' => false,
				'teeny'   => true,
			)
		);

		print '</label></div>';

		if ( ! empty( $desc ) ) {
			print '<p class="description">' . esc_html( $desc ) . '</p>';
		}
	}

	/**
	 * Render select field
	 *
	 * @param  string $field options.
	 * @return void
	 */
	public function render_select( $field ): void {

		// phpcs:ignore WordPress.PHP.DontExtract
		extract( $field );

		$saved = get_post_meta( get_the_ID(), $name, true );
		?>

		<div class="raw">
			<?php printf( '<label for="%1$s"><span>%2$s</span></label>', esc_attr( $name ), esc_html( $title ) ); ?>
			<?php
				$filled_options = '';

			foreach ( $options as $value => $text ) {
				$filled_options .= '<option ' . selected( empty( $saved ) ? $default : $saved, $value, false ) . ' value="' . $value . '">' . $text . '</option>';
			}

				printf(
					'<select name="%1$s" id="%1$s">%2$s</select>',
					esc_attr( $name ),
					wp_kses(
						$filled_options,
						array(
							'option' => array(
								'selected' => array(),
								'value'    => array(),
							),
						)
					)
				);

			if ( ! empty( $desc ) ) {
				print '<p class="description">' . esc_html( $desc ) . '</p>';
			}
			?>
		</div>

		<?php
	}

	/**
	 * Render radio
	 *
	 * @param  string $field options.
	 * @return void
	 */
	public function render_radio( $field ): void {

		// phpcs:ignore WordPress.PHP.DontExtract
		extract( $field );

		$saved = get_post_meta( get_the_ID(), $name, true );
		?>

		<tr>
			<th>
				<?php printf( '<label for="%1$s">%2$s</label>', esc_attr( $name ), esc_html( $title ) ); ?>
			</th>
			<td>
				<?php
				foreach ( $options as $value => $text ) {
					printf(
						'<input type="%1$s" name="%2$s" id="%2$s" value="%3$s" %4$s />',
						esc_attr( $type ),
						esc_attr( $name ),
						esc_attr( empty( $saved ) ? $default : $saved ),
						checked( empty( $saved ) ? $default : $saved, $value, false )
					);
				}

				if ( ! empty( $desc ) ) {
					print '<p class="description">' . esc_html( $desc ) . '</p>';
				}
				?>
			</td>
		</tr>

		<?php
	}

	/**
	 * Render checkbox field
	 *
	 * @param  string $field options.
	 * @return void
	 */
	public function render_checkbox( $field ): void {

		// phpcs:ignore WordPress.PHP.DontExtract
		extract( $field );

		$saved = get_post_meta( get_the_ID(), $name, true );
		?>

		<ul>
			<?php
				printf(
					'<li><label for="%2$s"><input type="%1$s" name="%2$s" id="%2$s" value="%3$s" %4$s /> %5$s</label></li>',
					esc_attr( $type ),
					esc_attr( $name ),
					( empty( $saved ) ? '1' : esc_attr( $saved ) ),
					checked( ( empty( $saved ) ? $default : $saved ), '1', false ),
					esc_html( $desc )
				);
			?>
		</ul>

		<?php
	}
}
