<?php
/**
 * Componente: Titulo CTAs.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component titulo-ctas">
	<div class="container">
		<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_titulo-ctas_title', true ) ) ?: '¿Qué necesitas?'; ?></h3>

		<ul class="grid">
			<li>
				<?php
				printf(
					'<a id="boton-reunificar" role="button" class="raw-chart-pie" href="%1$s">%2$s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_titulo-ctas_link_url_1', true ) ) ?: '/reunificacion-de-deudas/',
					esc_html( get_post_meta( get_the_ID(), 'raw_titulo-ctas_link_text_1', true ) ) ?: 'Reunificar mis deudas'
				)
				?>
			</li>
			<li>
				<?php
				printf(
					'<a id="boton-asnef" role="button" class="raw-file-excel" href="%1$s">%2$s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_titulo-ctas_link_url_2', true ) ) ?: '/landing-solicitar-asnef/',
					esc_html( get_post_meta( get_the_ID(), 'raw_titulo-ctas_link_text_2', true ) ) ?: 'Solicitar fichero ASNEF'
				)
				?>
			</li>
			<li>
				<?php
				printf(
					'<a id="boton-lso" role="button" class="raw-balance-scale" href="%1$s">%2$s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_titulo-ctas_link_url_3', true ) ) ?: '/ley-de-la-segunda-oportunidad/',
					esc_html( get_post_meta( get_the_ID(), 'raw_titulo-ctas_link_text_3', true ) ) ?: 'Segunda Oportunidad'
				)
				?>
			</li>
		</ul>
	</div>
</div>