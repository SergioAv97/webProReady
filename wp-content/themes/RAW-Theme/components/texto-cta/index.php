<?php
/**
 * Componente: Texto CTA.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component texto-cta">
	<div class="container">

		<p class="title">
		<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-cta_title', true ) ) ?: 'Oficina de Soluciona Mi Deuda en Madrid'
		?>
		</p>

		<p class="subtitle">
		<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-cta_subtitle', true ) ) ?: 'Paseo de la Castellana 113, 1º, 28046, Madrid'
		?>
		</p>

		<?php
		printf(
			'<a role="button" href="%s">%s</a>',
			esc_url( get_post_meta( get_the_ID(), 'raw_texto-cta_link_url', true ) ) ?: 'tel:+34910916445',
			esc_html( get_post_meta( get_the_ID(), 'raw_texto-cta_link_text', true ) ) ?: 'Pide tu cita previa para acudir a nuestra oficina en Madrid',
		)
		?>

	</div>
</div>