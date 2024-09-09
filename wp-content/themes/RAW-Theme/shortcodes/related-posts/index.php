<?php
/**
 * RAW Related Posts Shortcode.
 *
 * This file is part of the Acronyms RAW Theme Shortcodes ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Shortcodes
 * @since 1.0.0
 */

add_action(
	'init',
	function () {
		add_shortcode(
			'raw-related-posts',
			function () {

				global $post;

				// Get the post ID.
				$post_id = get_the_ID();

				// Get the categories.
				$categories = get_the_category( $post_id );

				// Get the tags.
				$tags = get_the_tags( $post_id );

				// Initialize an empty array for the related posts.
				$related_posts = array();

				// If there are categories or tags, get related posts based on them.
				if ( $categories || $tags ) {

					// Set up the query arguments.
					$args = array(
						'post_type'      => 'post',
						'post__not_in'   => array( $post_id ),
						'posts_per_page' => 4,
						'order'          => 'DESC',
						'orderby'        => 'rand',
					);

					// If there are categories, add them to the query.
					if ( $categories ) {
							$category_ids = array();

						foreach ( $categories as $category ) {
							$category_ids[] = $category->term_id;
						}

							$args['category__in'] = $category_ids;
					}

					// If there are tags, add them to the query.
					if ( ! $categories && $tags ) {
						$tag_ids = array();

						foreach ( $tags as $tag ) {
							$tag_ids[] = $tag->term_id;
						}

						$args['tag__in'] = $tag_ids;
					}

					// Get the related posts.
					$related_posts = get_posts( $args );

				}

				// If there are no related posts based on categories or tags, get random posts.
				if ( empty( $related_posts ) ) {

					// Set up the query arguments.
					$args = array(
						'post__not_in'   => array( $post_id ),
						'posts_per_page' => 4,
						'orderby'        => 'rand',
					);

					// Get the random posts.
					$related_posts = get_posts( $args );

				}

				// Output the related posts.
				print '<div class="raw-related-posts container"><h4>Más entradas que te pueden interesar</h4><div class="grid">';

				if ( 0 < count( $related_posts ) ) {
					foreach ( $related_posts as $related_post ) {
						setup_postdata( $related_post );

						// phpcs:ignore WordPress.WP.GlobalVariablesOverride
						$post = $related_post;

						get_template_part( 'template-parts/content/single', 'card' );
					}
				} else {
					print '<p>No hay artículos relacionados.</p>';
				}

				print '</div></div>';

				wp_reset_postdata();
			}
		);
	}
);
