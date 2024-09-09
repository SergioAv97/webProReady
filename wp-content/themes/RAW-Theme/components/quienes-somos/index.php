<?php
/**
 * Componente: Quienes Somos.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component quienes-somos">
	<div class="container grid">

		<div>
			<?php
			printf(
				'<p class="title">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_quienes-somos_title', true ) ) ?: '¿Quiénes somos?'
			)
			?>

			<?php
			printf(
				'<p>%s</p>',
				wp_kses_post( get_post_meta( get_the_ID(), 'raw_quienes-somos_text', true ) ) ?:
					'Nuestra misión es liquidar las deudas y brindar una segunda oportunidad analizando muy bien las posibilidades para adaptarnos lo mejor posible a la situación de cada uno.<br>
					Ayudamos a personas que no pueden hacer frente a sus cuotas y que requieren de ayuda experta para solucionar sus deudas.'
			)
			?>

			<?php
			printf(
				'<a role="button" class="%s" href="%s">%s</a>',
				esc_attr( get_post_meta( get_the_ID(), 'raw_quienes-somos_link_class', true ) ) ?: 'raw-phone',
				esc_url( get_post_meta( get_the_ID(), 'raw_quienes-somos_link_url', true ) ) ?: '/sobre-nosotros',
				esc_html( get_post_meta( get_the_ID(), 'raw_quienes-somos_link_text', true ) ) ?: '¿Quieres saber más?'
			)
			?>
		</div>

		<div class="raw-slider">
			<div class="raw-slider-container">
				<?php
					print wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_quienes-somos_image_madrid', true ) ) ?: 13924, array( 555, 400 ) );
					print wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_quienes-somos_image_sevilla', true ) ) ?: 15754, array( 555, 400 ) );
				?>
			</div>
		</div>

	</div>
</div>