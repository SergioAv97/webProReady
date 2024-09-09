<?php
/**
 * The main template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

use Acronyms\RAW\Components;

get_header();

$actives = 0;

// Load components, and order for checks.
$active_components       = (array) get_post_meta( get_the_ID(), 'raw_active_components', true );
$active_components_order = get_post_meta( get_the_ID(), 'raw_active_components_order', true );

// Check for Active Components.
foreach ( $active_components as $component => $active ) {
	if ( ! empty( $active ) ) {
		++$actives;
	}
}

// Check if order var exists (means has active components ordered) and print components.
if ( $actives && $active_components_order ) {
	// Reorder components before iterating.
	$ordered_components = ( new Acronyms\RAW\Components() )->maybe_order_components() ?? $active_components;

	foreach ( $ordered_components as $component => $component_path ) {
		// Only show active components.
		if ( 'index.php' !== $component && isset( $active_components[ $component ] ) && $active_components[ $component ] ) {
			Components::load_component_code( $component );
		}
	}

	// Or print the RAW content of the WP page.
} else {
	?>
	<section class="container static">
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</section>
	<?php
}

get_footer() ?>