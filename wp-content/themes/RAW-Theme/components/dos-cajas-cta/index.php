<?php
/**
 * Componente: Body Reunificacion Deudas.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */
?>
<?php
	//Variable "upload_dir" para situar el inicio de la ruta en la carpeta Uploads (donde insertamos nuestro contenido media) de WordPress
    $upload_dir = wp_upload_dir();

	//IMAGENES Top Startup
    //$imgTopStartup = $upload_dir['baseurl'] . '/2024/medios/topStartup.png';
	
	//IMÁGENES equipo Fundadores
	//$imgCofundadorFer = $upload_dir['baseurl'] . '/2024/equipo/cofundadorManuel.png';
?>

<div class="raw-component body-reunificacion-deudas">
	<div class="containers-body-reunificacion-deudas">
		<div class="container-reunificacion-deudas">
			<?php
			printf(
				'<h3 class="container-title">%s</h3>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container1_title', true ) ) ?:
				'¿Necesitas reunificar tus deudas de manera urgente?'
			)
			?>
			<?php
			printf(
				'<h4 class="container-texto1">%s</h4>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container1_text1', true ) ) ?:
				'Elaboramos un estudio personalizado en el que valoramos la opción que mejor se ajuste a ti'
			)
			?>
			<?php
			printf(
				'<h1 class="container-texto2">%s</h1>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container1_text2', true ) ) ?:
				'Sal de ASNEF con un plan personalizado.'
			)
			?>
			<?php
			printf(
				'<p class="container-texto3">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container1_text3', true ) ) ?:
				'Es el momento de que recuperes tu libertad financiera y vuelvas a respirar.'
			)
			?>
			<a href="https://www.solucionamideuda.es/solucion-urgente/refinancia-deudas/#contacto">
				<?php
				printf(
					'<button id="boton6-cajas" class="container-button">%s</button>',
					esc_html( get_post_meta( get_the_ID(), 'raw_container1_button', true ) ) ?:
					'QUIERO SOLUCIONAR MI DEUDA'
				)
				?>
			</a>
		</div>
		<div class="container-reunificacion-deudas">
			<?php
			printf(
				'<h3 class="container-title">%s</h3>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container2_title', true ) ) ?:
				'¿Quieres salir de ASNEF?'
			)
			?>
			<?php
			printf(
				'<h4 class="container-texto1">%s</h4>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container2_text1', true ) ) ?:
				'Si estas en ASNEF o tienes dificultades para pagar tu deuda confia en nuestra experiencia'
			)
			?>
			<?php
			printf(
				'<h1 class="container-texto2">%s</h1>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container2_text2', true ) ) ?:
				'Te sacaremos de ASNEF cuanto antes.'
			)
			?>
			<?php
			printf(
				'<p class="container-texto3">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_container2_text3', true ) ) ?:
				'¿Nuestro compromiso? Que desaparezcas de los ficheros de morosidad.'
			)
			?>
			<a href="https://www.solucionamideuda.es/solucion-urgente/refinancia-deudas/#contacto">
				<?php
				printf(
					'<button id="boton7-cajas" class="container-button">%s</button>',
					esc_html( get_post_meta( get_the_ID(), 'raw_container2_button', true ) ) ?:
					'QUIERO SALIR DE ASNEF'
				)
				?>
			</a>
		</div>
		
	</div>
</div>

