<?php
/**
 * Componente: Tres Cajas CTA.
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

<div class="raw-component tres-cajas-cta">
    <!-- Enlace a la fuente Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* Aplicar la fuente Poppins al componente */
        .raw-component {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <div class="titulos-cta">
        <?php
			printf(
				'<h1 class="title-cta">%s</h1>',
				esc_html( get_post_meta( get_the_ID(), 'raw_title_cta', true ) ) ?:
				'Recupera tu salud crediticia.'
			)
		?>
        <?php
			printf(
				'<h3 class="texto-cta">%s</h3>',
				esc_html( get_post_meta( get_the_ID(), 'raw_texto_cta', true ) ) ?:
				'Descubre la solución que más se adapte a ti.'
			)
		?>
    </div>
    <div class="cajas-cta">
        <div class="cajas">
            <?php
                printf(
                    '<h3 class="caja1-title">%s</h3>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja1_title', true ) ) ?:
                    ''
                )
            ?>
            <?php
                printf(
                    '<p class="caja1-texto1">%s</p>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja1_texto1', true ) ) ?:
                    ''
                )
            ?>
            <?php
                printf(
                    '<p class="caja1-texto2">%s</p>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja1_texto2', true ) ) ?:
                    ''
                )
            ?>
            <a href="https://www.solucionamideuda.es/solucion-urgente/refinancia-deudas/#contacto">
                <?php
                    printf(
                        '<button id="boton8-cajas" class="caja1-button">%s</button>',
                        esc_html( get_post_meta( get_the_ID(), 'raw_caja1_button', true ) ) ?:
                        ''
                    )
                ?>
            </a>
        </div>
        <div class="cajas">
            <?php
                printf(
                    '<h3 class="caja1-title">%s</h3>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja2_title', true ) ) ?:
                    ''
                )
            ?>
            <?php
                printf(
                    '<p class="caja1-texto1">%s</p>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja2_texto1', true ) ) ?:
                    ''
                )
            ?>
            <?php
                printf(
                    '<p class="caja1-texto2">%s</p>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja2_texto2', true ) ) ?:
                    ''
                )
            ?>
            <a href="https://www.solucionamideuda.es/solucion-urgente/refinancia-deudas/#contacto">
                <?php
                    printf(
                        '<button id="boton9-cajas" class="caja1-button">%s</button>',
                        esc_html( get_post_meta( get_the_ID(), 'raw_caja2_button', true ) ) ?:
                        ''
                    )
                ?>
            </a>
        </div>
        <div class="cajas">
        <?php
			printf(
				'<h3 class="caja1-title">%s</h3>',
				esc_html( get_post_meta( get_the_ID(), 'raw_caja3_title', true ) ) ?:
				''
			)
		?>
        <?php
			printf(
				'<p class="caja3-texto1">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_caja3_texto1', true ) ) ?:
				''
			)
		?>
        <?php
			printf(
				'<p class="caja1-texto2">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_caja3_texto2', true ) ) ?:
				''
			)
		?>
        <a href="https://www.solucionamideuda.es/solucion-urgente/refinancia-deudas/#contacto">
            <?php
                printf(
                    '<button id="boton10-cajas" class="caja1-button">%s</button>',
                    esc_html( get_post_meta( get_the_ID(), 'raw_caja3_button', true ) ) ?:
                    ''
                )
            ?>
        </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener todos los botones con la clase 'caja1-button'
        var buttons = document.querySelectorAll('.caja1-button');

        // Iterar sobre cada botón
        buttons.forEach(function(button) {
            // Agregar un evento 'click' a cada botón
            button.addEventListener('click', function() {
                // Desplazar suavemente hacia el principio de la página
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    });
</script>