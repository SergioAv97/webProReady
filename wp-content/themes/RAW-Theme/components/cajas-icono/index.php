<?php
/**
 * Componente: Cajas Icono.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component cajas-icono">
	<div class="container">
		<ul class="grid">
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_cajas-icono_icon_1', true ) ) ?: 'fa-solid fa-percent'
				);
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_title_1', true ) ) ?: 'Recuperamos tu dinero'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_text_1', true ) )
						?: 'Conseguimos descuentos que van desde el 15% hasta conseguir que las entidades te devuelvan el dinero que te pertenece'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_cajas-icono_icon_2', true ) ) ?: 'fa-solid fa-sliders'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_title_2', true ) ) ?: 'Plan hecho a tu medida'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_text_2', true ) )
						?: 'Analizamos tu situación y te ofrecemos la solución que mejor se adapte a tus necesidades financieras y económicas'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_cajas-icono_icon_3', true ) ) ?: 'fa-solid fa-phone-volume'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_title_3', true ) ) ?: 'Trámite 100% on-line'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_text_3', true ) )
						?: 'Nuestras oficinas siempre estarán a tu disposición pero si quieres puedes realizar todo el proceso directamente desde tu casa'
				?>
				</p>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_cajas-icono_icon_4', true ) ) ?: 'fa-solid fa-stopwatch'
				)
				?>
				<p class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_title_4', true ) ) ?: 'Desde la primera cuota'; ?></p>
				<p>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_cajas-icono_text_4', true ) )
						?: 'Trabajamos en liquidar tus deudas con la mayor eficacia y negociamos tus financiaciones desde la primera cuota'
				?>
				</p>
			</li>
		</ul>
	</div>
</div>