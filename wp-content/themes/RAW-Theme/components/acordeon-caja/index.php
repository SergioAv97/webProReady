<?php
/**
 * Componente: Acordeón Caja.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component acordeon-caja">
	<div class="container">

		<h2 class="big"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-caja_title', true ) ) ?: '¿Qué nos hace diferentes?'; ?></h2>

		<div id="acordeon-li-caja">
			<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-caja_editor', true ) ) ?: '
				<ul class="accordion">
					<li>
						<input type="checkbox" class="hidden" id="raw_acordeon-caja_1">
						<h3>
							<label for="raw_acordeon-caja_1">Te ofrecemos la Ley solo si te conviene</label>
						</h3>
						<div>
							<p>Soluciona Mi Deuda nos diferenciamos del resto de abogados de Ley de Segunda Oportunidad en que valoramos ese estado previo para <b>evitar que puedas llegar a perder tus bienes y patrimonio</b>.</p>
							<p>Además, <b>no nos dedicamos en exclusiva a la Ley de Segunda Oportunidad</b>, tenemos un programa de renegociación de deuda, y podemos proponerte uno u otro en función de lo que más te convenga a ti.</p>
							<p>El resto de bufetes que se dedican a este procedimiento están obligados a vender la Ley de Segunda Oportunidad de cualquier manera y a cualquier precio.</p>
							<p>Lo que da lugar a muchas personas insatisfechas que generan opiniones negativas del procedimiento debido a que no se les ha asesorado correctamente y se les ha vendido la segunda oportunidad sin que su caso sea adecuado para la misma.</p>
						</div>
					</li>
	
					<li>
						<input type="checkbox" class="hidden" id="raw_acordeon-caja_2">
						<h3>
							<label for="raw_acordeon-caja_2">Somos los más rápidos en finalizar el procedimiento</label>
						</h3>
						<div>
							<p>Otro de nuestros fuertes es la <b>agilidad con la que damos fin al procedimiento</b> de la Ley de Segunda Oportunidad.</p>
							<p>Los sistemas con los que gestionamos la Ley nos permite avanzar de fase con la mayor rapidez posible.</p>
							<p>Esto es un gran beneficio para nuestros clientes que ven como el proceso acaba en muchos casos, un año antes que con el resto de bufetes.</p>
							<p>La Ley de Segunda Oportunidad es un procedimiento que, de ser realizado correctamente debería durar entre 9 meses y algo más de un año.</p>
							<p><b>«Quedate con quién la ejecute con mayor efectividad, ya que la liquidación de tus deudas es lo más importante, tu tranquilidad es lo más importante.»</b></p>
						</div>
					</li>
				</ul>'
			?>
		</div>

	</div>
</div>