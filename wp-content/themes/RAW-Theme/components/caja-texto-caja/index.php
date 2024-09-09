<?php
/**
 * Componente: Caja Texto Caja.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component caja-texto-caja">
	<div class="container grid">

		<div>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto-caja_box_1', true ) ) ?: '
					<h3>¿Qué requisitos se piden para una reunificación de deudas?</h3>
					<ul>
						<li><b>Que tus deudas sean negociables</b> (bancos, entidades financieras, microcréditos, cajas de ahorro empresas de telefonía,etc).</li>
						<li><b>Tener disposición para liquidar</b> (querer pagar tus deudas).</li>
						<li><b>Tener una deuda superior a los 2.000</b>.</li>
					</ul>'
			?>

			<div class="contrast">
				<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto-caja_box_2', true ) ) ?: '
					<h3>¿Tienes dudas sobre los requisitos?</h3>
					<a href="tel:910916445" class="num">910916445</a>
					<small>Consúltanos sin compromiso haciendo click en el teléfono.</small>'
				?>
			</div>
		</div>

		<div>
			<div class="contrast">
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-texto-caja_box_3', true ) ) ?: '
						<h3>Conócenos</h3>
						<p>Somos una empresa española creada por expertos en el sector financiero y jurídico. Debido a nuestra experiencia hemos podido detectar las necesidades de las personas que pasan por una situación de endeudamiento complicada.</p>
						<p>Nuestra misión es ayudarles a liquidar sus deudas y brindarles una segunda oportunidad analizando muy bien las posibilidades para adaptarnos lo mejor posible a la situación de cada uno.</p>
						<a id="boton-conocenos-caja" role="button" class="anticontrast ffs" href="/sobre-nosotros/">CONÓCENOS</a>'
				?>
			</div>
		</div>

	</div>
</div>