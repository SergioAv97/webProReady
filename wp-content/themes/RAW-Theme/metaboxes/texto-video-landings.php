<?php
    // Agregar metabox para el título del video landing
function agregar_metabox_titulo_video_landing() {
    add_meta_box(
        'titulo-video-landing', // ID único de la metabox
        'Título del Video Landing', // Título de la metabox
        'mostrar_metabox_titulo_video_landing', // Función para mostrar el contenido de la metabox
        'post', // Tipo de contenido donde se mostrará la metabox (puedes cambiar 'page' por otro tipo de contenido si es necesario)
        'normal', // Contexto de la metabox (puedes cambiarlo si es necesario)
        'default' // Prioridad de la metabox (puedes cambiarlo si es necesario)
    );
    add_meta_box(
        'metabox_parrafo_video_landing', // ID único de la metabox
        'Párrafo del Video Landing', // Título de la metabox
        'mostrar_metabox_parrafo_video_landing', // Función para mostrar el contenido de la metabox
        'post', // Tipo de contenido donde se mostrará la metabox (puedes cambiar 'page' por otro tipo de contenido si es necesario)
        'normal', // Contexto de la metabox (puedes cambiarlo si es necesario)
        'default' // Prioridad de la metabox (puedes cambiarlo si es necesario)
    );
    add_meta_box(
        'metabox_texto_superior_video', // ID único de la metabox
        'Texto Superior del Video', // Título de la metabox
        'mostrar_metabox_texto_superior_video', // Función para mostrar el contenido de la metabox
        'post', // Tipo de contenido donde se mostrará la metabox (puedes cambiar 'page' por otro tipo de contenido si es necesario)
        'normal', // Contexto de la metabox (puedes cambiarlo si es necesario)
        'default' // Prioridad de la metabox (puedes cambiarlo si es necesario)
    );
}
add_action('add_meta_boxes', 'agregar_metabox_titulo_video_landing');

// Función para mostrar el campo de metabox del título del video landing
function mostrar_metabox_titulo_video_landing($post) {
    $titulo_video_landing = get_post_meta($post->ID, 'titulo-video-landing', true);
    ?>
    <input type="text" name="titulo_video_landing" value="<?php echo esc_attr($titulo_video_landing); ?>" style="width: 100%;">
    <?php
}

function mostrar_metabox_parrafo_video_landing($post) {
    $parrafo_video_landing = get_post_meta($post->ID, 'raw-parrafo-video-landing', true);
    ?>
    <div class="custom-editor-wrapper">
        <?php
        wp_editor(
            $parrafo_video_landing,
            'raw-parrafo-video-landing',
            array(
                'media_buttons' => false,
                'textarea_name' => 'raw-parrafo-video-landing',
                'textarea_rows' => 10,
                'tinymce' => array(
                    'plugins' => 'wordpress,wpautoresize',
                    'toolbar1' => 'bold,italic,underline,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink,wp_more',
                ),
            )
        );
        ?>
    </div>
    <?php
}

function mostrar_metabox_texto_superior_video($post) {
    $texto_superior_video = get_post_meta($post->ID, 'texto-superior-video', true);
    ?>
    <input type="text" name="texto_superior_video" value="<?php echo esc_attr($texto_superior_video); ?>" style="width: 100%;">
    <?php
}
// Guardar el valor del campo de metabox del título del video landing
function guardar_metabox_titulo_video_landing($post_id) {
    if (array_key_exists('titulo-video-landing', $_POST)) {
        update_post_meta(
            $post_id,
            'titulo-video-landing',
            sanitize_text_field($_POST['titulo-video-landing'])
        );
    }
    if (array_key_exists('texto-superior-video', $_POST)) {
        update_post_meta(
            $post_id,
            'texto-superior-video',
            sanitize_text_field($_POST['texto-superior-video'])
        );
    }
    if (array_key_exists('raw-parrafo-video-landing', $_POST)) {
        update_post_meta(
            $post_id,
            'raw-parrafo-video-landing',
            wp_kses_post($_POST['raw-parrafo-video-landing'])
        );
    }
}
add_action('save_post', 'guardar_metabox_titulo_video_landing');


?>