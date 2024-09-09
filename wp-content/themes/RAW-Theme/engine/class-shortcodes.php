<?php
/**
 * RAW Shortcodes Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Shortcodes
 * @since 1.0.0
 */

namespace Acronyms\RAW;

/**
 * RAW Shortcodes Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @since 1.0.0
 */
class Shortcodes {

	/**
	 * Shortcodes array.
	 *
	 * @var array
	 */
	private array $shortcodes;

	/**
	 * Construct function.
	 */
	public function __construct() {

		// Store all shortcodes for easy later management.
		$this->shortcodes = $this->get_all_shortcodes();

		foreach ( $this->shortcodes as $shortcode => $shortcode_path ) {
			self::load_shortcode_code( $shortcode );
		}
	}

	/**
	 * Get all the shortcodes names and paths.
	 */
	private function get_all_shortcodes(): array {

		$shortcodes = array();

		foreach ( glob( RAW_SHORTCODES_PATH . '*' ) as $shortcode ) {
			$shortcodes[ basename( $shortcode ) ] = $shortcode;
		}

		return $shortcodes;
	}

	/**
	 * Load the shortcode code.
	 *
	 * @param string $shortcode Shortcode.
	 */
	public static function load_shortcode_code( $shortcode ): void {

		if ( empty( $shortcode ) ) {
			return;
		}

		$shortcode_code_path = RAW_SHORTCODES_PATH . $shortcode . '/index.php';

		// Load shortcode code.
		if ( file_exists( $shortcode_code_path ) ) {
			load_template( $shortcode_code_path, 1 );
		}
	}
}
