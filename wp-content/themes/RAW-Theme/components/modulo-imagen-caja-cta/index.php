<?php
/**
 * Componente: Modulo Imagen Caja CTA.
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

<div class="raw-component modulo-imagen-caja-cta">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <?php
			printf(
				'<h2 class="titulo-moduloImagen">%s</h2>',
				esc_html( get_post_meta( get_the_ID(), 'raw_titulo_Componente', true ) ) ?:
				'Cancela tu Deuda sin pedir nuevos préstamos y sin intereses'
			)
		?>

        <div class="cajas-modulo-imagen-cta">
            <div class="caja-imagen-modulo">
                    <?php
                        // Obtener el ID de la imagen desde los metadatos del post
                        $image_id = get_post_meta(get_the_ID(), 'raw_Id_Imagen', true);
         
                        // Si el ID de la imagen existe, obtener la URL de la imagen
                        if ($image_id) {
                            $image_url = wp_get_attachment_url($image_id);
                            if ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                            }
                        }
                    ?>
            </div>
            <div class="caja-texto-modulo-imagen">
                <?php
                    printf(
                        '<h3 class="titulo-caja-texto-modulo">%s</h3>',
                        esc_html( get_post_meta( get_the_ID(), 'raw_titulo_caja', true ) ) ?:
                        'Introduzca su titulo'
                    )
                ?>
                <?php
                    printf(
                        '<div id="texto1-caja-texto-modulo">%s</div>',
                        wp_kses_post( get_post_meta( get_the_ID(), 'raw_parrafo_1', true ) ?: 'Introduzca su texto' )
                    );
                ?>
                <?php
                    printf(
                        '<h3 class="texto3-caja-texto-modulo">%s</h3>',
                        esc_html( get_post_meta( get_the_ID(), 'raw_titulo_caja_2', true ) ) ?:
                        'Introduzca su titulo'
                    )
                ?>
                <?php
                    printf(
                        '<div class="texto1-caja-texto-modulo">%s</div>',
                        wp_kses_post( get_post_meta( get_the_ID(), 'raw_subtitulo_caja', true ) ?: 'Introduzca su texto' )
                    );
                ?>
                <a href="https://www.solucionamideuda.es/solucion-urgente/prestamos-personales/#contacto">
                     <?php
                         printf(
                             '<button id="boton-caja-imagen" class="button-caja-texto-modulo">%s</button>',
                             esc_html( get_post_meta( get_the_ID(),     'raw_button_caja_texto_modulo', true ) ) ?:
                             ''
                         )
                     ?>
                </a>
            </div>
        </div>      
</div>
