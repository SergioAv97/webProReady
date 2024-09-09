<?php
/**
 * Componente: Imagen Editor Bis.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component imagen-editor-bis">
	<div class="container grid">

		<div id="imagen-editor-bis-contenido">
			<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_imagen-editor-bis_title', true ) ) ?: 'Beneficios y ventajas de reunificar deudas'; ?></h2>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_imagen-editor-bis_editor', true ) ) ?:
					'<ul>
						<li>Te ahorrarás hasta un 70% de la cantidad que debes</li>
						<li>Paga menos al mes</li>
						<li>Reunifica tus cuotas en una sola</li>
						<li>Cancela tus deudas hasta 24 meses antes</li>
						<li>Liquidamos la deuda por ti</li>
						<li>Protección legal durante el proceso</li>
					</ul>'
			?>
		</div>

		<div>
			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_imagen-editor-bis_image', true ) ?: 27442, 'full' ); ?>
		</div>

	</div>
</div>