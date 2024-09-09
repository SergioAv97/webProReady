<?php
/**
 * Componente: Texto Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast texto-imagen">
	<?php
	printf(
		'<h2>%s</h2>',
		esc_html( get_post_meta( get_the_ID(), 'raw_texto-imagen_title', true ) ) ?: 'Reunificamos y renegociamos tus deudas con acreedores'
	)
	?>

	<div class="container">
		<div class="grid">
			<div>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-imagen_editor', true ) ) ?: '
					<p>Nuestro servicio para personas en impago consiste en agrupar todas sus deudas en una sola cuota, generalmente mucho menor que la suma de todas sus mensualidades que antes pagaba por separado. Mientras el cliente realiza aportaciones cada mes y genera su propio ahorro <b>nuestros abogados hacen frente a tus deudas con acreedores en Madrid</b>.</p>
					<p>Tras años negociando deudas, tenemos acuerdos con prácticamente todas las entidades del mercado, consiguiendo grandes reducciones sin tener que ir a juicio.</p>
					<p>Esto supone descuentos muy similares a los que los despachos consiguen en procedimientos judiciales en muchos casos, en apenas un par de meses.</p>
					<p>La agilidad de la negociación de deudas hace que nuestros clientes liquiden todas sus deudas en tiempos que en ningún caso creían posible.</p>
					<p>Además, resolver impagos de la mano de <b>abogados para deudas en Madrid</b> y mediante procedimientos amistosos es muy favorable de cara a que el expediente del cliente sea liquidado con el mejor de los resultados posibles.</p>
	
					<h3>Reclamamos tus deudas de manera judicial</h3>
					<p>Si creemos que la cantidad recuperada será mayor para ti, reclamamos tus deudas mediante procedimientos judiciales. Somos expertos en todos los mecanismos y palancas legales para conseguir el mayor descuento y, en la mayoría de casos, recupero del dinero adeudado con las entidades.</p>
					<p>Lo hacemos con la mayor eficacia y la mayor agilidad, consiguiendo sentencias a favor de nuestros clientes en el menor tiempo posible. Esto se debe a nuestra amplia experiencia en estos procedimientos y el largo recorrido en reclamaciones judiciales de deudas.</p>'
			?>
			</div>
			<div>
				<?php print wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_texto-imagen_image', true ) ) ?: 27559, array( 535, 329 ) ); ?>
			</div>
		</div>
	</div>
</div>