<?php
/**
 * RAW Team Slide Shortcode.
 *
 * This file is part of the Acronyms RAW Theme Shortcodes ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Shortcodes
 * @since 1.0.0
 */

add_action(
	'init',
	function () {
		add_shortcode(
			'raw-team-slide',
			function ( $atts ) {

				$atts = shortcode_atts(
					array(
						'image' => 27177,
						'texto' => 'Nombre, puesto',
					),
					$atts,
					'raw-team-slide'
				);

				return sprintf(
					'<div class="slide">%s <span>%s</span></div>',
					wp_get_attachment_image( (int) $atts['image'], array( 250, 350 ) ),
					$atts['texto']
				);
			}
		);
	}
);
