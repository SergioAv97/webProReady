<?php
/**
 * RAW Accordion Shortcode.
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
			'raw-accordion',
			function ( $atts, $content = null ) {
				ob_start();
				?>
<div class="raw-accordion">
	<ul class="accordion">
				<?php print do_shortcode( $content ); ?>
	</ul>
</div>
				<?php
				return ob_get_clean();
			}
		);
	}
);

/**
 * RAW Accordion Title Shortcode.
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
			'raw-accordion-title',
			function ( $atts, $content = null ) {
				$atts = shortcode_atts( array( 'id' => 0 ), $atts, 'raw-accordion-title' );

				return sprintf(
					'<li><input type="checkbox" class="hidden" id="raw_accordion_title_%1$s"><h3><label for="raw_accordion_title_%1$s">%2$s</label></h3>',
					$atts['id'],
					$content
				);
			}
		);
	}
);


/**
 * RAW Accordion Content Shortcode.
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
			'raw-accordion-content',
			function ( $atts, $content = null ) {
				return sprintf( '<div>%s</div>', $content );
			}
		);
	}
);