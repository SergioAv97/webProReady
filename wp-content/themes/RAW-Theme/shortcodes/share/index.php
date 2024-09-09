<?php
/**
 * RAW Share Shortcode.
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
			'raw-share',
			function () {
				$title = get_the_title();
				$link  = get_permalink();

				$fb   = sprintf( 'https://facebook.com/sharer.php?u=%s', $link );
				$tw   = sprintf( 'https://twitter.com/share?url=%s&text=%s', $link, $title );
				$in   = sprintf( 'https://www.linkedin.com/sharing/share-offsite/?url=%s', $link );
				$mail = sprintf( 'mailto:?subject=%s&body=%s', $title, $link );
				?>

	<div class="raw-share">

		<strong>Comparte</strong>

			<a class="fb" href="<?php print esc_url( $fb ); ?>" title="<?php print esc_attr( $title ); ?>">
			<i class="fa-brands fa-facebook"></i> <span>Facebook</span>
		</a>

			<a class="tw" href="<?php print esc_url( $tw ); ?>" title="<?php print esc_attr( $title ); ?>">
			<i class="fa-brands fa-twitter"></i> <span>Twitter</span>
		</a>

			<a class="in" href="<?php print esc_url( $in ); ?>" title="<?php print esc_attr( $title ); ?>">
			<i class="fa-brands fa-linkedin"></i> <span>LinkedIn</span>
		</a>

			<a class="mail" href="<?php print esc_url( $mail ); ?>" title="<?php print esc_attr( $title ); ?>">
			<i class="fa-solid fa-envelope"></i> <span>Email</span>
		</a>

	</div>

				<?php
			}
		);
	}
);
