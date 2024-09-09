<?php
/**
 * Componente: CTAs.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component ctas">
	<div class="container">
		<ul class="grid">
			<li>
				<?php
				printf(
					'<a id="boton-whatssap" role="button" class="raw-whatsapp contrast" href="%s">%s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_ctas_link_url_1', true ) ) ?: 'https://api.whatsapp.com/send/?phone=%2B34613056334&text=Hola%21+Quiero+informacion+sobre+Soluciona+Mi+Deuda.&type=phone_number&app_absent=0',
					esc_html( get_post_meta( get_the_ID(), 'raw_ctas_link_text_1', true ) ) ?: 'Consulta gratis por WhatsApp'
				)
				?>
			</li>
			<li>
				<?php
				printf(
					'<a id="boton-tiktok" role="button" class="raw-tiktok contrast" href="%s">%s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_ctas_link_url_2', true ) ) ?: 'https://www.tiktok.com/@solucionamideuda',
					esc_html( get_post_meta( get_the_ID(), 'raw_ctas_link_text_2', true ) ) ?: 'Todo sobre deudas en TikTok'
				)
				?>
			</li>
			<li>
				<?php
				printf(
					'<a id="boton-instagram" role="button" class="raw-instagram contrast" href="%s">%s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_ctas_link_url_3', true ) ) ?: 'https://www.instagram.com/solucionamideuda/',
					esc_html( get_post_meta( get_the_ID(), 'raw_ctas_link_text_3', true ) ) ?: 'Finanzas en orden en Instagram'
				)
				?>
			</li>
		</ul>
	</div>
</div>