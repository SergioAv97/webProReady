<?php
/**
 * The template for displaying the single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content', 'single' );

	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: parent post link */
				'prev_text' => sprintf( __( '<span class="meta-nav">Publicado en</span><span class="post-title">%s</span>', 'raw' ), '%title' ),
			)
		);
	} elseif ( is_singular( 'post' ) ) {
		printf(
			'<div class="container">%s</div>',
			// Previous/next post navigation.
			wp_kses_post(
				get_the_post_navigation(
					array(
						'screen_reader_text' => ' ',
						'next_text'          => '<span class="meta-nav" aria-hidden="true">' . __( 'Siguiente artículo:', 'raw' ) . '</span> ' .
								'<span class="post-title">%title</span> <i class="fa-solid fa-caret-right"></i>',
						'prev_text'          => '<i class="fa-solid fa-caret-left"></i> <span class="meta-nav" aria-hidden="true">' . __( 'Artículo anterior:', 'raw' ) . '</span> ' .
								'<span class="post-title">%title</span>',
					)
				)
			)
		);

		print do_shortcode( '[raw-related-posts]' );
	}

	endwhile; // End of the loop.

get_footer();
