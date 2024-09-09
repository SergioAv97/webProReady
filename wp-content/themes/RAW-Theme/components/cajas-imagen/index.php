<?php
/**
 * Componente: Cajas Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

$link_url = get_post_meta( get_the_ID(), 'raw_cajas-imagen_link_url', true ) ?: '/academia/';
?>
<div class="raw-component cajas-imagen">
	<div class="container">

		<?php printf( '<h2>%s</h2>', esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_title', true ) ) ?: 'Nuestras guías para cancelar deudas' ); ?>

		<div>
			<div class="raw-slider-container">
				<div class="slide">
					<?php
					printf(
						'<a href="%3$s"><figure>%s<figcaption>%s</figcaption></figure></a>',
						wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_img_1', true ) ) ?: 23621, 'full' ),
						esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_text_1', true ) ) ?: 'CÓMO ACABAR CON EL ACOSO TELEFÓNICO',
						esc_url( $link_url )
					)
					?>
				</div>
				<div class="slide">
					<?php
					printf(
						'<a href="%3$s"><figure>%1$s<figcaption>%2$s</figcaption></figure></a>',
						wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_img_2', true ) ) ?: 23622, 'full' ),
						esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_text_2', true ) ) ?: 'CÓMO PAGAR TUS DEUDAS SIN GANAR MÁS',
						esc_url( $link_url )
					)
					?>
				</div>
				<div class="slide">
					<?php
					printf(
						'<a href="%3$s"><figure>%1$s<figcaption>%2$s</figcaption></figure></a>',
						wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_img_3', true ) ) ?: 27905, 'full' ),
						esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_text_3', true ) ) ?: 'BAJA CAUTELAR DE ASNEF',
						esc_url( $link_url )
					)
					?>
				</div>
			</div>
		</div>

		<div>
			<?php
			printf(
				'<p>%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_text', true ) ) ?: 'Aquí tienes la mayor colección de guías para liberarte del endeudamiento.'
			)
			?>

			<?php
			printf(
				'<a id="cta-academia-descargas" role="button" class="big raw-arrow-right" href="%s">%s</a>',
				esc_url( $link_url ),
				esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_link_text', true ) ) ?: 'Página de descargas'
			)
			?>
		</div>

	</div>
</div>