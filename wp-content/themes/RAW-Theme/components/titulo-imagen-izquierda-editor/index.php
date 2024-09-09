<?php
/**
 * Componente: Titulo Imagen Izquierda Editor.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component titulo-imagen-izquierda-editor">
	<div class="container">

		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_titulo-imagen-izquierda-editor_title', true ) ) ?: '¿Qué nos hace diferentes?'; ?></h2>

		<div class="grid">
			<div>
				<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_titulo-imagen-izquierda-editor_image', true ) ?: 28796, 'full' ); ?>
			</div>

			<div>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_titulo-imagen-izquierda-editor_editor_title', true ) ) ?: 'Flexibilidad, eficacia y los mejores profesionales:'; ?></p>

				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_titulo-imagen-izquierda-editor_editor', true ) ) ?:
						'<ul>
							<li>Solución adaptada a tus necesidades:
								<ul>
									<li>Renegociación</li>
									<li>Reclamación de intereses abusivos</li>
								</ul>
							</li>
							<li>Comunicación rápida e inmediata</li>
							<li>Sin arriesgar tu patimonio</li>
							<li>Medidas para frenar el acoso telefónico</li>
							<li>Tu caso será gestionado por un jurista experto</li>
						</ul>'
				?>
			</div>
		</div>

	</div>
</div>