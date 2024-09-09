<?php
/**
 * Componente: Botón.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

switch ( get_post_meta( get_the_ID(), 'raw_boton_type', true ) ) {
	case 'sectioncontrastbuttoncontrast':
		$component_class = 'contrast';
		$link_class      = 'contrast';
		break;

	case 'sectioncontrastbuttonanticontrast':
		$component_class = 'contrast';
		$link_class      = 'anticontrast';
		break;

	case 'buttoncontrast':
		$component_class = '';
		$link_class      = 'contrast';
		break;

	case 'buttonanticontrast':
		$component_class = '';
		$link_class      = 'anticontrast';
		break;

	case 'normal':
	default:
		$component_class = '';
		$link_class      = '';
		break;
}
?>
<div class="raw-component <?php print esc_attr( $component_class ); ?> boton">
	<div id="boton-acogete-ley" class="container">

		<?php
			printf(
				'<a role="button" class="%s" href="%s">%s</a>',
				esc_attr( get_post_meta( get_the_ID(), 'raw_boton_link_class', true ) ?: 'raw-balance-scale ' . $link_class . ' ffs' ),
				esc_url( get_post_meta( get_the_ID(), 'raw_boton_link_url', true ) ?: 'https://api.whatsapp.com/send/?phone=%2B34613056334&text=Hola%21+Quiero+informacion+sobre+Soluciona+Mi+Deuda.&type=phone_number&app_absent=0' ),
				esc_html( get_post_meta( get_the_ID(), 'raw_boton_link_text', true ) ?: 'Acógete a la Ley' )
			)
			?>

	</div>
</div>