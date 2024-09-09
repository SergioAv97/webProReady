<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

?>
		</main>
	</section>

	<footer id="footer">
		<div id="social" class="container grid">
			<a role="button" class="raw-phone" href="tel:910916445">Llámanos sin compromiso</a>

			<?php
				// Social menu.
				wp_nav_menu(
					array(
						'menu'           => 'social',
						'menu_id'        => 'raw-social-menu',
						'link_before'    => '<span>',
						'link_after'     => '</span>',
						'theme_location' => 'social',
					)
				);
				?>
		</div>

		<?php
			// Footer menu.
			wp_nav_menu(
				array(
					'menu'            => 'foot-navigation',
					'menu_id'         => 'raw-foot-navigation',
					'container'       => 'div',
					'container_class' => 'container',
					'before'          => '',
					'after'           => '',
					'theme_location'  => 'foot-navigation',
				)
			);
			?>

		<p class="container"><small>THE FINTECH LABORATORY, S.L, con domicilio social en PASEO DE LA CASTELLANA 111, 1º, 28046 MADRID, con N.I.F. B88473533, inscrita en el Registro Mercantil de Madrid, en el Tomo 39602, Folio 137, Hoja 702905.</p>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>