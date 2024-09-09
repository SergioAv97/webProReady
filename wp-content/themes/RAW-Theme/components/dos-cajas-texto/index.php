<?php
/**
 * Componente: Dos Cajas Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast dos-cajas-texto">
	<div class="container">

		<div class="grid">
			<div>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_dos-cajas-texto_box_1', true ) ) ?: '
						<h2>¿Necesitas un crédito y estás en ASNEF?</h2>
						<h3>Estudio personalizado para ofrecerte la opción que mejor se ajuste a ti</h3> 
						<h4>Consigue financiación rápido.</h4>
						<p>Es el momento de que recuperes tu libertad financiera y vuelvas a respirar.</p>
						<a role="button" href="/landing-solicitar-asnef/#container-formulario">QUIERO REUNIFICAR MI DEUDA</a>'
				?>
			</div>

			<div>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_dos-cajas-texto_box_2', true ) ) ?: '
						<h2>¿Quieres salir del fichero de ASNEF de inmediato?</h2>
						<h3>Si estas en ASNEF o tienes dificultades para pagar tu deuda no lo dudes</h3> 
						<h4>Te sacaremos de ASNEF cuanto antes.</h4>
						<p>¿Nuestro compromiso? Que desaparezcas de los ficheros de morosidad.</p>
						<a role="button" href="/landing-solicitar-asnef/#container-formulario">QUIERO SALIR DE ASNEF</a>'
				?>
			</div>
		</div>

	</div>
</div>