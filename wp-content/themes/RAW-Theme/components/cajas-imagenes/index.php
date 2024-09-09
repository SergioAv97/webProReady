<?php
/**
 * Componente: Cajas Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */
?>

<div id="container-general-cajas-imagenes">
    <?php
        printf(
            '<h1 id="title-general">%s</h1>',
            esc_attr( get_post_meta( get_the_ID(), 'raw-title-cajas-imagenes', true ) ) ?: 'Introduzca su titulo principal'
        );
    ?>
    <div id="container-cajas-imagenes">
        <div id="container-izquierda">
            <?php
                printf(
                    '<h3 id="title-izquierda">%s</h3>',
                    esc_attr( get_post_meta( get_the_ID(), 'raw-title-izquierda', true ) ) ?: 'Introduzca su titulo'
                );
            ?>

            <?php
                printf(
                    '<p id="parrafo-izquierda">%s</p>',
                    wp_kses_post( get_post_meta( get_the_ID(), 'raw-parrafo-izquierda', true ) ?: 'Introduzca su texto' )
                );
            ?>

            <div id="container-cajas-izquierda">
                <div class="caja-izquierda">
                    <?php
                        printf(
                            '<h4 class="title-caja">%s</h4>',
                            esc_attr( get_post_meta( get_the_ID(), 'raw-title-caja-izquierda-1', true ) ) ?: 'Introduzca su titulo'
                        );
                    ?>

                    <?php
                        printf(
                            '<p class="parrafo-caja">%s</p>',
                            wp_kses_post( get_post_meta( get_the_ID(), 'raw-parrafo-izquierda-1', true ) ?: 'Introduzca su texto' )
                        );
                    ?>
                </div>

                <div class="caja-izquierda">
                    <?php
                        printf(
                            '<h4 class="title-caja">%s</h4>',
                            esc_attr( get_post_meta( get_the_ID(), 'raw-title-caja-izquierda-2', true ) ) ?: 'Introduzca su titulo'
                        );
                    ?>

                    <?php
                        printf(
                            '<p class="parrafo-caja">%s</p>',
                            wp_kses_post( get_post_meta( get_the_ID(), 'raw-parrafo-izquierda-2', true ) ?: 'Introduzca su texto' )
                        );
                    ?>
                </div>
            </div>
            <button id="boton-cajas-imagen">
                <?php
                    printf(
                        '<p id="texto-button-cajas-imagenes">%s</p>',
                        wp_kses_post( get_post_meta( get_the_ID(), 'raw-texto-button-cajas-imagenes', true ) ?: 'Introduzca su texto' )
                    );
                ?>
            </button>
        </div>
        <div id="container-derecha">
            <?php
                // Obtener el ID de la imagen desde los metadatos del post
                $image_id = get_post_meta(get_the_ID(), 'raw-imagen-derecha', true);
                // Si el ID de la imagen existe, obtener la URL de la imagen
                if ($image_id) {
                    $image_url = wp_get_attachment_url($image_id);
                    if ($image_url) {
                        echo '<img id="imagen-caja-derecha" src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                    }
                }
            ?>
            <div class="caja-derecha">
                <?php
                    printf(
                        '<p class="parrafo-caja">%s</p>',
                        wp_kses_post( get_post_meta( get_the_ID(), 'raw-parrafo-derecha', true ) ?: 'Introduzca su texto' )
                    );
                ?>
            </div>
        </div>
    </div>
    
    </div>
</div>
