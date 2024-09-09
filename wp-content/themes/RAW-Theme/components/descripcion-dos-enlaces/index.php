<?php
/**
 * Componente: Descripción Dos Enlaces.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component descripcion-dos-enlaces">
	<div class="container">

		<?php
			printf(
				'<h2>%s</h2>',
				esc_html( get_post_meta( get_the_ID(), 'raw_descripcion-dos-enlaces_title', true ) ) ?:
				'¿Necesitas un abogado de deudas en Madrid?'
			)
			?>

		<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_descripcion-dos-enlaces_editor', true ) ) ?: '
				<p>Si necesitas ayuda para pagar las deudas y dejar atrás la preocupación por deber dinero, estás ante el sitio adecuado, recibirás atención de primera calidad por parte de nuestros <b>abogados en Madrid para tus deudas</b>, especialistas en resolver situaciones complicadas de endeudamiento, a través de las soluciones que permitan recuperar la mayor cantidad de dinero posible.</p>
				<p>Atendemos de manera presencial en Madrid y Sevilla bajo cita previa, y también podemos atenderte en todo el territorio nacional, ya que gestionamos casos con clientes de manera telemática por vía telefónica y correo electrónico. De esta manera, estés donde estés podrás liquidar todas tus deudas y volver a respirar tranquilo con nosotros.</p>'
		?>

		<div class="container thin">
			<ul>
				<li>
				<?php
					printf(
						'<a id="url1-descripcion" href="%s">%s</a>',
						esc_url( get_post_meta( get_the_ID(), 'raw_descripcion-dos-enlaces_link_1_url', true ) ) ?: '/abogados-deudas-madrid/',
						esc_html( get_post_meta( get_the_ID(), 'raw_descripcion-dos-enlaces_link_1_text', true ) ) ?: 'Abogados expertos en reunificación y cancelación de deudas en Madrid'
					)
					?>
				</li>
				<li>
				<?php
					printf(
						'<a id="url2-descripcion" href="%s">%s</a>',
						esc_url( get_post_meta( get_the_ID(), 'raw_descripcion-dos-enlaces_link_2_url', true ) ) ?: '/abogados-deudas-sevilla/',
						esc_html( get_post_meta( get_the_ID(), 'raw_descripcion-dos-enlaces_link_2_text', true ) ) ?: 'Abogados expertos en reunificación y cancelación de deudas en Sevilla'
					)
					?>
				</li>
			</ul>
		</div>

	</div>
</div>