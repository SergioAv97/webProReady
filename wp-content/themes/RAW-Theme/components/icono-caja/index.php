<?php
/**
 * Componente: Icono Caja.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component icono-caja">
	<div class="container">
		<ul class="grid">
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_icono-caja_icon_1', true ) ) ?: 'fa-solid fa-door-open'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_title_1', true ) ) ?: 'Derecho de acceso'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_text_1', true ) )
						?: 'Puedes solicitar a ASNEF que te informe si tus datos están incluidos en el fichero, y si es así, obtener una copia de los mismos.'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_icono-caja_icon_2', true ) ) ?: 'fa-solid fa-id-card'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_title_2', true ) ) ?: 'Derecho de rectificación'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_text_2', true ) )
						?: 'Si detectas que algún dato que figura en ASNEF no es correcto, tienes derecho a solicitar su rectificación. Para ello, deberás aportar la documentación necesaria que acredite la corrección de los datos.'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_icono-caja_icon_3', true ) ) ?: 'fa-solid fa-xmark'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_title_3', true ) ) ?: 'Derecho de cancelación'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_text_3', true ) )
						?: 'Tienes derecho a solicitar la cancelación de tus datos en ASNEF si ya has pagado la deuda que motivó su inclusión en el fichero o si se ha producido un error en su registro.'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_icono-caja_icon_4', true ) ) ?: 'fa-solid fa-arrow-right-arrow-left'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_title_4', true ) ) ?: 'Derecho de oposición'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_text_4', true ) )
						?: 'Puedes oponerte al tratamiento de tus datos personales por parte de ASNEF si consideras que no se cumplen las condiciones legales para su tratamiento.'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_icono-caja_icon_5', true ) ) ?: 'fa-solid fa-pen-to-square'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_title_5', true ) ) ?: 'Derecho a presentar una reclamación'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_icono-caja_text_5', true ) )
						?: 'Si consideras que ASNEF ha vulnerado tus derechos como titular de datos personales, puedes presentar una reclamación ante la Agencia Española de Protección de Datos.'
				?>
				</p>
			</li>
		</ul>
	</div>
</div>