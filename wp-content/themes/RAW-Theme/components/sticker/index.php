<?php
/**
 * Componente: Sticker.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast sticker">
	<div class="container grid">

		<div>
			<?php
			printf(
				'<h2>%s</h2>',
				esc_html( get_post_meta( get_the_ID(), 'raw_sticker_title', true ) ) ?:
					'¿Cómo reunificar préstamos?'
			)
			?>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_sticker_editor', true ) ) ?: '
					<p>Para reunificar tus préstamos es necesario analizar tu caso en particular y comprobar el estado de tus deudas.</p>
					<p>Por ello, antes que nada, ponte en contacto con nosotros. Te ofrecemos una <u><b>asesoría gratis y sin compromiso</b></u>.</p>
					<p>Tras estudiar tu situación, te proponemos un plan de cancelación en una cuota.</p>'
			?>
		</div>

		<div id="sticker-image">
			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_sticker_image', true ) ?: 28059, 'full' ); ?>
		</div>

	</div>
</div>