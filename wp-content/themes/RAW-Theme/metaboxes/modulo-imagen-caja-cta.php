<?php
function modulo_imagen_caja_cta() {
    add_meta_box(
        'metabox-titulo-moduloImagen',
        'Titulo Prestamos Personales',
        'mostrar_metabox_titulo_moduloImagen',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-titulo-caja-texto-modulo',
        'Titulo Caja texto',
        'mostrar_metabox_titulo_caja_texto_modulo',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-texto1-caja-texto-modulo',
        'Texto 1 caja texto',
        'mostrar_metabox_texto1_caja_texto_modulo',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-texto2-caja-texto-modulo',
        'Texto 2 caja texto',
        'mostrar_metabox_texto2_caja_texto_modulo',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-texto3-caja-texto-modulo',
        'Texto 3 caja texto',
        'mostrar_metabox_texto3_caja_texto_modulo',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-texto4-caja-texto-modulo',
        'Texto 4 caja texto',
        'mostrar_metabox_texto4_caja_texto_modulo',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-button-caja-texto-modulo',
        'Botón caja texto',
        'mostrar_metabox_button_caja_texto_modulo',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-imagen-caja-texto-modulo', 
        'Imagen Caja', 
        'mostrar_metabox_imagen_caja_texto_modulo', 
        'post', 
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'modulo_imagen_caja_cta'); // Corregir 'add_meta_box' a 'add_meta_boxes'

// Función para mostrar el metabox
function mostrar_metabox_titulo_moduloImagen($post) {
    $title = get_post_meta($post->ID, 'raw_titulo_Componente', true);
    ?>
    <input type="text" name="raw_titulo_Componente" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título.</p>
    <?php
}

function mostrar_metabox_titulo_caja_texto_modulo($post) {
    $title = get_post_meta($post->ID, 'raw_titulo_caja', true);
    ?>
    <input type="text" name="raw_titulo_caja" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título de la Caja de texto.</p>
    <?php
}

function mostrar_metabox_texto1_caja_texto_modulo($post) {
    $texto1 = get_post_meta($post->ID, 'raw_parrafo_1', true);
    ?>
    <textarea name="raw_parrafo_1" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto1); ?></textarea>
    <p>Introduce el texto 1 de la Caja de texto.</p>
    <?php
}

function mostrar_metabox_texto2_caja_texto_modulo($post) {
    $texto2 = get_post_meta($post->ID, 'raw_titulo_caja_2', true);
    ?>
    <textarea name="raw_titulo_caja_2" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto2); ?></textarea>
    <p>Introduce el texto 2 de la Caja de texto.</p>
    <?php
}

function mostrar_metabox_texto3_caja_texto_modulo($post) {
    $texto3 = get_post_meta($post->ID, 'raw_titulo_caja_2', true);
    ?>
    <textarea name="raw_titulo_caja_2" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto3); ?></textarea>
    <p>Introduce el texto 3 de la Caja de texto.</p>
    <?php
}

function mostrar_metabox_texto4_caja_texto_modulo($post) {
    $texto4 = get_post_meta($post->ID, 'raw_subtitulo_caja', true);
    // Campo nonce para la verificación
    ?>
    <div class="custom-editor-wrapper">
        <?php
        wp_editor(
            $texto4,
            'raw_subtitulo_caja',
            [
                'textarea_name' => 'raw_subtitulo_caja',
                'media_buttons' => false,
                'tinymce' => [
                    'toolbar1' => 'bold,italic,underline,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink,wp_more',
                    'toolbar2' => 'formatselect,forecolor,backcolor'
                ],
                'quicktags' => true,
                'textarea_rows' => 10,
                'editor_css' => '<style>.wp-editor-wrap{max-width:100%;}</style>'
            ]
        );
        ?>
        <p>Introduce el texto 4 de la Caja de texto.</p>
    </div>
    <?php
}

function mostrar_metabox_button_caja_texto_modulo($post) {
    $button = get_post_meta($post->ID, 'raw_button_caja_texto_modulo', true);
    ?>
    <input type="text" name="raw_button_caja_texto_modulo" value="<?php echo esc_attr($button); ?>" style="width: 100%;">
    <p>Introduce el texto del botón de la Caja texto.</p>
    <?php
}

function mostrar_metabox_imagen_caja_texto_modulo($post){
    $imagen = get_post_meta($post->ID, 'raw_Id_Imagen', true);
    ?>
    <input type="text" name="raw_Id_Imagen" value="<?php echo esc_attr($imagen); ?>" style="width: 100%;">
    <p>Introduce el Id de la imagen de la Caja.</p>
    <?php
}

// Guardar los valores de los metaboxes
function guardar_metaboxes_moduloImagen($post_id) {
    // Verificar si se está guardando la publicación de manera automática
    if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }

    $fields = [
        'raw_titulo_Componente',
        'raw_titulo_caja',
        'raw_parrafo_1',
        'raw_titulo_caja_2',
        'raw_subtitulo_caja', // Asegurarse de que este campo use wp_kses_post
        'raw_button_caja_texto_modulo',
        'raw_Id_Imagen'
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            if ($field === 'raw_subtitulo_caja') {
                update_post_meta($post_id, $field, wp_kses_post($_POST[$field]));
            } else {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'guardar_metaboxes_moduloImagen');
?>