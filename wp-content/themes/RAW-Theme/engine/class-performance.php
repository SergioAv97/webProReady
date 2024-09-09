<?php
/**
 * RAW Performance Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Performance
 * @since 1.0.0
 */

namespace Acronyms\RAW;

use WP_Admin_Bar;
use WP_Scripts;

/**
 * RAW Performance Class.
 *
 * This file is part of the Acronyms Engine ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @since 1.0.0
 */
class Performance {

	/**
	 * Construct function.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'disables' ) );
	}

	/**
	 * Disables function.
	 */
	public function disables(): void {

		// Remove emojis.
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', array( $this, 'disable_emojis_tinymce' ) );
		add_filter( 'wp_resource_hints', array( $this, 'disable_emojis_remove_dns_prefetch' ), 10, 2 );

		// Remove embeds.
		add_action( 'wp_footer', array( $this, 'deregister_embed_scripts' ) );
		remove_action( 'rest_api_init', 'wp_oembed_register_route' ); // Remove the REST API endpoint.
		add_filter( 'embed_oembed_discover', '__return_false' ); // Turn off oEmbed auto discovery.
		remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result' ); // Don't filter oEmbed results.
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' ); // Remove oEmbed discovery links.
		remove_action( 'wp_head', 'wp_oembed_add_host_js' ); // Remove oEmbed-specific JavaScript from the front-end and back-end.
		add_filter( 'tiny_mce_plugins', array( $this, 'disable_embeds_tiny_mce_plugin' ) );
		add_filter( 'rewrite_rules_array', array( $this, 'disable_embeds_rewrites' ) ); // Remove all embeds rewrite rules.
		remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result' ); // Remove filter of the oEmbed result before any HTTP requests are made.

		// Remove query strings.
		add_filter( 'script_loader_src', array( $this, 'remove_resources_query_strings' ), 15 );
		add_filter( 'style_loader_src', array( $this, 'remove_resources_query_strings' ), 15 );

		// Remove support for XML-RPC.
		add_filter( 'xmlrpc_enabled', '__return_false' );

		// Remove jQuery migrate.
		add_action( 'wp_default_scripts', array( $this, 'remove_jquery_migrate' ) );

		// Remove WP version.
		add_filter( 'the_generator', array( $this, 'remove_wp_version' ) );

		// Remove wlwmanifest link.
		remove_action( 'wp_head', 'wlwmanifest_link' );

		// Remove RSD link.
		remove_action( 'wp_head', 'rsd_link' );

		// Remove shortlinks.
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

		// Remove Self Pingbacks.
		add_action( 'pre_ping', array( $this, 'no_self_ping' ) );

		// Remove WP REST API Links & Scripts.
		remove_action( 'wp_head', 'rest_output_link_wp_head' );

		// Remove dashicons.
		add_action( 'wp_enqueue_scripts', array( $this, 'wpdocs_dequeue_dashicon' ) );

		// Remove Heartbeat.
		add_action( 'init', array( $this, 'stop_heartbeat' ), 1 );

		// Limit post revisions.
		if ( ! defined( 'WP_POST_REVISIONS' ) ) {
			define( 'WP_POST_REVISIONS', 3 );
		}

		// Update autosave interval.
		if ( ! defined( 'AUTOSAVE_INTERVAL' ) ) {
			define( 'AUTOSAVE_INTERVAL', 180 ); // Segundos.
		}

		// Securize login, logout, lostpassword.
		add_action( 'login_head', array( $this, 'securize_login_logout_lostpassword' ) );

		// Replace admin Bar logout link.
		add_action( 'admin_bar_menu', array( $this, 'replace_admin_bar_logout' ), 99 );
	}

	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 *
	 * @param array $plugins Array of plugins.
	 * @return array Difference betwen the two arrays.
	 */
	public function disable_emojis_tinymce( $plugins ): array {

		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}

	/**
	 * Remove emoji CDN hostname from DNS prefetching hints.
	 *
	 * @param array  $urls URLs to print for resource hints.
	 * @param string $relation_type The relation type the URLs are printed for.
	 *
	 * @return array Difference betwen the two arrays.
	 */
	public function disable_emojis_remove_dns_prefetch( $urls, $relation_type ): array {

		if ( 'dns-prefetch' === $relation_type ) {
			/** This filter is documented in wp-includes/formatting.php */
			$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

			$urls = array_diff( $urls, array( $emoji_svg_url ) );
		}

		return $urls;
	}

	/**
	 * Deregister embed scripts.
	 */
	public function deregister_embed_scripts(): void {

		wp_dequeue_script( 'wp-embed' );
	}

	/**
	 * Disable embeds in Tiny MCE plugin.
	 *
	 * @param array $plugins Array of plugins.
	 */
	public function disable_embeds_tiny_mce_plugin( $plugins ): array {

		return array_diff( $plugins, array( 'wpembed' ) );
	}

	/**
	 * Disable embeds rewrites.
	 *
	 * @param array $rules Array of rewrite rules.
	 */
	public function disable_embeds_rewrites( $rules ) {

		foreach ( $rules as $rule => $rewrite ) {
			if ( str_contains( $rewrite, 'embed=true' ) ) {
				unset( $rules[ $rule ] );
			}
		}

		return $rules;
	}

	/**
	 * Remove resources query strings.
	 *
	 * @param string $src Resource source.
	 */
	public function remove_resources_query_strings( $src ): string {

		$parts = explode( '?ver', $src );

		return $parts[0];
	}

	/**
	 * Remove jQuery Migrate script from the jQuery bundle only in front end.
	 *
	 * @param WP_Scripts $scripts WP_Scripts object.
	 */
	public function remove_jquery_migrate( WP_Scripts $scripts ): void {

		if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			$script = $scripts->registered['jquery'];

			// Check whether the script has any dependencies.
			if ( ! empty( $script->deps ) ) {
				$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
			}
		}
	}

	/**
	 * Remove WP version.
	 */
	public function remove_wp_version(): string {

		return '';
	}

	/**
	 * Remove self pings.
	 *
	 * @param array $links Array of links.
	 */
	public function no_self_ping( &$links ): void {

		$home = get_option( 'home' );

		foreach ( $links as $key => $link ) {
			if ( str_starts_with( $link, $home ) ) {
				unset( $links[ $key ] );
			}
		}
	}

	/**
	 * Deregister dashicons for non-admins.
	 */
	public function wpdocs_dequeue_dashicon(): void {

		if ( current_user_can( 'update_core' ) ) {
			return;
		}

		wp_deregister_style( 'dashicons' );
	}

	/**
	 * Disable HeartBeat.
	 */
	public function stop_heartbeat(): void {

		wp_deregister_script( 'heartbeat' );
	}

	/**
	 * Setup custom login page.
	 */
	public function custom_login_page(): ?string {

		return home_url( '/acceso.php', 'login' );
	}

	/**
	 * Setup custom logout page.
	 *
	 * @param string $logout_url Logout URL.
	 * @param string $redirect Redirect URL.
	 */
	public function custom_logout_page( $logout_url, $redirect ): ?string {

		return wp_nonce_url( home_url( '/acceso.php?action=logout&redirect_to=' . $redirect, 'logout' ), 'log-out' );
	}

	/**
	 * Setup custom lost password page.
	 */
	public function custom_lost_password_page(): ?string {

		return home_url( '/acceso.php?action=lostpassword', 'lostpassword' );
	}

	/**
	 * Securize custom login, logout and lostpassword pages.
	 */
	public function securize_login_logout_lostpassword(): void {

		// Rename the WordPress login URL.
		add_filter( 'login_url', array( $this, 'custom_login_page' ), 99 );

		// Rename the WordPress logout URL.
		add_filter( 'logout_url', array( $this, 'custom_logout_page' ), 99, 2 );

		// Rename the Lost Password URL.
		add_filter( 'lostpassword_url', array( $this, 'custom_lost_password_page' ), 99, 2 );
	}

	/**
	 * Add a "Log out" link directly to the admin bar.
	 *
	 * @link    http://wordpress.stackexchange.com/q/141446/1685
	 *
	 * @param WP_Admin_Bar $wp_admin_bar WP Admin Bar object.
	 */
	public function replace_admin_bar_logout( WP_Admin_Bar $wp_admin_bar ): void {

		$all_nodes = $wp_admin_bar->get_nodes();

		$new_node = $all_nodes['logout'];

		$wp_admin_bar->remove_node( 'logout' );

		$new_node->href = esc_url( wp_nonce_url( home_url( '/acceso.php?action=logout', 'logout' ), 'log-out' ) );

		$wp_admin_bar->add_node( $new_node );
	}
}

new Performance();
