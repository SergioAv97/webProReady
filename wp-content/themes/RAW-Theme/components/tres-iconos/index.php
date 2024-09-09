<?php
/**
 * Componente: Tres Iconos.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast tres-iconos">
	<div class="container">
		<ul class="grid">
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_tres-iconos_icon_1', true ) ) ?: 'fa-solid fa-file-signature'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-iconos_title_1', true ) ) ?: 'Cancelación parcial con plan de pagos'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-iconos_text_1', true ) )
						?: 'No se liquida la masa activa del concursado y se acuerda un plan de pagos de una duración de 3 años, extensible a 5 cuando no se liquida la vivienda del deudor.'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_tres-iconos_icon_2', true ) ) ?: 'fa-solid fa-shield-heart'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-iconos_title_2', true ) ) ?: 'Cancelación con liquidación de patrimonio'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-iconos_text_2', true ) )
						?: 'Se logra en los que no se acuerda la liquidación o en los de insuficiencia de la masa activa para satisfacer las deudas.'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_tres-iconos_icon_3', true ) ) ?: 'fa-brands fa-creative-commons-nc-eu'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-iconos_title_3', true ) ) ?: 'Cancelación total de las deudas'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-iconos_text_3', true ) )
						?: 'Se reconoce la Exoneración del Pasivo Insatisfecho (EPI) de manera definitiva tras el concurso de acreedores. ¡Este es nuestro principal objetivo!'
				?>
				</p>
			</li>
		</ul>
	</div>
</div>