<?php
/**
 * Componente: Hero Degradado.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component hero-degradado">
	<div class="container">

		<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-degradado_title', true ) ) ?: '100% dedicados a liquidar todas tus deudas.'; ?></h1>

		<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-degradado_text', true ) ) ?: 'Ayudamos a las personas que se encuentran en una situación de sobreendeudamiento.'; ?></p>

	</div>
</div>