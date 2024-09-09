<?php
/**
 * Componente: Page Blog.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

global $paged;

	$big = 999999999;
	$ppp = get_option( 'posts_per_page' );
	$off = ( is_paged() ? ( $ppp * ( $paged - 1 ) ) : 0 );
?>
<div class="raw-component contrast page-blog">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_pre_title', true ) ) ?: 'Blog de Soluciona Mi Deuda'; ?></h2>
		<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_pre_subtitle', true ) ) ?: 'El mejor sitio para informarte sobre cómo gestionar tus deudas, los intereses abusivos y cómo hacer frente a los mismos.'; ?></p>
	</div>

	<div class="container grid">
		<div class="section">&nbsp;</div>
		<div class="section grid">
			<div id="google-resenas"><?php print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_form_shortcode', true ) ) ?: '[trustindex data-widget-id=5efa14578871391257525a5454]' ); ?></div>
			<div><?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_page-blog_img', true ) ?: 27849, array( 150, 150 ) ); ?></div>
		</div>
	</div>
</div>

<div class="raw-component anticontrast page-blog">
	<div class="container grid">
		<div id="caja-blog" class="section articles grid">
			<?php
				// Articles.
				$posts = get_posts(
					array(
						'ignore_sticky_posts' => 1,
						'numberposts'         => $ppp,
						'category'            => (int) esc_html( get_post_meta( get_the_ID(), 'raw_page-blog_link_1_url', true ) ), // Category: Opiniones.
						'offset'              => $off,
						'orderby'             => 'date',
						'order'               => 'DESC',
					)
				);

				if ( count( $posts ) > 0 ) {
					foreach ( $posts as $post ) {
						get_template_part( 'template-parts/content/single', 'card' );
					}
				} else {
					printf( '<p>%s</p>', 'No hay artículos…' );
				}
				?>
		</div>

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

	<?php if ( count( $posts ) > 0 ) : ?>
	<div class="container">
		<nav class="navigation pagination" aria-label="Navegación de entradas">
			<h2 class="screen-reader-text">Navegación de entradas</h2>
			<div class="nav-links">
				<?php
					print wp_kses_post(
						paginate_links(
							array(
								'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format'  => '?paged=%#%',
								'current' => max( 1, get_query_var( 'paged' ) ),
								'total'   => round( wp_count_posts()->publish / $ppp + 1 ),
								// 'total'   => wp_count_posts()->publish,
							)
						)
					);
				?>
			</div>
		</nav>
	</div>
	<?php endif ?>

</div>
