<?php
/**
 * Componente: Cita.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast cita">
	<div class="container">

		<?php
		printf(
			'<h2>%s</h2>',
			esc_html( get_post_meta( get_the_ID(), 'raw_cita_title', true ) ) ?:
				'¿Qué es la LSO o Ley de la Segunda Oportunidad?'
		);

		printf(
			'<blockquote>%s <footer><cite>%s</cite></footer></blockquote>',
			esc_html( get_post_meta( get_the_ID(), 'raw_cita_quote', true ) ) ?: 'La Ley de la Segunda Oportunidad es un mecanismo legal previsto dentro de la Ley Concursal, que permite cancelar las deudas de personas físicas, ya sean autónomos o trabajadores por cuenta ajena.',
			esc_html( get_post_meta( get_the_ID(), 'raw_cita_author', true ) ) ?: 'Soluciona Mi Deuda',
		)
		?>

	</div>
</div>