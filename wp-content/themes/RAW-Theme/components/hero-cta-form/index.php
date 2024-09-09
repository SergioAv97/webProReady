<?php
/**
 * Componente: Hero CTA Form.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast hero-cta-form">
	<div class="container grid">

		<div class="section">
			<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_title', true ) ) ?: 'Solicitamos tu fichero de ASNEF'; ?></h1>
			<p class="subtitle"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_subtitle', true ) ) ?: 'GRATIS'; ?></p>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_editor', true ) ) ?: '
					<br><br><br><br>
					<a id="boton-llamanos-hero" role="button" class="raw-phone bigger" href="tel:+34910916445">Llámanos gratuitamente</a>
					<br><br><br><br><br><br>'
			?>


			<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_text', true ) ) ?: '¡SAL DE ASNEF!'; ?></p>
		</div>

		
		<div class="form-asesoria">
				<form id="container-formulario" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D7Q000006vVPz" method="POST" onsubmit="return ValidateForm()">

					<h4 id="title-formulario">Descarga tu guía gratuita</h4>
    				<input type="hidden" name="oid" value="00D7Q000006vVPz">
    				<input type="hidden" name="retURL" value="https://www.solucionamideuda.es/gracias-descarga-guias/">

    				<label for="first_name" class="label-form-web-leads">Nombre*</label>
    				<input id="first_name" maxlength="40" name="first_name" size="20" type="text" required><br>

    				<label for="last_name" class="label-form-web-leads">Apellido*</label>
    				<input id="last_name" maxlength="80" name="last_name" size="20" type="text" required><br>

    				<label for="mobile" class="label-form-web-leads">Número de teléfono móvil*</label>
    				<input id="mobile" maxlength="40" name="mobile" size="20" type="number" required><br>

    				<label for="email" class="label-form-web-leads">Email*</label>
    				<input id="email" maxlength="80" name="email" size="20" type="email" required><br>

					<div class="container-checkbox-form">
    				  <input id="00NSo0000019wnQ" name="00NSo0000019wnQ" type="checkbox" value="1" required>
    				  <p class="label-checkbox-form">Entiendo y acepto el tratamiento de mis datos según lo descrito en la política de privacidad.*</p>
    				</div>

    				<div class="container-checkbox-form">
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
			</div>
		

	</div>
</div>