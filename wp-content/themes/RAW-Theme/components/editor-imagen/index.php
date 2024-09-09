<?php
/**
 * Componente: Editor Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component editor-imagen">
	<div class="container grid">

		<div>
			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_editor-imagen_image', true ) ?: 27729, 'full' ); ?>
		</div>

		<div>
			<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_editor-imagen_title', true ) ) ?: '¿Se puede reunificar deudas sin vivienda?'; ?></h2>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_editor-imagen_editor', true ) ) ?:
					'<p>Sí, se puede:</p>
					<p>Reunificando deudas a través de mecanismos legales puedes hacerlo, y no nos referimos a la Ley de la Segunda oportunidad.</p>
					<p>La reunificación de deudas a través de la negociación <b>no necesita</b> de <b>avales</b> ni <b>garantías</b> adicionales.</p>
					<p>Renegociar tus deudas te permite liquidar los préstamos, tarjetas y otras financiaciones <b>sin arriesgar tu casa</b>.</p>
					<div>
						<p><small>"Tu casa no correrá ningún riesgo en la reunificación de Soluciona Mi Deuda debido a que no necesitarás pedir más financiación."</small></p>
						<p><span>Soluciona Mi Deuda</span></p>
					</div>'
			?>
		</div>

	</div>
</div>