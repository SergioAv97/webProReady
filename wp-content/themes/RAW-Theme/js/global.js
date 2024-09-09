/**
 * Global JS file.
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

jQuery( document ).ready(
	function ($) {

		$( document ).on(
			'click',
			'a.toggle-nav',
			function (e) {
				e.stopPropagation();
				e.preventDefault();

				$( this ).next().find( '.menu' ).slideToggle( 500 );
			}
		);

		var touchtime = 0;
		$( document ).on(
			'click',
			'li.menu-item-has-children a',
			function (e) {
				if (touchtime === 0) {
					// console.log('clicked');
					e.preventDefault();
					touchtime = new Date().getTime();
				} else {
					if (((new Date().getTime()) - touchtime) < 800) {
						// console.log('double clicked');
						touchtime = 0;
					} else {
						e.preventDefault();
						touchtime = new Date().getTime();
					}
				}
			}
		);

	}
);