<?php
// Función para registrar los nuevos metaboxes
function my_new_custom_meta_box() {
    add_meta_box(
        'raw-title',           // ID del metabox
        'Título',              // Título del metabox
        'display_my_meta_box_title', // Función de callback
        'post',                // Pantalla (tipo de post)
        'normal',              // Contexto
        'high'                 // Prioridad
    );
    add_meta_box(
        'raw-texto-button',           // ID del metabox
        'Texto del Botón',             // Título del metabox
        'display_my_meta_box_texto_button', // Función de callback
        'post',                  // Pantalla (tipo de post)
        'normal',                // Contexto
        'high'                   // Prioridad
    );
}
add_action('add_meta_boxes', 'my_new_custom_meta_box');

// Callback del metabox del título
function display_my_meta_box_title($post) {
    // Obtener el valor actual del campo meta
    $raw_title = get_post_meta($post->ID, 'raw-title', true);
    ?>
    <label for="raw-title">Título:</label>
    <input type="text" name="raw-title" value="<?php echo esc_attr($raw_title); ?>" class="widefat">
    <?php
}

// Callback del metabox del texto del botón
function display_my_meta_box_texto_button($post) {
    // Obtener el valor actual del campo meta
    $raw_texto_button = get_post_meta($post->ID, 'raw-texto-button', true);
    ?>
    <label for="raw-texto-button">Texto del Botón:</label>
    <textarea name="raw-texto-button" class="widefat"><?php echo esc_textarea($raw_texto_button); ?></textarea>
    <?php
}

// Función para guardar los datos de los nuevos metaboxes
function save_new_custom_meta($post_id) {
    // Verificar auto-save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Verificar permisos del usuario
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Guardar el título
    if (isset($_POST['raw-title'])) {
        update_post_meta($post_id, 'raw-title', sanitize_text_field($_POST['raw-title']));
    }

    // Guardar el texto del botón
    if (isset($_POST['raw-texto-button'])) {
        update_post_meta($post_id, 'raw-texto-button', sanitize_textarea_field($_POST['raw-texto-button']));
    }
}
add_action('save_post', 'save_new_custom_meta');
?>
