<?php
/**
 * Componente: FAQs.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component faqs">
	<div class="container">
		<h2 class="big">
			<?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_faqs_title', true ) ) ?: 'Preguntas frecuentes sobre cancelar deudas'; ?>
		</h2>

		<div id="li-faqs">
			<?php
			print do_shortcode(
				get_post_meta( get_the_ID(), 'raw_faqs_editor', true )
				?: '
				<ul class="accordion">
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs_title_1">
						<h3>
							<label for="raw_faqs_title_1">¿Cómo puedo cancelar mi deuda?</label>
						</h3>
						<div>
							<p>Cancelar tus deudas puede ser un proceso que requiere tiempo y esfuerzo, pero puede ser factible si cuentas con apoyo y guía de un asesor legal y financiero. Con la ayuda de un profesional podrás evaluar tu situación y conseguir una solución ajustada a tu situación sin que tengas que contraer más deuda como harías con un préstamo.</p>
							<p>Algunos mecanismos efectivos para cancelar deudas son:</p>
							<ul>
								<li><b>Reunificación de deuda y negociación con entidades.</b> – Consiste en una agrupación de tus cuotas en una a la vez que expertos en negociación llegan a un acuerdo con entidades para reducir el total que debes.</li>
								<li><b>La Ley de la Segunda Oportunidad.</b> – Si tu situación económica actual es de quiebra o está próxima a estarlo, el procedimiento de la Segunda Oportunidad puede ser para ti. Con este recurso legal, podrías quedar liberado de tus deudas siempre y cuando reúnas los requisitos dispuestos. Contar con un abogado especialista en el proceso puede ayudarte a lograr el máximo beneficio.</li>
							</ul>
							<p>Es fundamental prestar atención a estos gastos y tenerlos en cuenta para valorar si este tipo de reunificación es una opción viable en tu caso. Y es que, si no cuentas con la solvencia suficiente es probable que acabes empeorando la situación de sobreendeudamiento en la que te encuentras.</p>
							<p>No obstante, existe una alternativa de reunificación que no hará que acumules más deuda, sino reducirla. Nos referimos al <b>Programa de reunificación de Soluciona</b>. No tendrás que preocuparte por honorarios ya que éstos van incluidos en la aportación mensual que realizas.</p>
						</div>
					</li>
							
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs_title_2">
						<h3>
							<label for="raw_faqs_title_2">¿Qué pasa si cancelo una deuda?</label>
						</h3>
						<div>
							<p>Cuando cancelas una deuda, esto significa que has pagado la totalidad o una parte de la deuda pendiente. Los efectos de cancelar una deuda pueden variar según el tipo de deuda, el prestamista y las circunstancias específicas de tu situación financiera. Algunos pueden incluir mejorar tu historial de crédito, ahorro de intereses, mayor libertad financiera y eliminación de la preocupación.</p>
						</div>
					</li>
							
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs_title_3">
						<h3>
							<label for="raw_faqs_title_3">¿Quién puede cancelar una deuda?</label>
						</h3>
						<div>
							<p>La cancelación de una deuda generalmente se realiza por el deudor o por el acreedor. Aquí te explico un poco más sobre cada uno:</p>
							<ul>
								<li><b>El deudor:</b> El deudor es la persona que tiene la deuda pendiente. Si el deudor tiene los recursos financieros necesarios, puede cancelar la deuda pagando la cantidad total pendiente al acreedor. El deudor también puede negociar con el acreedor para llegar a un acuerdo de pago que les permita cancelar la deuda en su totalidad o en parte.</li>
								<li><b>El acreedor:</b> El acreedor es la entidad que presta dinero al deudor. En algunos casos, el acreedor puede optar por cancelar una deuda. Por ejemplo, si el acreedor se da cuenta de que la deuda no puede ser pagada o si el deudor ha fallecido y no hay un sucesor que pueda hacerse cargo de la deuda, el acreedor puede decidir cancelar la deuda.</li>
							</ul>
						</div>
					</li>
				</ul>'
							
				)
				?>
		</div>
		<a id="boton-faqs" role="button" class="raw-arrow-right" href="/preguntas-frecuentes-soluciona-mi-deuda/">Preguntas frecuentes</a>'
	</div>
</div>