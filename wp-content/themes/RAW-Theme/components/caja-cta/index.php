<?php
/**
 * Componente: Caja CTA.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast caja-cta">
	<div class="container">

		
		<?php
		printf(
			'<p class="title">%s</p>',
			wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-cta_title', true ) ) ?:
				'¿Reúnes los requisitos principales para iniciar la<br>Ley de la Segunda Oportunidad?'
		);
		?>
		<div id="cta-aseosria-caja">
			<?php
			printf(
				'<a role="button" class="big" href="%s">%s</a>',
				esc_url( get_post_meta( get_the_ID(), 'raw_caja-cta_link_url', true ) ) ?: '/ley-de-la-segunda-oportunidad/#GANG',
				esc_html( get_post_meta( get_the_ID(), 'raw_caja-cta_link_text', true ) ) ?: 'Solicita una asesoría gratuita'
			);
			?>
		</div>
	

	</div>
</div>