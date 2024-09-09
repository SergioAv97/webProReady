<?php
/**
 * Componente: Titulo Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component titulo-texto">
	<div class="container">

		<h2>
		<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_titulo-texto_title', true ) )
				?: 'Nuestro programa ayuda a particulares y autónomos que no puedan hacer frente a sus deudas';
		?>
		</h2>

		<p>
		<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_titulo-texto_text', true ) )
				?: 'Para poder aplicar al mismo es necesario que las deudas que se metan en el programa y que no se puedan hacer frente sean negociables, es decir, que no tengan una garantía real que se pueda ejecutar, como por ejemplo una hipoteca. En el caso de hipotecas siempre podemos buscar alguna opción alternativa, así que no dejes de consultarnos.';
		?>
		</p>

	</div>
</div>