<?php

/**
 * Componente: Caja Formulario Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<h2 class="big">¿QUIERES RESPUESTAS A TODAS TUS PREGUNTAS SOBRE LA SEGUNDA OPORTUNIDAD?</h2>

<span class="btn-green">COMPLETAMENTE GRATUITA</span>

<div class="grid">
	<div>
		<b>Esta guía responde a las dudas sobre el procedimiento de la Segunda Oportunidad que nos han hecho nuestros más de 4.000 clientes.</b>

		<p>¿Qué puntos trata esta guía?</p>
		<ol>
			<li>Coste</li>
			<li>Requisitos</li>
			<li>Trámites</li>
			<li>Cuestiones generales</li>
		</ol>

		<b>¡Todas tus DUDAS sobre LSO RESUELTAS!</b>
		<div id="form-image">
	
			<div id="form-reunificacion-deudas">
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

				<form id="container-formulario" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D7Q000006vVPz" method="POST" onsubmit="return ValidateForm()">
					<h4 id="title-formulario">Descarga tu guía gratuita</h4>
					<input type="hidden" name="oid" value="00D7Q000006vVPz">
					<input type="hidden" name="retURL" value="https://www.solucionamideuda.es/gracias-descarga-guias/">

					<div id="container-inputs">
						<div class="inputs-horizontal">
							<label for="first_name" class="label-form-web-leads">Nombre*</label>
							<input id="first_name" maxlength="40" name="first_name" size="20" type="text" required><br>

							<label for="last_name" class="label-form-web-leads">Apellido*</label>
							<input id="last_name" maxlength="80" name="last_name" size="20" type="text" required><br>
						</div>

						<div class="inputs-horizontal">
							<label for="mobile" class="label-form-web-leads">Número de teléfono móvil*</label>
							<input id="mobile" maxlength="40" name="mobile" size="20" type="number" required><br>

							<label for="email" class="label-form-web-leads">Email*</label>
							<input id="email" maxlength="80" name="email" size="20" type="email" required><br>
						</div>
					</div>

					<div class="container-checkbox-form-cancelar-deudas">
						<input id="00NSo0000019wnQ" name="00NSo0000019wnQ" type="checkbox" value="1" required>
						<p class="label-checkbox-form">Entiendo y acepto el tratamiento de mis datos según lo descrito en la política de privacidad.*</p>
					</div>

					<div class="container-checkbox-form-cancelar-deudas">
						<input id="00NSo0000019wnR" name="00NSo0000019wnR" type="checkbox" value="1" required>
						<p class="label-checkbox-form">Entiendo y acepto recibir información sobre los servicios de Soluciona Mi Deuda, marca registrada por The Fintech Laboratory, S.L.*</p>
					</div>

					<input id="00NSo0000019oLH" name="00NSo0000019oLH" type="hidden" maxlength="255">
					<input id="00NSo0000019oLG" name="00NSo0000019oLG" type="hidden" maxlength="255">
					<input id="00NSo000001AN63" name="00NSo000001AN63" type="hidden" maxlength="255">
					<input id="url" name="url" type="hidden">
					<input id="00NSo000001C53R" name="00NSo000001C53R" type="hidden" maxlength="255">
					<input id="00NSo000001C53S" name="00NSo000001C53S" type="hidden" maxlength="255">
					<input id="00NSo000001C53T" name="00NSo000001C53T" type="hidden" maxlength="255">
					<input id="00NSo000001C53U" name="00NSo000001C53U" type="hidden" maxlength="255">

					<input type="submit" name="submit" id="button-form-leads">
				</form>

				<script type="text/javascript">
					function getCookie(name) {
						var value = "; " + document.cookie;
						var parts = value.split("; " + name + "=");
						if (parts.length == 2) return parts.pop().split(";").shift();
					}

					function ValidateForm() {
						document.getElementById('url').value = window.location.href;
						var gaAll = ga.getAll();
						if (gaAll.length > 0) {
							var tracker = gaAll[0];
							document.getElementById('00NSo0000019oLG').value = tracker.get('clientId');
							document.getElementById('00NSo0000019oLH').value = tracker.get('trackingId');
						}

						var urlParams = new URLSearchParams(window.location.search);
						document.getElementById('00NSo000001AN63').value = urlParams.get('gclid');
						document.getElementById('00NSo000001C53R').value = urlParams.get('utm_campaign');
						document.getElementById('00NSo000001C53S').value = urlParams.get('utm_medium');
						document.getElementById('00NSo000001C53T').value = urlParams.get('utm_source');
						document.getElementById('00NSo000001C53U').value = urlParams.get('utm_term');

						var tduid = getCookie('tduid');
						var leadNumber = 'ID_DEL_LEAD_GENERADO'; // Reemplaza esto con la lógica para obtener el ID del lead generado
						var retURL = "https://www.solucionamideuda.es/gracias-lso/?leadNumber=" + leadNumber + "&tduid=" + (tduid ? tduid : '');
						document.getElementById('retURL').value = retURL;
						return true;
					}

					function obtenerIdLead(token) {
						var url = "https://your-instance.salesforce.com/services/data/vXX.X/sobjects/Lead/ID_DEL_LEAD_GENERADO";

						const clientId = 'tu_client_id';
						const clientSecret = 'tu_client_secret';
						const username = 'tu_usuario';
						const password = 'tu_contraseña';
						const securityToken = 'tu_security_token';

						fetch('https://tudominio.my.salesforce.com/services/oauth2/token', {
								method: 'POST',
								headers: {
									'Content-Type': 'application/x-www-form-urlencoded'
								},
								body: `grant_type=password&client_id=${encodeURIComponent(clientId)}&client_secret=${encodeURIComponent(clientSecret)}&username=${encodeURIComponent(username)}&password=${encodeURIComponent(password + securityToken)}`
							})
							.then(response => response.json())
							.then(data => {
								const accessToken = data.access_token;

								fetch('https://tudominio.my.salesforce.com/services/data/vXX.X/sobjects/Account', {
										method: 'GET',
										headers: {
											'Authorization': `Bearer ${accessToken}`
										}
									})
									.then(response => response.json())
									.then(data => {
										console.log(data);
									})
									.catch(error => {
										console.error('Error al obtener los datos:', error);
									});
							})
							.catch(error => {
								console.error('Error de autenticación:', error);
							});
					}
				</script>
			</div>
			<?php print wp_get_attachment_image(27824, array(495, 786)); ?>
		</div>

		
	</div>
</div>
</div>