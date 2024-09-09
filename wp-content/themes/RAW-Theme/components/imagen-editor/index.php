<?php
/**
 * Componente: Imagen Editor.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component imagen-editor">
	<?php
	printf(
		'<h2>%s</h2>',
		esc_html( get_post_meta( get_the_ID(), 'raw_imagen-editor_title', true ) ) ?:
			'Los mejores abogados para reunificar y cancelar tus deudas en Madrid'
	)
	?>

	<div class="container">
		<div class="grid">
			<div>
				<?php print wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_imagen-editor_image', true ) ) ?: 27661, array( 535, 391 ) ); ?>
			</div>

			<div>
				<?php
				printf(
					'<h3 class="title">%s</h3>',
					esc_html( get_post_meta( get_the_ID(), 'raw_imagen-editor_subtitle', true ) ) ?:
						'Ofrecemos los siguientes servicios en Madrid'
				)
				?>

				<ul>
					<li>
						<?php
						printf(
							'<a id="url1-imagen-editor" href="%s">%s</a>',
							esc_url( get_post_meta( get_the_ID(), 'raw_imagen-editor_link_1_url', true ) ) ?: '/reunificacion-de-deudas',
							esc_html( get_post_meta( get_the_ID(), 'raw_imagen-editor_link_1_text', true ) ) ?: 'Reunificación de deudas'
						)
						?>
					</li>
					<li>
						<?php
						printf(
							'<a id="url2-imagen-editor" href="%s">%s</a>',
							esc_url( get_post_meta( get_the_ID(), 'raw_imagen-editor_link_2_url', true ) ) ?: '/ley-de-la-segunda-oportunidad',
							esc_html( get_post_meta( get_the_ID(), 'raw_imagen-editor_link_2_text', true ) ) ?: 'Ley de Segunda Oportunidad'
						)
						?>
					</li>
					<li>
						<?php
						printf(
							'<a id="url3-imagen-editor" href="%s">%s</a>',
							esc_url( get_post_meta( get_the_ID(), 'raw_imagen-editor_3ink_1_url', true ) ) ?: '/landing-solicitar-asnef',
							esc_html( get_post_meta( get_the_ID(), 'raw_imagen-editor_link_3_text', true ) ) ?: 'Solicitar ASNEF gratis'
						)
						?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>