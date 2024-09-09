<?php
/**
 * Componente: Short Code.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast short-code">
	<div class="container full">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_short-code_title', true ) ) ?: '¿Qué dicen de nosotros?'; ?></h2>

		<div id="short-code">
			<?php print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_short-code_shortcode', true ) ) ?: '[trustindex data-widget-id=142e270781ec390bfd5887b218]' ); ?>
		</div>

		<?php
			printf(
				'<a role="button" href="%1$s">%2$s</a>',
				esc_url( get_post_meta( get_the_ID(), 'raw_short-code_link_url', true ) ) ?: '#GANGSHIT',
				esc_html( get_post_meta( get_the_ID(), 'raw_short-code_link_text', true ) ) ?: 'Solicitar una asesoría'
			)
			?>
	</div>
</div>