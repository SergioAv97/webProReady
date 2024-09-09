<?php
// Función para registrar los metaboxes
function my_custom_meta_box() {
    add_meta_box(
        'raw-imagen-derecha', // ID del metabox
        'ID de Imagen Personalizable', // Título del metabox
        'my_meta_box_callback', // Callback que renderiza el contenido del metabox
        'post', // Pantalla (post, page, custom post type)
        'side' // Contexto (normal, side, advanced)
    );
    add_meta_box(
        'raw-title-cajas-imagenes',           // ID del metabox
        'Título de la caja de imágenes',  // Título del metabox
        'display_my_meta_box_imagenes',   // Función de callback
        'post',                  // Pantalla (tipo de post)
        'normal',                // Contexto
        'high'                   // Prioridad
    );
    add_meta_box(
        'raw-title-izquierda',           // ID del metabox
        'Título de la izquierda',  // Título del metabox
        'display_my_meta_box_izquierda',   // Función de callback
        'post',                  // Pantalla (tipo de post)
        'normal',                // Contexto
        'high'                   // Prioridad
    );
    add_meta_box(
        'raw-parrafo-izquierda',          // ID del metabox
        'Párrafo de la izquierda',        // Título del metabox
        'display_my_meta_box_parrafo',    // Función de callback
        'post',                           // Pantalla (tipo de post)
        'normal',                         // Contexto
        'high'                            // Prioridad
    );
    add_meta_box(
        'raw-title-caja-izquierda-1',     // ID del metabox
        'Título de la caja izquierda 1',  // Título del metabox
        'display_my_meta_box_title_caja_izquierda_1', // Función de callback
        'post',                           // Pantalla (tipo de post)
        'normal',                         // Contexto
        'high'                            // Prioridad
    );
    add_meta_box(
        'raw-parrafo-izquierda-1',        // ID del metabox
        'Párrafo de la izquierda 1',      // Título del metabox
        'display_my_meta_box_parrafo_izquierda_1', // Función de callback
        'post',                           // Pantalla (tipo de post)
        'normal',                         // Contexto
        'high'                            // Prioridad
    );
    add_meta_box(
        'raw-title-caja-izquierda-2',           // ID del metabox
        'Título de la caja izquierda 2',  // Título del metabox
        'display_my_meta_box_title_caja_izquierda_2', // Función de callback
        'post',                  // Pantalla (tipo de post)
        'normal',                // Contexto
        'high'                   // Prioridad
    );
    add_meta_box(
        'raw-parrafo-izquierda-2',        // ID del metabox
        'Párrafo de la izquierda 2',      // Título del metabox
        'display_my_meta_box_parrafo_izquierda_2', // Función de callback
        'post',                           // Pantalla (tipo de post)
        'normal',                         // Contexto
        'high'                            // Prioridad
    );
    add_meta_box(
        'raw-texto-button-cajas-imagenes',        // ID del metabox
        'Texto del botón de cajas de imágenes',      // Título del metabox
        'display_my_meta_box_texto_button_cajas_imagenes', // Función de callback
        'post',                           // Pantalla (tipo de post)
        'normal',                         // Contexto
        'high'                            // Prioridad
    );
    add_meta_box(
        'raw-parrafo-derecha',        // ID del metabox
        'Párrafo de la derecha',      // Título del metabox
        'display_my_meta_box_parrafo_derecha', // Función de callback
        'post',                           // Pantalla (tipo de post)
        'normal',                         // Contexto
        'high'                            // Prioridad
    );
}
add_action('add_meta_boxes', 'my_custom_meta_box');

// Callback del metabox de imagen
function my_meta_box_callback($post) {    
    // Obtener el ID de la imagen desde el meta dato
    $image_id = get_post_meta($post->ID, 'raw-imagen-derecha', true);
    ?>
    <p>
        <label for="raw-imagen-derecha">ID de la imagen:</label><br>
        <input type="text" id="raw-imagen-derecha" name="raw-imagen-derecha" value="<?php echo esc_attr($image_id); ?>" size="10">
    </p>
    <?php
}

// Callback del metabox de la caja de imágenes
function display_my_meta_box_imagenes($post) {
    // Obtener el valor actual del campo meta
    $raw_title = get_post_meta($post->ID, 'raw-title-cajas-imagenes', true);
    ?>
    <label for="raw-title-cajas-imagenes">Título:</label>
    <input type="text" name="raw-title-cajas-imagenes" value="<?php echo esc_attr($raw_title); ?>" class="widefat">
    <?php
}

// Callback del metabox de la izquierda
function display_my_meta_box_izquierda($post) {
    // Obtener el valor actual del campo meta
    $raw_title_izquierda = get_post_meta($post->ID, 'raw-title-izquierda', true);
    ?>
    <label for="raw-title-izquierda">Título:</label>
    <input type="text" name="raw-title-izquierda" value="<?php echo esc_attr($raw_title_izquierda); ?>" class="widefat">
    <?php
}

// Callback del metabox del párrafo de la izquierda
function display_my_meta_box_parrafo($post) {
    // Obtener el valor actual del campo meta
    $raw_parrafo_izquierda = get_post_meta($post->ID, 'raw-parrafo-izquierda', true);
    ?>
    <label for="raw-parrafo-izquierda">Párrafo:</label>
    <textarea name="raw-parrafo-izquierda" class="widefat"><?php echo esc_textarea($raw_parrafo_izquierda); ?></textarea>
    <?php
}

// Callback del metabox del título de la caja izquierda 1
function display_my_meta_box_title_caja_izquierda_1($post) {
    // Obtener el valor actual del campo meta
    $raw_title_caja_izquierda_1 = get_post_meta($post->ID, 'raw-title-caja-izquierda-1', true);
    ?>
    <label for="raw-title-caja-izquierda-1">Título:</label>
    <input type="text" name="raw-title-caja-izquierda-1" value="<?php echo esc_attr($raw_title_caja_izquierda_1); ?>" class="widefat">
    <?php
}

// Callback del metabox del párrafo de la izquierda 1
function display_my_meta_box_parrafo_izquierda_1($post) {
    // Obtener el valor actual del campo meta
    $raw_parrafo_izquierda_1 = get_post_meta($post->ID, 'raw-parrafo-izquierda-1', true);
    ?>
    <label for="raw-parrafo-izquierda-1">Párrafo:</label>
    <textarea name="raw-parrafo-izquierda-1" class="widefat"><?php echo esc_textarea($raw_parrafo_izquierda_1); ?></textarea>
    <?php
}
function display_my_meta_box_title_caja_izquierda_2($post) {
    // Obtener el valor actual del campo meta
    $raw_title_caja_izquierda_2 = get_post_meta($post->ID, 'raw-title-caja-izquierda-2', true);
    ?>
    <label for="raw-title-caja-izquierda-2">Título:</label>
    <input type="text" name="raw-title-caja-izquierda-2" value="<?php echo esc_attr($raw_title_caja_izquierda_2); ?>" class="widefat">
    <?php
}

// Callback del metabox del párrafo de la izquierda 2
function display_my_meta_box_parrafo_izquierda_2($post) {
    // Obtener el valor actual del campo meta
    $raw_parrafo_izquierda_2 = get_post_meta($post->ID, 'raw-parrafo-izquierda-2', true);
    ?>
    <label for="raw-parrafo-izquierda-2">Párrafo:</label>
    <textarea name="raw-parrafo-izquierda-2" class="widefat"><?php echo esc_textarea($raw_parrafo_izquierda_2); ?></textarea>
    <?php
}
// Callback del metabox del texto del botón de cajas de imágenes
function display_my_meta_box_texto_button_cajas_imagenes($post) {
    // Obtener el valor actual del campo meta
    $raw_texto_button_cajas_imagenes = get_post_meta($post->ID, 'raw-texto-button-cajas-imagenes', true);
    ?>
    <label for="raw-texto-button-cajas-imagenes">Texto del botón:</label>
    <input type="text" name="raw-texto-button-cajas-imagenes" value="<?php echo esc_attr($raw_texto_button_cajas_imagenes); ?>" class="widefat">
    <?php
}

// Callback del metabox del párrafo de la derecha
function display_my_meta_box_parrafo_derecha($post) {
    // Obtener el valor actual del campo meta
    $raw_parrafo_derecha = get_post_meta($post->ID, 'raw-parrafo-derecha', true);
    
    ?>
    <label for="raw-parrafo-derecha">Párrafo:</label>
    <div class="custom-editor-wrapper">
        <textarea id="raw-parrafo-derecha" name="raw-parrafo-derecha" rows="10" style="width: 100%;"><?php echo esc_textarea($raw_parrafo_derecha); ?></textarea>
    </div>
    <script>
        jQuery(document).ready(function($){
            var editorSettings = {
                tinymce: {
                    plugins: 'wordpress,wpautoresize',
                    toolbar1: 'bold,italic,underline,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink,wp_more'
                }
            };
            wp.editor.initialize('raw-parrafo-derecha', editorSettings);
        });
    </script>
    <?php
}

// Función para guardar los datos de los metaboxes
function my_save_custom_meta($post_id) {
    // Verificar auto-save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Verificar permisos del usuario
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Guardar el ID de la imagen
    if (isset($_POST['raw-imagen-derecha'])) {
        update_post_meta($post_id, 'raw-imagen-derecha', sanitize_text_field($_POST['raw-imagen-derecha']));
    }


    // Guardar el título de la caja de imágenes
    if (isset($_POST['raw-title-cajas-imagenes'])) {
        $new_meta_value_imagenes = sanitize_text_field($_POST['raw-title-cajas-imagenes']);
        $meta_key_imagenes = 'raw-title-cajas-imagenes';
        $meta_value_imagenes = get_post_meta($post_id, $meta_key_imagenes, true);

        if ($new_meta_value_imagenes && '' == $meta_value_imagenes) {
            add_post_meta($post_id, $meta_key_imagenes, $new_meta_value_imagenes, true);
        } elseif ($new_meta_value_imagenes && $new_meta_value_imagenes != $meta_value_imagenes) {
            update_post_meta($post_id, $meta_key_imagenes, $new_meta_value_imagenes);
        } elseif ('' == $new_meta_value_imagenes && $meta_value_imagenes) {
            delete_post_meta($post_id, $meta_key_imagenes, $meta_value_imagenes);
        }
    }

    // Guardar el título de la izquierda
    if (isset($_POST['raw-title-izquierda'])) {
        $new_meta_value_izquierda = sanitize_text_field($_POST['raw-title-izquierda']);
        $meta_key_izquierda = 'raw-title-izquierda';
        $meta_value_izquierda = get_post_meta($post_id, $meta_key_izquierda, true);

        if ($new_meta_value_izquierda && '' == $meta_value_izquierda) {
            add_post_meta($post_id, $meta_key_izquierda, $new_meta_value_izquierda, true);
        } elseif ($new_meta_value_izquierda && $new_meta_value_izquierda != $meta_value_izquierda) {
            update_post_meta($post_id, $meta_key_izquierda, $new_meta_value_izquierda);
        } elseif ('' == $new_meta_value_izquierda && $meta_value_izquierda) {
            delete_post_meta($post_id, $meta_key_izquierda, $meta_value_izquierda);
        }
    }

    // Guardar el párrafo de la izquierda
    if (isset($_POST['raw-parrafo-izquierda'])) {
        $new_meta_value_parrafo =  wp_kses_post($_POST['raw-parrafo-izquierda']);
        $meta_key_parrafo = 'raw-parrafo-izquierda';
        $meta_value_parrafo = get_post_meta($post_id, $meta_key_parrafo, true);

        if ($new_meta_value_parrafo && '' == $meta_value_parrafo) {
            add_post_meta($post_id, $meta_key_parrafo, $new_meta_value_parrafo, true);
        } elseif ($new_meta_value_parrafo && $new_meta_value_parrafo != $meta_value_parrafo) {
            update_post_meta($post_id, $meta_key_parrafo, $new_meta_value_parrafo);
        } elseif ('' == $new_meta_value_parrafo && $meta_value_parrafo) {
            delete_post_meta($post_id, $meta_key_parrafo, $meta_value_parrafo);
        }
    }

    // Guardar el título de la caja izquierda 1
    if (isset($_POST['raw-title-caja-izquierda-1'])) {
        $new_meta_value_title_caja_izquierda_1 = sanitize_text_field($_POST['raw-title-caja-izquierda-1']);
        $meta_key_title_caja_izquierda_1 = 'raw-title-caja-izquierda-1';
        $meta_value_title_caja_izquierda_1 = get_post_meta($post_id, $meta_key_title_caja_izquierda_1, true);

        if ($new_meta_value_title_caja_izquierda_1 && '' == $meta_value_title_caja_izquierda_1) {
            add_post_meta($post_id, $meta_key_title_caja_izquierda_1, $new_meta_value_title_caja_izquierda_1, true);
        } elseif ($new_meta_value_title_caja_izquierda_1 && $new_meta_value_title_caja_izquierda_1 != $meta_value_title_caja_izquierda_1) {
            update_post_meta($post_id, $meta_key_title_caja_izquierda_1, $new_meta_value_title_caja_izquierda_1);
        } elseif ('' == $new_meta_value_title_caja_izquierda_1 && $meta_value_title_caja_izquierda_1) {
            delete_post_meta($post_id, $meta_key_title_caja_izquierda_1, $meta_value_title_caja_izquierda_1);
        }
    }

    // Guardar el párrafo de la izquierda 1
    if (isset($_POST['raw-parrafo-izquierda-1'])) {
        $new_meta_value_parrafo_izquierda_1 =  wp_kses_post($_POST['raw-parrafo-izquierda-1']);
        $meta_key_parrafo_izquierda_1 = 'raw-parrafo-izquierda-1';
        $meta_value_parrafo_izquierda_1 = get_post_meta($post_id, $meta_key_parrafo_izquierda_1, true);

        if ($new_meta_value_parrafo_izquierda_1 && '' == $meta_value_parrafo_izquierda_1) {
            add_post_meta($post_id, $meta_key_parrafo_izquierda_1, $new_meta_value_parrafo_izquierda_1, true);
        } elseif ($new_meta_value_parrafo_izquierda_1 && $new_meta_value_parrafo_izquierda_1 != $meta_value_parrafo_izquierda_1) {
            update_post_meta($post_id, $meta_key_parrafo_izquierda_1, $new_meta_value_parrafo_izquierda_1);
        } elseif ('' == $new_meta_value_parrafo_izquierda_1 && $meta_value_parrafo_izquierda_1) {
            delete_post_meta($post_id, $meta_key_parrafo_izquierda_1, $meta_value_parrafo_izquierda_1);
        }
    }
     // Guardar el título de la caja izquierda 2
     if (isset($_POST['raw-title-caja-izquierda-2'])) {
        update_post_meta($post_id, 'raw-title-caja-izquierda-2', sanitize_text_field($_POST['raw-title-caja-izquierda-2']));
    }

    // Guardar el párrafo de la izquierda 2
    if (isset($_POST['raw-parrafo-izquierda-2'])) {
        update_post_meta($post_id, 'raw-parrafo-izquierda-2',  wp_kses_post($_POST['raw-parrafo-izquierda-2']));
    }

    // Guardar el texto del botón de cajas de imágenes
    if (isset($_POST['raw-texto-button-cajas-imagenes'])) {
        update_post_meta($post_id, 'raw-texto-button-cajas-imagenes', sanitize_text_field($_POST['raw-texto-button-cajas-imagenes']));
    }

    // Guardar el párrafo de la derecha
    if (isset($_POST['raw-parrafo-derecha'])) {
        update_post_meta($post_id, 'raw-parrafo-derecha', wp_kses_post($_POST['raw-parrafo-derecha']));
    }
}
add_action('save_post', 'my_save_custom_meta');
?>
