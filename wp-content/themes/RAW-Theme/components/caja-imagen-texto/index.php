<?php
/**
 * Componente: Caja Imagen Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast caja-imagen-texto">
	<div class="grid container">

		<div class="opiniones">
			<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-imagen-texto_opiniones_title', true ) ) ?: 'Opiniones'; ?></h3>

			<div id="caja-conocenos" class="grid">
			<?php
				$posts = get_posts(
					array(
						'ignore_sticky_posts' => 1,
						'numberposts'         => 4,
						'category'            => (int) esc_html( get_post_meta( get_the_ID(), 'raw_caja-imagen-texto_opiniones_category_id', true ) ) ?: 53, // Category: Opiniones.
						'orderby'             => 'date',
						'order'               => 'DESC',
					)
				);

				foreach ( $posts as $post ) {
					get_template_part( 'template-parts/content/content', 'card' );
				}
				?>
				</div>
		</div>

		<div class="exitos">
			<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_caja-imagen-texto_exitos_title', true ) ) ?: 'Casos de éxito'; ?></h3>

			<div id="caja-exito" class="grid">
			<?php
				$posts = get_posts(
					array(
						'ignore_sticky_posts' => 1,
						'numberposts'         => 4,
						'orderby'             => 'date',
						'order'               => 'DESC',
						'tax_query'           => array(
							array(
								'taxonomy'         => 'post_tag',
								'field'            => 'term_id',
								'terms'            => (int) get_post_meta( get_the_ID(), 'raw_caja-imagen-texto_exitos_term_id', true ) ?: 52, // Term : Casos de éxito.
								'include_children' => false,
							),
						),
					)
				);

				foreach ( $posts as $post ) {
					get_template_part( 'template-parts/content/content', 'card' );
				}
				?>
			</div>
		</div>

	</div>
</div>
<?php
unset( $posts, $post );