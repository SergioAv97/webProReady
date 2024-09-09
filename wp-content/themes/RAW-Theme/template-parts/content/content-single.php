<?php
/**
 * The template-part for displaying default contents using the single.php template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

$background_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header" style="background: url('<?php print esc_url( $background_image ); ?>') no-repeat, linear-gradient( rgba(0,0,0,.5), rgba(0,0,0,.75) );">
		<h1><?php the_title(); ?></h1>
		<p><?php the_date(); ?></p>
		<p><?php print get_avatar( get_the_author_meta( 'ID' ) ); ?></p>
		<p><?php print wp_kses_post( get_the_author_posts_link() ); ?></p>
	</div>

	<section class="grid container">
		<div>
			<div class="entry-content container">
				<?php
				if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
					rank_math_the_breadcrumbs(
						array(
							'wrap_before' => '<i class="fa-solid fa-bookmark float"></i><nav aria-label="breadcrumbs" class="rank-math-breadcrumb"><p>',
						)
					); }
				?>

				<p><?php the_tags( '<i class="fa-solid fa-tags"></i>' ); ?></p>

				<?php
					the_content(
						sprintf(
							wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'raw' ),
								array( 'span' => array( 'class' => array() ) )
							),
							get_the_title()
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Páginas:', 'raw' ) . '&nbsp;',
							'after'  => '</div>',
						)
					);
					?>
			</div><!-- .entry-content -->

			<footer class="entry-footer container">
				<?php if ( ! is_singular( 'attachment' ) ) : ?>
					<?php print do_shortcode( '[ratemypost]' ); ?>
					<br>
					<p><small><em>Si deseas compartir tu experiencia para enriquecer este artículo o has identificado algún error o inexactitud, no dudes en ponerte en contacto con nosotros en <a href="mailto:contenidos@solucionamideuda.es">contenidos@solucionamideuda.es</a>.</em></small></p>
					<br>
					<h5>Etiquetas:</h5>
					<?php wp_tag_cloud(); ?>

					<br><br>
					<?php print do_shortcode( '[raw-share]' ); ?>
					<br><br>
				<?php endif; ?>
			</footer><!-- .entry-footer -->
		</div>

		<?php get_template_part( 'sidebar' ); ?>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->