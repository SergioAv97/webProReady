<?php
/**
 * Componente: Descripción CTA.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component descripcion-cta">
	<div class="container">
		<?php
			print wp_kses_post( get_post_meta( get_the_ID(), 'raw_descripcion-cta_editor', true ) ) ?:
				'<h2>Fases del proceso y pasos a seguir para poder cancelar una deuda en Sevilla</h2>
				<p>Nuestra gran trayectoria negociando deudas nos convierte en la mejor opción de <b>abogados de reunificación de deudas de Sevilla</b>, pues tenemos acuerdos con la gran mayoría de entidades que emiten financiación en el mercado. Esto nos permite lograr descuentos muy elevados sin que haga falta ir a juicio.</p>
				<p>La reducción de la deuda que conseguimos es muy similar a la de muchos despachos con la diferencia de que no tenemos que acudir a procedimientos judiciales para lograrla. Además, sabemos que liquidar tus deudas por procedimiento amistosos es beneficioso para que el expediente sea resuelto con los mejores resultados.</p>
				<p>Somos ágiles en la negociación de deudas, algo que favorece que nuestros clientes resuelvan el sobreendeudamiento antes de lo que pensaban posible.</p>
				<p>El proceso para cancelar tus deudas con nosotros pasa por los siguientes pasos:</p>
				<ol>
					<li>Nuestro equipo de asesores financieros estudia la situación particular del cliente.</li>
					<li>Presentan una solución adaptada y propone un plan de pagos a través de la reunificación de las cuotas de tus préstamos o la Ley de Segunda Oportunidad.</li>
					<li>Después de analizar tu caso, juristas con amplia experiencia reunirán y estudiarán toda la documentación requerida para la negociación de tus deudas. Al mismo tiempo y durante todo el proceso, estarán disponibles para informarte y resolver cualquier duda y consulta que tengas.</li>
					<li>Con el plan de acción diseñado, el mejor equipo de <b>abogados para tus deudas de Sevilla</b> estará al cargo de las negociaciones con las entidades y llevar a cabo las reclamaciones correspondientes tanto por la vía amistosa como por la judicial.</li>
				</ol>
				<p>En los casos en los que la cantidad recuperada a tu favor puede ser mayor para ti, reclamaremos tus deudas a través de procedimientos judiciales. Nuestros <b>abogados de Sevilla para tus deudas </b>conocen a la perfección los recursos legales para lograr la mayor reducción y recupero de dinero adeudado.</p>
				<p>Trabajamos lo más eficiente y ágil posible para conseguir sentencias favorables a nuestros clientes en un corto plazo de tiempo. Esto lo logramos gracias a nuestra prolongada experiencia en solución de deudas.</p>';

			printf(
				'<a id="boton-descripcion-cta" role="button" class="raw-phone" href="%s">%s</a>',
				esc_url( get_post_meta( get_the_ID(), 'raw_descripcion-cta_button_link', true ) ) ?: 'tel:+34910916445',
				esc_html( get_post_meta( get_the_ID(), 'raw_descripcion-cta_button_text', true ) ) ?: 'Llámanos gratuitamente'
			);
			?>
	</div>
</div>