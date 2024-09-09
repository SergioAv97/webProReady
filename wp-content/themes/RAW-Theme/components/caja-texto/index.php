<?php
/**
 * Componente: Caja Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast caja-texto">
	<div class="container">

		<div>
			<?php
			printf(
				'<h2>%s</h2>',
				esc_html( get_post_meta( get_the_ID(), 'raw_caja-texto_title', true ) ) ?:
					'La Ley de la Segunda Oportunidad consta de las siguientes fases:'
			);
			?>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto_editor', true ) ) ?:
					'<p>Hasta la última <b>modificación de la Ley Concursal</b>, la persona que se acogiese a al procedimiento de la Segunda Oportunidad debía pasar por una primera fase extrajudicial en la que se trataba de conseguir un acuerdo de pagos con las entidades.</p>
					<p>Con la <b>vigente Ley de la Segunda Oportunidad</b>, esa primera fase extrajudicial deja de ser obligatoria y <b>el procedimiento se inicia directamente por la vía judicial</b> donde es posible la liberación de las deudas.</p>
					<p>De esta manera, se constituye un <b>proceso de cancelación de deudas más ágil</b> ya que únicamente es necesario recopilar la documentación correspondiente y presentarla en el Juzgado sin fases previas. Admitido el procedimiento, el juez puede reconocer el <b>derecho de exoneración total de las deudas</b> o la <b>exoneración parcial con un plan de pagos</b>.</p>';
			?>
		</div>

	</div>
</div>