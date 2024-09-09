<?php
/**
 * RAW Form Shortcode.
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
			'raw-form',
			function ( $atts ) {

				$atts = shortcode_atts(
					array(
						'type' => array(
							'telf',
						),
					),
					$atts,
					'raw-form'
				);

				switch ( $atts['type'] ) {
					case 'telf':
						$shortcode = array(
							'script' => '<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script><script>hbspt.forms.create({ region: "eu1", portalId: "25960949", formId: "ed876b81-bb48-4c3e-a2b3-69da92e973a4" });</script>',
							'image'  => wp_get_attachment_image( 22003, 'full' ),
						);
						break;

					default:
						exit;
				}

				return sprintf(
					'<p class="title">%s</p><div class="raw-form grid"><div>%s</div> <div>%s</div></div>',
					'Cancela tus deudas y vuelve a vivir libre',
					$shortcode['script'],
					$shortcode['image']
				);
			}
		);
	}
);
