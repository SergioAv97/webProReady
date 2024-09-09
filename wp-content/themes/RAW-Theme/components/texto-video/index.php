<?php
/**
 * Componente: Texto Video.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component texto-video">
	<div class="container">

		<?php
			$type = get_post_meta( get_the_ID(), 'raw_texto-video_type', true );

		switch ( $type ) {
			default:
			case 'home':
				include_once 'home.php';
				break;
			case 'reunificacin':
					include_once 'reunificacion.php';
				break;
		}
		?>

	</div>
</div>