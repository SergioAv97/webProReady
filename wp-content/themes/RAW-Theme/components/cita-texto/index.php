<?php
/**
 * Componente: Cita Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast cita-texto">
	<div class="container">

		<?php
		printf(
			'<h2>%s</h2>',
			esc_html( get_post_meta( get_the_ID(), 'raw_cita-texto_title', true ) ) ?: '¿Cómo se tramita la Ley de la Segunda Oportunidad?'
		);
		?>

		<?php
		printf(
			'<blockquote>%s <footer><cite>%s</cite></footer></blockquote>',
			esc_html( get_post_meta( get_the_ID(), 'raw_cita-texto_cita', true ) ) ?: 'La Ley de Segunda Oportunidad da la posibilidad de empezar de nuevo, pero debes tener en cuenta que como deudor, puedes arriesgar tu patrimonio, si tienes, para pagar tus deudas.',
			esc_html( get_post_meta( get_the_ID(), 'raw_cita-texto_autor', true ) ) ?: 'Soluciona Mi Deuda',
		)
		?>

		<?php
		printf(
			'<div>%s</div>',
			wp_kses_post( get_post_meta( get_the_ID(), 'raw_cita-texto_editor', true ) ) ?:
			'<p>El juez puede requerir la entrega de tu vivienda como parte o totalidad de pago de tu deuda. Aunque hay casos determinados en los que el juez no requerirá que entregues tu vivienda habitual.</p>
			<p>Si decides acogerte a ésta ley, uno de nuestros abogados expertos te acompañará, asesorará y defenderá en todo el proceso.</p>'
		)
		?>

	</div>
</div>