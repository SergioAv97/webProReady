<?php
/**
 * Componente: Caja Formulario Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component caja-formulario-imagen">
	<div class="container">
		<?php
			$faq_type = get_post_meta( get_the_ID(), 'raw_caja-formulario-imagen_type', true );

		switch ( $faq_type ) {
			case 'leysegundaoportunidad':
					include_once 'ley-segunda-oportunidad.php';
				break;
			case 'definitivacancelardeudas':
					include_once 'definitiva-cancelar-deudas.php';
				break;
			default:
			case 'faqcancelardeudas':
				include_once 'faq-cancelar-deudas.php';
				break;
		}
		?>
	</div>
</div>