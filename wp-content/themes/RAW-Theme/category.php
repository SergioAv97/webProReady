<?php
/**
 * The template for displaying category archive pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

get_header();

global $paged;

$ppp      = get_option( 'posts_per_page' );
$category = get_queried_object()->term_id;
$offset   = ( is_paged() ? ( $ppp * ( $paged - 1 ) ) : 0 );
?>

<div id="category-page">
	<section class="contrast">
		<h1><?php printf( 'Categoría: <span>%s</span>', single_cat_title( '', false ) ); ?></h1>
	</section>

	<section class="container grid">
		<?php
			// Category posts.
			$opiniones = get_posts(
				array(
					'ignore_sticky_posts' => 1,
					'numberposts'         => $ppp,
					'offset'              => $offset,
					'category'            => $category,
					'orderby'             => 'date',
					'order'               => 'DESC',
				)
			);

			if ( count( $opiniones ) > 0 ) {
				foreach ( $opiniones as $opinion ) {
					setup_postdata( $opinion );
					the_post();

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
				print '<p>No hay artículos de esta categoría.</p>';
			}
			?>
	</section>
</div>

<?php get_footer(); ?>
