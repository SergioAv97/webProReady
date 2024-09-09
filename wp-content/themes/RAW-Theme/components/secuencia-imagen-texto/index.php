<?php
/**
 * Componente: Secuencia Imagen Texto.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component secuencia-imagen-texto">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_title', true ) ) ?: 'Todos los beneficios de cancelar deudas'; ?></h2>

		<ul>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_icon_1', true ) ) ?: 'fa-solid fa-person-harassing'
				)
				?>
				<div>
					<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_title_1', true ) ) ?: 'Resolución del estrés financiero'; ?></h3>
					<p>
					<?php
						print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_text_1', true ) )
							?: 'Cuando tienes deudas pendientes, es normal sentirse estresado y preocupado constantemente por cómo pagarlas. Cancelar tus deudas te dará un alivio financiero significativo y te permitirá disfrutar de una mayor tranquilidad mental'
					?>
					</p>
				</div>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_icon_2', true ) ) ?: 'fa-solid fa-piggy-bank'
				)
				?>
				<div>
					<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_title_2', true ) ) ?: 'Ahorro de dinero en intereses'; ?></h3>
					<p>
					<?php
						print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_text_2', true ) )
							?: 'Las deudas a menudo conllevan altas tasas de interés, lo que significa que estás pagando más dinero del que originalmente pediste prestado. Cancelar tus deudas antes de tiempo te permitirá ahorrar una gran cantidad de dinero en intereses'
					?>
					</p>
				</div>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_icon_3', true ) ) ?: 'fa-solid fa-credit-card'
				)
				?>
				<div>
					<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_title_3', true ) ) ?: 'Mejora de tu historial crediticio'; ?></h3>
					<p>
					<?php
						print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_text_3', true ) )
							?: 'Si tienes deudas pendientes, esto puede afectar negativamente tu puntuación de crédito. Cancelar tus deudas te permitirá mejorar tu historial crediticio y aumentar tu calificación, lo que puede facilitar la obtención de préstamos o créditos en el futuro'
					?>
					</p>
				</div>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_icon_4', true ) ) ?: 'fa-solid fa-wallet'
				)
				?>
				<div>
					<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_title_4', true ) ) ?: 'Mayor capacidad para ahorrar e invertir'; ?></h3>
					<p>
					<?php
						print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_text_4', true ) )
							?: 'Cuando tienes deudas pendientes, gran parte de tu ingreso se destina a pagarlas. Al cancelar tus deudas, tendrás una mayor capacidad para ahorrar e invertir en tu futuro financiero'
					?>
					</p>
				</div>
			</li>
			<li>
				<?php
				printf(
					'<i class="%s"></i>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_icon_5', true ) ) ?: 'fa-solid fa-handcuffs'
				)
				?>
				<div>
					<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_title_5', true ) ) ?: 'Libertad financiera'; ?></h3>
					<p>
					<?php
						print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_text_5', true ) )
							?: 'Al cancelar tus deudas, tendrás una mayor libertad financiera para tomar decisiones importantes como cambiar de trabajo, iniciar tu propio negocio o hacer grandes compras, sin estar limitado por tus obligaciones de pago'
					?>
					</p>
				</div>
			</li>
		</ul>

		<blockquote>
		<?php
		print wp_kses_post( get_post_meta( get_the_ID(), 'raw_secuencia-imagen-texto_blockquote', true ) ) ?:
			'Cancelar tus deudas puede proporcionarte una gran cantidad de beneficios financieros y emocionales. Si tienes deudas pendientes, es importante que consideres un plan para pagarlas y liberarte de esa carga financiera.<br><br><b>Soluciona Mi Deuda</b>'
		?>
		</blockquote>
	</div>
</div>