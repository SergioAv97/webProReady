<?php
/**
 * Componente: FAQs Form.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component faqs-form">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_faqs-form_title', true ) ) ?: 'Preguntas frecuentes'; ?></h2>

		<?php
		print do_shortcode(
			get_post_meta( get_the_ID(), 'raw_faqs-form_editor', true ) ?: '
		<div class="grid">
			<div id="li-faqs-form">
				<ul class="accordion">
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_1">
						<h3>
							<label for="raw_faqs-form_title_1">¿Con qué instituciones financieras podemos negociar las deudas?</label>
						</h3>
						<div>
							<p>Viaconto, Banco Pastor, Orange, Santander, BBVA, Bankia, Sabadell, Bankinter, Unicaja, Ibercaja, Kutxabank, Abanca, Liberbank, Click finance, NBQ, Pulpo Credit, Cetelem, Movistar, Caja España, ING, Laboral Kutxa, TTI Finance, Dispon, Financa, Eroski, Ibercrédito, Caixabank, Carrefour, Credit Rapid, Vivus, Cashper, WiZink, Savso, Creditstar, Credito cajero, Twinero, Monedo Now, Caja Duero, Pepe Dinero, Vodafone, Prestamo 10, Presto, Credito 24, City Bank, Deutsche Bank, Que Bueno, Moneymas, Repsol, Caixa consumer, Ccloan, Movistar Money, Celeris, Banco Popular, Wandoo, Credito Mas, Union Financiera Asturina, 4 Finance, Cofidis, Evo Bank, El Corte Ingles, Creditea, primrose partners, Ferratum SA, Union financiera Asturiana, Credito Si, YouUnited, Dineo Credito SL, Luna Credit, Oney, Wonga, Prestamer, Freezl, Friendly Finance, Contante, Banco Pueyo, Euroloan, Jazztel, Agraria Miralcamp, Barclays, BigBank, Hoist Finance, American Express, Familoan SL, AKF Bank, Kredito 24, Dindin, Mercadona, Caja Mar Caja Rural, Tamga Finance, Amena… y muchas más.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_2">
						<h3>
							<label for="raw_faqs-form_title_2">¿En cuánto tiempo puedo liquidar mis deudas?</label>
						</h3>
						<div>
							<p>En el caso del programa Soluciona todo depende del total de la deuda y de la cantidad que puedas aportar al programa mensualmente. Se hará un plan estimado al inicio del proceso donde se te indicará una duración aproximada. Cuanto mayor sea tu cuota mensual, antes procederemos a liquidar tus deudas. No hay un máximo mensual, podrás ir ahorrando más cada mes para terminar antes tu plan de liquidación.</p>
							<p>Si te acoges a la Ley de la Segunda Oportunidad la duración del proceso depende mucho de la situación en la que estés. El abogado que te acompañe en el mismo podrá asesorarte en cada momento.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_3">
						<h3>
							<label for="raw_faqs-form_title_3">¿Cuáles son los requisitos para entrar al programa de Soluciona?</label>
						</h3>
						<div>
							<p>Para entrar al programa, es necesario tener deudas de bancos, entidades financieras, compañías de teléfono, supermercados, microcréditos… y estar comprometido a liquidarlas.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_4">
						<h3>
							<label for="raw_faqs-form_title_4">¿Cuáles son los requisitos para acogerse a la Ley de la Segunda Oportunidad?</label>
						</h3>
						<div>
							<p>Requisitos:</p>
							<ol>
								<li>No haber sido condenado por ningún tipo de delito económico.</li>
								<li>Que el importe de la de la deuda sea mínimo de 12.000€ y no supere los 5 millones de euros.</li>
								<li>No haber rechazado en los 4 años anteriores una oferta de empleo acorde a tu actividad.</li>
								<li>No haber solicitado este procedimiento de Ley de Segunda Oportunidad durante los últimos 5 años.</li>
							</ol>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_5">
						<h3>
							<label for="raw_faqs-form_title_5">¿Qué me conviene más? ¿El programa Soluciona o la Ley de la Segunda Oportunidad?</label>
						</h3>
						<div>
							<p>En Soluciona estudiaremos tu situación para ofrecerte el mejor asesoramiento. Hay que entender que cada persona tiene una situación diferente. Por eso, nuestro equipo de asesores estudiará tu caso para ofrecerte la mejor solución.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_6">
						<h3>
							<label for="raw_faqs-form_title_6">¿Hay un límite de deudas o de tarjetas de crédito?</label>
						</h3>
						<div>
							<p>El importe mínimo con el que trabajamos es de 2.000 euros. Siempre teniendo en cuenta la deuda total, no las cuotas atrasadas o la cantidad impagada. Una vez superado este importe, no hay límite de ningún tipo.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_7">
						<h3>
							<label for="raw_faqs-form_title_7">¿En dónde son depositados mis ahorros?</label>
						</h3>
						<div>
							<p>Los ahorros mensuales de cada cliente del programa son depositados en la Cuenta de Clientes de Soluciona, identificándose cada cliente con un código específico. Para proceder a sacar el dinero con el fin de liquidar las deudas, es necesario contar con la autorización del cliente.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_8">
						<h3>
							<label for="raw_faqs-form_title_8">¿En dónde son depositados mis ahorros?</label>
						</h3>
						<div>
							<p>Los ahorros mensuales de cada cliente del programa son depositados en la Cuenta de Clientes de Soluciona, identificándose cada cliente con un código específico. Para proceder a sacar el dinero con el fin de liquidar las deudas, es necesario contar con la autorización del cliente.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_9">
						<h3>
							<label for="raw_faqs-form_title_9">¿Qué pasa si mis deudas están es ASNEF?</label>
						</h3>
						<div>
							<p>No pasa nada. En Soluciona Mi Deuda trabajamos con deudas que se encuentran en situación de impago. Por eso, si deseas salir de ASNEF, tenemos la mejor solución para ti, para que puedas volver a una situación económica estable.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_10">
						<h3>
							<label for="raw_faqs-form_title_10">¿Qué documentación necesito para acogerme a la Ley de la Segunda Oportunidad?</label>
						</h3>
						<div>
							<p>La documentación necesaria para iniciar el procedimiento de la Ley de la Segunda Oportunidad debe ser principalmente aquella que justifique tu situación económica, ya que es fundamental demostrar tu insolvencia.</p>
							<p>Por lo tanto, tendrás que aportar cualquier documento válido como justificación de tus ingresos, gastos, patrimonio y deudas. Además, documentación que acredite los requisitos.</p>
							<p>Eso sí, siempre ten en cuenta que la documentación puede variar en función del caso, por lo que te ayudará contar con profesionales que te indiquen cómo hallar la información necesaria.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_11">
						<h3>
							<label for="raw_faqs-form_title_11">¿Cuál es el proceso si me acojo a la Ley de la Segunda Oportunidad?</label>
						</h3>
						<div>
							<p>Hasta la última <b>modificación de la Ley Concursal</b>, la persona que se acogiese a al procedimiento de la Segunda Oportunidad debía pasar por una primera fase extrajudicial en la que se trataba de conseguir un acuerdo de pagos con las entidades.</p>
							<p>Con la <b>vigente Ley de la Segunda Oportunidad</b>, esa primera fase extrajudicial deja de ser obligatoria y el procedimiento se inicia <b>directamente por la vía judicial</b> donde es posible la liberación de las deudas.</p>
							<p>De esta manera, se constituye un <b>proceso de cancelación de deudas más ágil</b> ya que únicamente es necesario recopilar la documentación correspondiente y presentarla en el Juzgado sin fases previas. Admitido el procedimiento, el juez puede reconocer el <b>derecho de exoneración total de las deudas</b> o la <b>exoneración parcial con un plan de pagos</b>.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_12">
						<h3>
							<label for="raw_faqs-form_title_12">¿Puedo llegar a perder mi coche y/o mi casa si me acojo a la Ley de la Segunda Oportunidad?</label>
						</h3>
						<div>
							<p>En el caso de la vivienda, si lo que te queda de hipoteca es igual o superior a su valor de mercado, estás al corriente de pago y estás empadronado en ella puede excluirse.</p>
							<p>En cuanto al coche y otros bienes, hay que demostrar que los necesitas para tu actividad profesional.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_13">
						<h3>
							<label for="raw_faqs-form_title_13">¿Es fiable, real y seguro el servicio de Soluciona Mi Deuda?</label>
						</h3>
						<div>
							<p>En <b>Soluciona Mi Deuda</b> ayudamos a personas en situación de sobreendeudamiento a volver a respirar tranquilas y sin deudas. Lo hacemos a través de un <b>servicio real y seguro</b> adaptado a cada caso.</p>
							<p>Tras analizar la situación individual de cada usuario proponemos iniciar nuestro <b>programa de reunificación de deudas</b> o la <b>Ley de la Segunda Oportunidad</b>.</p>
							<p>El programa consiste en la agrupación de préstamos y otros productos de financiación en una única cuota mensual, normalmente inferior a la suma de las cantidades que la persona abona por separado a las entidades. Con las aportaciones de dicha cuota se genera mes a mes ahorro que utilizaremos para liquidar las deudas después de haber reclamado judicialmente o negociado amistosamente una reducción del importe. Este servicio permite a nuestros clientes ahorrar con sus deudas a la vez que están protegidos por nuestros abogados.</p>
							<p>Por su parte, la tramitación de la Ley de la Segunda Oportunidad se propone a aquellos usuarios cuya situación económica es de insolvencia actual o inminente. Nuestros especialistas en la Ley estudian al detalle el caso y preparan una estrategia segura para lograr el máximo beneficio del procedimiento. Es decir, solicitan un concurso con el que conseguir la Exoneración del Pasivo Insatisfecho (EPI) y que permita a nuestros clientes empezar de nuevo.</p>
							<p><b>La fiabilidad de nuestros servicios la amparan más de 4.000 familias</b> que  han vuelto a vivir libres de deudas tras iniciar el Programa Soluciona o la Ley de la Segunda Oportunidad de la mano de nuestros expertos. No lo decimos nosotros, ¡echa un vistazo a nuestros <a href="/opiniones-soluciona-mi-deuda/">casos más reseñables</a>!</p>
						</div>
					</li>


					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_14">
						<h3>
							<label for="raw_faqs-form_title_14">¿Cómo funciona el programa de Soluciona Mi Deuda?</label>
						</h3>
						<div>
							<p>El programa de reunificación de deudas con el que contamos en Soluciona Mi Deuda funciona de la siguiente manera:</p>
							<ol>
								<li><b>Evaluación inicial</b> – Cuando una persona se pone en contacto con Soluciona Mi Deuda, uno de nuestros asesores lleva a cabo una evaluación inicial de la situación económica. Solicitan información de las deudas, ingresos, gastos y otros aspectos relevantes que permitan comprender el estado económico actual de la persona.</li>
								<li><b>Diseño del plan</b> – Una vez que nuestro equipo cuenta con una visión clara del caso, diseñan un plan personalizado para cancelar las deudas. Este plan incluye la reunificación de las diferentes financiaciones en una sola cuota mensual (inferior a lo que paga la persona por separado a las entidades ya que se prevé una reducción  mínima asegurada) y un plazo de tiempo máximo en el que se liquidarán todas las deudas.</li>
								<li><b>Ahorro programado</b> – Con las aportaciones mensuales los clientes generan su propio fondo de ahorro que se utilizará más adelante para cumplir con los acuerdos llegados en las negociaciones con los bancos y financieras. La cantidad de ahorro dependerá de la capacidad de pago del cliente y del plan de liquidación que habremos diseñado para cada situación.</li>
								<li><b>Negociación con los acreedores</b> –  Nuestros expertos en negociación se encargarán de negociar con los bancos y entidades en nombre del cliente. Su objetivo será obtener acuerdos favorables para reducir el monto total de tus deudas y establecer un plan de pago asequible.</li>
								<li><b>Seguimiento y asesoramiento</b> – Durante todo el proceso, Soluciona Mi Deuda te brindará seguimiento y asesoramiento personalizado. Su equipo de gestores estará disponible para responder preguntas, brindar orientación financiera y ayudar a mantener el rumbo hacia la resolución de tus deudas.</li>
							</ol>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_15">
						<h3>
							<label for="raw_faqs-form_title_15">¿Qué tipo de empresa es Soluciona Mi Deuda?</label>
						</h3>
						<div>
							<p><b>Soluciona Mi Deuda es una empresa dedicada a brindar servicios de asesoría y negociación de deudas</b> para ayudar a personas en situación de sobreendeudamiento. Nuestro principal objetivo es proporcionar soluciones personalizadas y estratégicas para que los individuos puedan cancelar sus deudas de manera efectiva. Además, <b>somos una empresa especialista en la Ley de la Segunda Oportunidad</b>, mecanismo que permite la cancelación de deudas y un nuevo comienzo económico.</p>
							<p>Nuestro programa de renegociación se basa en trabajar directamente con los bancos y financieras para buscar acuerdos favorables que permitan reducir el importe total de las deudas y establecer planes de pago más viables para nuestros clientes. Esto puede incluir la negociación de descuentos en el saldo adeudado, la reestructuración de pagos o la liquidación de deudas.</p>
							<p>En el caso de la Ley de la Segunda Oportunidad, en Soluciona Mi Deuda proporcionamos asesoría y acompañamiento en el proceso de acogerse a esta ley. Esto implica evaluar si cumples con los requisitos legales, preparar la documentación necesaria y representar legalmente en los procedimientos correspondientes.</p>
						</div>
					</li>
					<li>
						<input type="checkbox" class="hidden" id="raw_faqs-form_title_16">
						<h3>
							<label for="raw_faqs-form_title_16">¿Cuántos clientes tiene Soluciona Mi Deuda?</label>
						</h3>
						<div>
							<p><b>Soluciona Mi Deuda tiene una cartera de clientes de más de 4.000 personas</b>, que incluye tanto a particulares como a autónomos.</p>
						</div>
					</li>
				</ul>
			</div>'
		);
		?>

		<div>
			<!--  ----------------------------------------------------------------------  -->
			<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
			<!--  If necessary, please modify the charset parameter to specify the        -->
			<!--  character set of your HTML page.                                        -->
			<!--  ----------------------------------------------------------------------  -->
			<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
			<!--  ----------------------------------------------------------------------  -->
			<!--  NOTE: Please add the following <FORM> element to your page.             -->
			<!--  ----------------------------------------------------------------------  -->
			<form id="container-formulario" action="
			https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D7Q000006vVPz"
			method="POST" onsubmit="return ValidateForm()">
			<h4 id="title-formulario">Solicita tu asesoría gratis</h4>
			<input type=hidden name="oid" value="00D7Q000006vVPz">
			<input type=hidden name="retURL" value="https://www.solucionamideuda.es/gracias/">
		
			<!--  ----------------------------------------------------------------------  -->
			<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
			<!--  these lines if you wish to test in debug mode.                          -->
			<!--  <input type="hidden" name="debug" value=1>                              -->
			<!--  <input type="hidden" name="debugEmail"                                  -->
			<!--  value="salesforce.login@wearevanguard.eu">                              -->
			<!--  ----------------------------------------------------------------------  -->
			<label for="first_name" class="label-form-web-leads">Nombre*</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required="true" /><br>
			<label for="last_name" class="label-form-web-leads">Apellido*</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required="true"/><br>
			<label for="mobile" class="label-form-web-leads">Número de teléfono móvil*
			</label>
			<input  id="mobile" maxlength="40" name="mobile" size="20" type="number"  required="true"/>
			<br>
			<label for="email" class="label-form-web-leads">Email*</label><input  id="email" maxlength="80" name="email" size="20" type="text" required="true"/><br>
			<label for="label-picklist-form-asesoria" class="label-form-web-leads">Total de deuda estimada*</label>
			<select id="00NSo0000016BUz" class="input-form-web-leads" name="00NSo0000016BUz" title="Cantidad Deuda Formulario">
				<option disabled="" value="">Selecciona</option>
				<option value="Menos de 5.000€">Menos de 5.000€</option>
				<option value="5.000€ - 15.000€">5.000€ - 15.000€</option>
				<option value="15.000€ - 25.000€">15.000€ - 25.000€</option>
				<option value="25.000€ - 35.000€">25.000€ - 35.000€</option>
				<option value="35.000€ - 45.000€">35.000€ - 45.000€</option>
				<option value="45.000€ - 55.000€">45.000€ - 55.000€</option>
				<option value="Más de 55.000€">Más de 55.000€</option>
			</select><br>
		
			<div class="container-checkbox-form">
			<input  id="00NSo0000019wnQ" name="00NSo0000019wnQ" type="checkbox" value="1" required="true"/>
			<p class="label-checkbox-form">Entiendo y acepto el tratamiento de mis datos según lo descrito en la <a href="https://www.solucionamideuda.es/politica-privacidad/">política de privacidad.*</a></p>
			</div>
			
			<div class="container-checkbox-form">
			<input  id="00NSo0000019wnR" name="00NSo0000019wnR" type="checkbox" value="1" required="true"/>
			<p class="label-checkbox-form">Entiendo y acepto recibir información sobre los servicios de Soluciona Mi Deuda, marca registrada por The Fintech Laboratory, S.L.*</p>
			</div>
			<input  id="00NSo0000019oLH" maxlength="255" name="00NSo0000019oLH" type="hidden" />
			<input  id="00NSo0000019oLG" maxlength="255" name="00NSo0000019oLG" type="hidden" />
			<input  id="00NSo000001AN63" maxlength="255" name="00NSo000001AN63" type="hidden" />
			<input id="url" name="url" type ="hidden"/>
			<input  id="00NSo000001C53R" maxlength="255" name="00NSo000001C53R" type="hidden" />
			<input  id="00NSo000001C53S" maxlength="255" name="00NSo000001C53S" type="hidden" />
			<input  id="00NSo000001C53T" maxlength="255" name="00NSo000001C53T" type="hidden" />
			<input  id="00NSo000001C53U" maxlength="255" name="00NSo000001C53U" type="hidden" />
			<input type="submit" name="submit" id="button-form-leads">
			</form>
			<script type ="text/javascript">
			        function ValidateForm() {
			            document.getElementById('url').value = window.location.href;
			            document.getElementById('00NSo0000019oLG').value = ga.getAll()[0].get('clientId');
			            document.getElementById('00NSo0000019oLH').value = ga.getAll()[0].get('trackingId');
			            document.getElementById('00NSo000001AN63').value = new URLSearchParams(new URL(window.location.href).search).get('gclid');
			            document.getElementById('00NSo000001C53R').value = new URLSearchParams(new URL(window.location.href).search).get('utm_campaign');
			            document.getElementById('00NSo000001C53S').value = new URLSearchParams(new URL(window.location.href).search).get('utm_medium');
			            document.getElementById('00NSo000001C53T').value = new URLSearchParams(new URL(window.location.href).search).get('utm_source');
			            document.getElementById('00NSo000001C53U').value = new URLSearchParams(new URL(window.location.href).search).get('utm_term');
			            return true;
			        }
				
			</script>
		</div>

		</div>

	</div>
</div>