<?php
/**
 * The template-part for displaying default content as cards.
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
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<small><?php the_excerpt(); ?></small>
		<br>
		<div><?php print get_the_date(); ?></div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->