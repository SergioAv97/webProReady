<?php
/**
 * Componente: Caja Texto Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component caja-texto-texto">
	<div class="container">

		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto-texto_title', true ) ) ?: '¿Cómo funciona y cuáles son los pasos para reunificar deudas?'; ?></h2>

		<div class="grid">
			<div class="contrast">
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto-texto_box_1', true ) ) ?: '
						<p>El <b>Programa de reunificación de deudas de Soluciona</b> consiste en agrupar varias deudas en una sola para facilitar su pago.</p>
						<p>A diferencia de la reunificación de una entidad bancaria, no funciona mediante un préstamo que agrupa el resto de deudas, sino liquidando las deudas a través de negociaciones y reduciendo los importes a pagar.</p> 
						<p>Lo hacemos posible a través del <b>análisis detallado de cada deuda y el trabajo de nuestros profesionales expertos en negociación y reclamación de deuda</b>.</p>'
				?>
			</div>

			<div>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto-texto_box_2', true ) ) ?: '
						<p class="title">¿Te interesa reunificar deudas?<br>Estos son los pasos a seguir</p>
						<ol><li>Registrarte en nuestro formulario o llamar al <a href="tel:910916445">910916445</a>.</li> 
						<li>Contarnos los detalles de tu caso. Uno de nuestros asesores te escuchará atentamente al otro lado del teléfono.</li>
						<li>Evaluamos tu situación financiera y verificamos tus deudas.</li>
						<li>Te proponemos un <b>plan de liquidación ajustado</b> con el que pagarás una <b>sola cuota</b>.</li>
						<li>Negociamos y reclamaremos el importe de tus deudas.</li></ol>'
				?>
			</div>
		</div>

	</div>
</div>