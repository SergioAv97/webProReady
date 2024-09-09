<?php
/**
 * The template for displaying author archive pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

get_header();

global $paged;

$ppp           = get_option( 'posts_per_page' );
$author        = get_the_author_meta( 'ID' );
$custom_offset = ( is_paged() ? ( $ppp * ( $paged - 1 ) ) : 0 );
?>

<div id="author-page">
	<section class="author contrast">
		<div class="container">
			<?php print get_avatar( $author, 150 ); ?>
			<div>
				<h1><?php print esc_html( get_the_author_meta( 'display_name' ) ); ?></h1>
				<p><?php print nl2br( esc_html( get_the_author_meta( 'description' ) ) ); ?></p>
			</div>
		</div>
	</section>

	<section class="container grid">
		<?php
			// Articulos.
			$articles = get_posts(
				array(
					'ignore_sticky_posts' => 1,
					'numberposts'         => $ppp,
					'offset'              => $custom_offset,
					'author'              => $author,
					'orderby'             => 'date',
					'order'               => 'DESC',
				)
			);

			if ( count( $articles ) > 0 ) {
				foreach ( $articles as $articles ) {
					get_template_part( 'template-parts/content/single', 'card' );
				}

				print '</section><section class="container">';

				print wp_kses_post(
					get_the_posts_pagination(
						array(
							'mid_size'           => 2,
							'screen_reader_text' => '',
							'aria_label'         => '',
							'prev_text'          => '<span>Anterior</span>',
							'next_text'          => '<span>Siguiente</span>',
						)
					)
				);
			} else {
				print '<p>No hay artículos de este usuario.</p>';
			}
			?>
	</section>
</div>

<?php get_footer(); ?>
