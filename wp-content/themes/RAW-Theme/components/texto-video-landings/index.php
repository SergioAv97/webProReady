<?php
/**
* Componente: Caja texto Video.
*
* @package Acronyms\RAW
* @subpackage Components
* @since 1.0.0
*/
?>
<?php 
    $upload_dir = wp_upload_dir();
    $Video = $upload_dir['baseurl'] . '/2024/medios/video-presentacion-smd.mp4';
?>
<div class="Container-texto-video-landing">
<?php
            printf(
                '<h1 id="title-video-landing" >%s</h1>',
                esc_html( get_post_meta( get_the_ID(), 'titulo-video-landing', true ) ) ?: 'Introduzca su titulo'
            );
        ?>
<div class="landing">
<div id="parrafos-video-landing">
<?php
            printf(
                '<p id="parrafo-video-landing">%s</p>',
                wp_kses_post( get_post_meta( get_the_ID(), 'raw-parrafo-video-landing', true ) ?: 'Introduzca su texto' )
            );
            ?>
</div>
<div id="container-video">
<?php
                printf(
                    '<h3 class="texto-superior-video">%s</h3>',
                    esc_html( get_post_meta( get_the_ID(), 'texto-superior-video', true ) ) ?: 'Introduzca su titulo de video'
                );
            ?>
<video id="video-introduccion" controls autoplay > 
<source  src="<?php echo esc_url($Video); ?>" type="video/mp4">
                Tu navegador no soporta el elemento de video.
</video>
</div>
</div>
</div>
