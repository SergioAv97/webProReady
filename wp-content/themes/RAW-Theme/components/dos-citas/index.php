<?php
/**
 * Componente: Dos Citas.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast dos-citas">
	<div class="container">

		<?php
		printf(
			'<h2>%s</h2>',
			esc_html( get_post_meta( get_the_ID(), 'raw_dos-citas_title', true ) ) ?:
				'¿En qué consiste nuestro programa de reunificación de deudas?'
		)
		?>

		<div class="grid">
			<?php
			printf(
				'<blockquote>%s</blockquote>',
				esc_html( get_post_meta( get_the_ID(), 'raw_dos-citas_cita_1', true ) ) ?: 'Expertos en gestión del impago y sobreendeudamiento de autónomos y particulares',
			)
			?>

			<div>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_dos-citas_editor_1', true ) ) ?:
					'<p>Tanto si estás ya en impago como si te encuentras en riesgo de estarlo en unos meses, aquí ofrecemos tanto la mejor asesoría financiera y legal para salir de esta situación como un amplio abanico de servicios legales a los que se puede recurrir.</p>
					<p>Todo ello, pensado para que salgas de tus deudas de la mejor manera posible y adaptándonos completamente a la situación en la que te encuentres.</p>'
			?>
			</div>
		</div>

		<div class="grid">
			<div>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_dos-citas_editor_2', true ) ) ?:
					'<p>Reunificamos todos tus pagos en una sola mensualidad menor y llegamos acuerdos con las entidades, además de analizar qué servicios legales pudiéramos aplicar para que salgas cuanto antes de la situación.</p>
					<p>La Ley de la Segunda Oportunidad es un mecanismo legal mediante el cual particulares y autónomos de buena fe pueden cancelar sus deudas por Ley.</p>'
			?>
			</div>

			<?php
			printf(
				'<blockquote>%s</blockquote>',
				esc_html( get_post_meta( get_the_ID(), 'raw_dos-citas_cita_2', true ) ) ?: 'Tus soluciones: Renegociación y la Ley de la segunda oportunidad'
			)
			?>
		</div>

	</div>
</div>