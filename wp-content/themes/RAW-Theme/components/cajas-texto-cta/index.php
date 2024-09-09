<?php
/**
 * Componente: Cajas Texto CTA.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component cajas-texto-cta">
	<div class="container">
		<h2 class="big"><?php print esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_title', true ) ) ?: '¿Qué deudas se pueden cancelar con la Ley de Segunda Oportunidad?'; ?></h2>

		<ul class="grid">
			<li>
			<?php
				printf(
					'<h3>%s</h3>',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_1_title', true ) )
					?: '¿Tu negocio te ha llevado a la quiebra financiera y no sabes como salir?'
				);

				printf(
					'<p>%s</p>',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_1_text', true ) )
					?: 'Una situación complicada en tu negocio puede acabar afectando a tus finanzas personales, sumiéndote en deudas que responder con tu patrimonio.'
				);

				printf(
					'<a id="boton3-cajas" role="button" class="anticontrast" href="%s">%s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_1_link_url', true ) ) ?: '/ley-de-la-segunda-oportunidad/#contacto',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_1_link_text', true ) ) ?: 'Protegerme de la quiebra'
				)
				?>
			</li>

			<li>
			<?php
				printf(
					'<h3>%s</h3>',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_2_title', true ) )
					?: '¿Cambios en las finanzas familiares te han sumido en las deudas?'
				);

				printf(
					'<p>%s</p>',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_2_text', true ) )
					?: 'Cambios en casa pueden romper una situación financiera delicada. Divorcios, viudedad o disminución de los ingresos son culpables del endeudamiento.'
				);

				printf(
					'<a id="boton4-cajas" role="button" class="anticontrast" href="%1$s">%2$s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_2_link_url', true ) ) ?: '/ley-de-la-segunda-oportunidad/#contacto',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_2_link_text', true ) ) ?: 'Recuperar finanzas familiares'
				)
				?>
			</li>

			<li>
			<?php
				printf(
					'<h3>%s</h3>',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_3_title', true ) )
					?: '¿Has pedido préstamos para pagar más préstamos?'
				);

				printf(
					'<p>%s</p>',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_3_text', true ) )
					?: 'Los préstamos aparecen en las situaciones financieras complicadas y nos obligan a recurrir a financiación que no podemos devolver.'
				);

				printf(
					'<a id="boton5-cajas" role="button" class="anticontrast" href="%1$s">%2$s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_3_link_url', true ) ) ?: '/ley-de-la-segunda-oportunidad/#contacto',
					esc_html( get_post_meta( get_the_ID(), 'raw_cajas-texto-cta_box_3_link_text', true ) ) ?: 'Reunificar<br>préstamos'
				)
				?>
			</li>
		</ul>
	</div>
</div>