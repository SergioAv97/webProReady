<?php
/**
 * Componente: Localizaciones.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast localizaciones">
	<div class="container thin">
		<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_localizaciones_title', true ) ) ?: '¿Quieres visitarnos presencialmente?'; ?></h3>

		<ul>
			<li>
			<?php
				printf(
					'<a id="url-sevilla" class="raw-pin" href="%s">%s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_localizaciones_link_url_1', true ) ) ?: '/abogados-deudas-sevilla',
					esc_html( get_post_meta( get_the_ID(), 'raw_localizaciones_link_text_1', true ) ) ?: 'Sevilla'
				)
				?>
			</li>
			<li>
			<?php
				printf(
					'<a id="url-madrid" class="raw-pin" href="%s">%s</a>',
					esc_url( get_post_meta( get_the_ID(), 'raw_localizaciones_link_url_2', true ) ) ?: '/abogados-deudas-madrid',
					esc_html( get_post_meta( get_the_ID(), 'raw_localizaciones_link_text_2', true ) ) ?: 'Madrid'
				)
				?>
			</li>
		</ul>
	</div>
</div>