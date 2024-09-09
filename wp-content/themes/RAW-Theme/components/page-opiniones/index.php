<?php
/**
 * Componente: Page Opinones.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast page-opiniones">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-opiniones_pre_title', true ) ) ?: 'Opiniones sobre Soluciona Mi Deuda'; ?></h2>
		<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-opiniones_pre_subtitle', true ) ) ?: 'Esto es lo que hablan nuestros clientes de nuestros servicios y su experiencia con nosotros.'; ?></p>
	</div>

	<div class="container grid">
		<div class="section">&nbsp;</div>
		<div class="section">
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
</div>

<div class="raw-component anticontrast page-opiniones">
	<div class="container grid">
		<div id="caja-opiniones" class="section opiniones-exitos grid">
			<?php
			// Opiniones.
			$posts = get_posts(
				array(
					'ignore_sticky_posts' => 1,
					'numberposts'         => 8,
					'category'            => 53, // Category: Opiniones.
					'orderby'             => 'date',
					'order'               => 'DESC',
				)
			);

			foreach ( $posts as $post ) {
				get_template_part( 'template-parts/content/content', 'card' );
			}
			?>
		</div>
		<div id="caja-short-code-opiniones" class="section"><?php print do_shortcode( '[trustindex data-widget-id=9c8c6361642b078d3b765bb9b98]' ); ?></div>
	</div>
</div>

<div class="raw-component anticontrast page-opiniones">
	<div class="container grid">
		<div class="section editor">
			<p>Las opiniones sobre Soluciona Mi Deuda son un reflejo de la satisfacción y confianza que nuestros clientes han depositado en nosotros a lo largo de los años. Nuestro compromiso constante con la excelencia en la gestión de deudas nos ha permitido ayudar a miles de personas a recuperar el control de sus finanzas y superar situaciones difíciles.</p>
			<p>Las opiniones positivas destacan nuestra profesionalidad, transparencia y capacidad para brindar soluciones personalizadas a cada situación. Valoramos profundamente las opiniones de nuestros clientes, ya que nos impulsan a seguir mejorando y ofreciendo un servicio de calidad.</p>
			<p>Estamos comprometidos con la satisfacción de nuestros clientes y nos enorgullece contar con su respaldo y confianza en nuestra labor.</p>
		</div>

		<div class="section">
			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_title-img-left-editor_img', true ) ?: 27199, 'full' ); ?>
		</div>
	</div>
</div>