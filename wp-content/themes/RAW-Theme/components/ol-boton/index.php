<?php
/**
 * Componente: OL Botón.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast ol-boton">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_ol-boton_title', true ) ) ?: '¿Cómo gestionamos la Ley de Segunda Oportunidad?'; ?></h2>

		<?php
		print wp_kses_post( get_post_meta( get_the_ID(), 'raw_ol-boton_editor', true ) ) ?: '
		<ol>
			<li>Te registras en nuestro formulario</li>
			<li>Nos cuentas tu caso detalladamente</li>
			<li>Comprobamos que reúnes los requisitos y <u>además que la Ley sea beneficiosa para ti y tu patrimonio</u></li>
			<li>Recopilamos la documentación necesaria</li>
			<li>Presentamos la documentación en el Juzgado para solicitar la cancelación de tus deudas</li>
		</ol>'
		?>

		<?php
			printf(
				'<a id="boton-ol" role="button" class="%s" href="%s">%s</a>',
				esc_attr( get_post_meta( get_the_ID(), 'raw_ol-boton_link_class', true ) ) ?: 'raw-balance-scale anticontrast ffs',
				esc_url( get_post_meta( get_the_ID(), 'raw_ol-boton_link_url', true ) ) ?: '/ley-de-la-segunda-oportunidad/#GANG',
				esc_html( get_post_meta( get_the_ID(), 'raw_ol-boton_link_text', true ) ) ?: 'Quiero una segunda oportunidad'
			)
			?>
	</div>
</div>