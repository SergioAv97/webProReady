<?php
/**
 * Componente: Acordeón FAQs.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>

<div class="raw-component acordeon-faqs">
	<div class="container">
		<?php
			printf(
				'<h2 class="big">%s</h2>',
				esc_html( get_post_meta( get_the_ID(), 'raw_acordeon-faqs_title', true ) ) ?:
				'Preguntas frecuentes sobre abogados para cancelar deudas en Madrid'
			);
			?>

		<div id="li-faqs-acordeon">
			<?php
			print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-faqs_editor', true ) ) ) ?: '
				<ul class="accordion">
					<li>
						<input type="checkbox" class="hidden" id="raw_acordeon-faqs_title_1">
						<h3>
							<label for="raw_acordeon-faqs_title_1">¿Cuándo prescriben las deudas?</label>
						</h3>
						<div>
							<p>Las deudas no son exigibles toda la vida. La legislación española recoge un <b>plazo del que dispone el acreedor para reclamar el pago de una deuda</b>, es decir, cuándo prescribe una deuda.</p>
							<p>En función del tipo de deuda el tiempo de prescripción será uno u otro:</p>
							<ol>
								<li><b>Deudas personales</b>. – <b>Prescriben a los 5 años</b>.</li>
								<li><b>Deudas hipotecarias</b>. – <b>Prescriben al pasar 20 años</b> después de su vencimiento. Conseguir cancelar este tipo de deuda con la prescripción es complicado ya que ante el impago las entidades embargan la vivienda.</li>
								<li><b>Deudas públicas</b>. –  Tanto las deudas con Hacienda y la Seguridad Social como las municipales <b>prescriben a los 4 años</b>. Sin embargo, las instituciones públicas no suelen olvidarse de reclamar las deudas a sus contribuyentes por lo que en pocos casos se logra la prescripción.</li>
								<li><b>Deudas de tarjetas de crédito</b>. – <b>Prescriben a los 5 años</b>.</li>
								<li><b>Deudas de rentas de alquiler</b>. – Es posible reclamar la renta de un alquiler hasta un máximo de <b>5 años tras el impago</b>.</li>
							</ol>
							<p>Esperar a que una deuda prescriba no es una solución para acabar con tus obligaciones pues puede llevarte a tener que pagar intereses de demora y sufrir consecuencias graves como el embargo.</p>
						</div>
					</li>
						
					<li>
						<input type="checkbox" class="hidden" id="raw_acordeon-faqs_title_2">
						<h3>
							<label for="raw_acordeon-faqs_title_2">¿Cómo consultar una deuda con el Ayuntamiento de la Comunidad de Madrid?</label>
						</h3>
						<div>
							<p>Podrás solicitar el <b>certificado de inexistencia de deudas en período ejecutivo</b> de la Comunidad de Madrid de manera presencial o telemática acreditando la personalidad.</p>
							<p>Para la tramitación de este documento por medios electrónicos será necesario poseer un sistema de firma electrónico reconocido por la Comunidad de Madrid y seguir los siguientes pasos:</p>
							<ol>
								<li>Preparar la documentación requerida.</li>
								<li>Abonar la tasa del certificado.</li>
								<li>Descargar y cumplimentar el formulario.</li>
								<li>Acceder al registro electrónico para presentar la solicitud junto a los documentos necesarios.</li>
							</ol>
							<p>Si prefieres consultar tus deudas de manera presencial, dispones de la red de oficinas de la Comunidad de Madrid.</p>
						</div>
					</li>
						
					<li>
						<input type="checkbox" class="hidden" id="raw_acordeon-faqs_title_3">
						<h3>
							<label for="raw_acordeon-faqs_title_3">¿Cómo salir de una deuda que no puedo pagar?</label>
						</h3>
						<div>
							<p>Nadie pide un préstamo con la intención de endeudarse, no obstante, los imprevistos ocurren y las situaciones cambian abocándonos, de repente, al impago. Si tienes deudas que no puedes pagar es necesario que trates de buscar una solución lo antes posible. Evitarás que te apliquen intereses de demora y que tu deuda aumente, además de sufrir consecuencias cada vez más preocupantes en tu vida.</p>
							<p>Para pagar una deuda no tendrás que solicitar una nueva financiación, de hecho, esa sería una mala idea pues, en lugar de reducir tu deuda, lo que estarías haciendo es incrementarla con los nuevos intereses que asumes. Por fortuna, en España y con la ayuda adecuada puedes salir de una deuda que no puedes pagar con mecanismos que no implican endeudarse más. Estos mecanismos a los que nos referimos son:</p>
							<ol>
								<li><b>La reunificación y negociación de deuda</b>. – Consiste en agrupar todas tus cuotas en una sola a la vez que expertos en negociación llegan a un acuerdo con las entidades. Pagarás menos al mes y en total.</li>
								<li><b>La Ley de la Segunda Oportunidad</b>. – Con este procedimiento podrás acordar un plan extrajudicial de pago con los acreedores o liquidar tu patrimonio para saldar tu deuda. No obstante, si no fuera posible en una fase judicial se valorará el Beneficio de Exoneración del Pasivo Insatisfecho (BEPI) con el que puedes liberarte total o parcialmente de tus deudas.</li>
							</ol>
						</div>
					</li>
				</ul>';
			?>
		</div>
	</div>
</div>