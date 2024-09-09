<?php
/**
 * The template-part for displaying cards using the single.php template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="card">
		<a href="<?php the_permalink(); ?>"><?php print wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), array( 250, 180 ) ); ?></a>

		<?php
			$author = get_the_author_meta( 'ID' );

		if ( ! is_author() && has_post_thumbnail() ) {
			printf(
				'<a href="%s" title="%s">%s</a>',
				esc_url( get_author_posts_url( $author ) ),
				esc_attr( get_the_author_meta( 'display_name' ) ),
				get_avatar( $author, 50 )
			);
		}
		?>

		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<small><?php the_excerpt(); ?></small>
		<br>
		<div><?php print get_the_date(); ?></div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->