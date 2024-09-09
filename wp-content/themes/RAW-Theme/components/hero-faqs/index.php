<?php
/**
 * Componente: Hero FAQs.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast hero-faqs">
	<div class="container">

		<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-faqs_title', true ) ) ?: 'Preguntas frecuentes sobre nuestra forma de cancelar tus deudas'; ?></h1>

		<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-faqs_subtitle', true ) ) ?: 'Te respondemos a las preguntas más frecuentes que hemos recibido.'; ?></p>

		<div>
			<div id="google-resenas-faqs"><?php print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-faqs_shortcode', true ) ) ?: '[trustindex data-widget-id=5efa14578871391257525a5454]' ); ?></div>
			<div>
			<?php
				print wp_get_attachment_image(
					get_post_meta( get_the_ID(), 'raw_hero-faqs_image', true )
					?: 27849,
					array( 150, 150 ),
					null,
					'class=k4'
				)
				?>
			</div>
		</div>

	</div>
</div>