<?php
/**
 * Componente: Tres Cajas Contenido.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component tres-cajas-contenido">
	<div class="container">
		<h2 class="big"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-cajas-contenido_title', true ) ) ?: 'Consulta la información legal del fichero ASNEF'; ?></h2>

		<ul class="grid">
			<li><p>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-cajas-contenido_box_1_editor', true ) )
					?: '<a href="/blog/asnef-que-es-guia-2022/">ASNEF</a> (Asociación Nacional de Entidades de Financiación) es un fichero de morosos que recopila información sobre impagos y deudas de particulares y empresas. Esta información incluye el nombre del deudor, su número de identificación fiscal (NIF), la cantidad de la deuda, la fecha de vencimiento, y el nombre de la empresa o entidad que ha registrado la deuda.'
			?>
			</p></li>

			<li><p>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-cajas-contenido_box_2_editor', true ) )
					?: 'Para que alguien sea incluido en el fichero de ASNEF, la empresa o entidad que registra la deuda debe haber notificado a la persona previamente sobre su obligación de pago de la deuda y haberle proporcionado un plazo para realizarlo o presentar alegaciones.<br><br>La inclusión de datos en ASNEF afecta negativamente al acceso a créditos y préstamos en el futuro, por lo que es importante que la información del fichero sea precisa y actualizada.'
			?>
			</p></li>

			<li><p>
			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_tres-cajas-contenido_box_3_editor', true ) )
					?: '<b>¿Estás en ASNEF? Sigue estos pasos para obtener tu informe y salir del fichero:</b><ol>
					<li>Regístrate en nuestro formulario o llama al <a href="tel:910916445">910916445</a> para contarnos tu caso.</li>
					<li>Solicitaremos tu informe de ASNEF.</li>
					<li>Evaluamos tu situación financiera y te proponemos una solución adaptada.</li>
					<li>Tomamos la vía más conveniente para que canceles tus deudas por menos.</li>
					<li>¡Saldrás de ASNEF definitivamente!</li>
				</ol>'
			?>
			</p></li>
		</ul>
	</div>
</div>