<?php
/**
 * Componente: Hero Form.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast hero-form">
	<div class="container grid">

		<div class="section">
			<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_title', true ) ) ?: 'Pon día y hora al<br>final de tus deudas'; ?></h1>

			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_hero-form_image', true ) ?: 21637, array( 150, 150 ), null, 'class=k4' ); ?>
			<div id="google-resenas">
				<?php print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_shortcode', true ) ) ?: '[trustindex data-widget-id=5efa14578871391257525a5454]' ); ?>
			</div>
			<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_text', true ) ) ?: 'Deja de preocuparte por tus deudas, nosotros nos ocupamos de ellas.'; ?></p>
		</div>

		<div id="section-form">
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
			            document.getElementById('00NSo000001AN63').value = new URLSearchParams(new 				URL(window.location.href).search).get('gclid');
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