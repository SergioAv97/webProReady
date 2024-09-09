/**
 * Admin JS file.
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

jQuery( document ).ready(
	function ($) {

		// Combine the active components lists into one.
		let $acli    = $( '#raw_active_components li' );
		let $newacli = $( '<ul />' ).append( $acli.clone() );

		// Remove default lists.
		$acli.parent( 'ul' ).remove();
		$newacli.appendTo( '#raw_active_components .inside' );

		$( '#raw_active_components ul' ).sortable(
			{
				start: function (e, ui) {
					$( this ).attr( 'data-previndex', ui.item.index() );
				}
			}
		);

		$( '#raw_active_components li' ).draggable(
			{
				connectToSortable: '#raw_active_components ul',
				revert: 'invalid'
			}
		)
		.on(
			'dragstop',
			function () {
				RAW_get_order();
			}
		);

		$( '#raw_active_components ul, #raw_active_components li' ).disableSelection();

		// ···

		function escapeHTML(string) {
			let entityMap = {
				'&': '&amp;',
				'<': '&lt;',
				'>': '&gt;',
				'"': '&quot;',
				"'": '&#39;',
				'/': '&#x2F;',
				'`': '&#x60;',
				'=': '&#x3D;'
			};

			return String( string ).replace(
				/[&<>"'`=\/]/g,
				function (s) {
					return entityMap[s];
				}
			);
		}

		function RAW_get_order() {

			let order = [];

			$( '#raw_active_components li' ).each(
				function (index, item) {
					let res = $( item ).find( 'input' ).attr( 'name' );

					if ( 'undefined' !== typeof res ) {
						order.push( res );
					}
				}
			);

			// Order value.
			order = escapeHTML( JSON.stringify( order ) );

			$( '#raw_active_components #raw_active_components_order' ).remove();
			let $rawOrderField = '<input type="hidden" name="raw_active_components_order" id="raw_active_components_order" value="' + order + '" />';
			$( '#raw_active_components .inside' ).prepend( $rawOrderField );

		}

	}
);
