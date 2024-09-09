<?php
// Agregar los metaboxes para las nuevas variables
function agregar_metaboxes_container1() {
    // Metabox para el título del contenedor 1
    add_meta_box(
        'metabox-container1-title',
        'Título del Contenedor 1',
        'mostrar_metabox_container1_title',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el texto 1 del contenedor 1
    add_meta_box(
        'metabox-container1-text1',
        'Texto 1 del Contenedor 1',
        'mostrar_metabox_container1_text1',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el texto 2 del contenedor 1
    add_meta_box(
        'metabox-container1-text2',
        'Texto 2 del Contenedor 1',
        'mostrar_metabox_container1_text2',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el texto 3 del contenedor 1
    add_meta_box(
        'metabox-container1-text3',
        'Texto 3 del Contenedor 1',
        'mostrar_metabox_container1_text3',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el botón del contenedor 1
    add_meta_box(
        'metabox-container1-button',
        'Botón del Contenedor 1',
        'mostrar_metabox_container1_button',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el título del contenedor 2
    add_meta_box(
        'metabox-container2-title',
        'Título del Contenedor 2',
        'mostrar_metabox_container2_title',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el texto 1 del contenedor 2
    add_meta_box(
        'metabox-container2-text1',
        'Texto 1 del Contenedor 2',
        'mostrar_metabox_container2_text1',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el texto 2 del contenedor 2
    add_meta_box(
        'metabox-container2-text2',
        'Texto 2 del Contenedor 2',
        'mostrar_metabox_container2_text2',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el texto 3 del contenedor 2
    add_meta_box(
        'metabox-container2-text3',
        'Texto 3 del Contenedor 2',
        'mostrar_metabox_container2_text3',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Metabox para el botón del contenedor 2
    add_meta_box(
        'metabox-container2-button',
        'Botón del Contenedor 2',
        'mostrar_metabox_container2_button',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'agregar_metaboxes_container1');

// Funciones para mostrar los metaboxes del Contenedor 1
function mostrar_metabox_container1_title($post) {
    $title = get_post_meta($post->ID, 'raw_container1_title', true);
    ?>
    <input type="text" name="raw_container1_title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título del contenedor 1.</p>
    <?php
}

function mostrar_metabox_container1_text1($post) {
    $text1 = get_post_meta($post->ID, 'raw_container1_text1', true);
    ?>
    <textarea name="raw_container1_text1" style="width: 100%; height: 100px;"><?php echo esc_textarea($text1); ?></textarea>
    <p>Introduce el texto 1 del contenedor 1.</p>
    <?php
}

function mostrar_metabox_container1_text2($post) {
    $text2 = get_post_meta($post->ID, 'raw_container1_text2', true);
    ?>
    <textarea name="raw_container1_text2" style="width: 100%; height: 100px;"><?php echo esc_textarea($text2); ?></textarea>
    <p>Introduce el texto 2 del contenedor 1.</p>
    <?php
}

function mostrar_metabox_container1_text3($post) {
    $text3 = get_post_meta($post->ID, 'raw_container1_text3', true);
    ?>
    <textarea name="raw_container1_text3" style="width: 100%; height: 100px;"><?php echo esc_textarea($text3); ?></textarea>
    <p>Introduce el texto 3 del contenedor 1.</p>
    <?php
}

function mostrar_metabox_container1_button($post) {
    $button = get_post_meta($post->ID, 'raw_container1_button', true);
    ?>
    <input type="text" name="raw_container1_button" value="<?php echo esc_attr($button); ?>" style="width: 100%;">
    <p>Introduce el texto del botón del contenedor 1.</p>
    <?php
}

// Funciones para mostrar los metaboxes del Contenedor 2
function mostrar_metabox_container2_title($post) {
    $title = get_post_meta($post->ID, 'raw_container2_title', true);
    ?>
    <input type="text" name="raw_container2_title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título del contenedor 2.</p>
    <?php
}

function mostrar_metabox_container2_text1($post) {
    $text1 = get_post_meta($post->ID, 'raw_container2_text1', true);
    ?>
    <textarea name="raw_container2_text1" style="width: 100%; height: 100px;"><?php echo esc_textarea($text1); ?></textarea>
    <p>Introduce el texto 1 del contenedor 2.</p>
    <?php
}

function mostrar_metabox_container2_text2($post) {
    $text2 = get_post_meta($post->ID, 'raw_container2_text2', true);
    ?>
    <textarea name="raw_container2_text2" style="width: 100%; height: 100px;"><?php echo esc_textarea($text2); ?></textarea>
    <p>Introduce el texto 2 del contenedor 2.</p>
    <?php
}

function mostrar_metabox_container2_text3($post) {
    $text3 = get_post_meta($post->ID, 'raw_container2_text3', true);
    ?>
    <textarea name="raw_container2_text3" style="width: 100%; height: 100px;"><?php echo esc_textarea($text3); ?></textarea>
    <p>Introduce el texto 3 del contenedor 2.</p>
    <?php
}

function mostrar_metabox_container2_button($post) {
    $button = get_post_meta($post->ID, 'raw_container2_button', true);
    ?>
    <input type="text" name="raw_container2_button" value="<?php echo esc_attr($button); ?>" style="width: 100%;">
    <p>Introduce el texto del botón del contenedor 2.</p>
    <?php
}

// Guardar los valores de los metaboxes
function guardar_metaboxes_container1($post_id) {
    $fields = [
        'raw_container1_title',
        'raw_container1_text1',
        'raw_container1_text2',
        'raw_container1_text3',
        'raw_container1_button',
        'raw_container2_title',
        'raw_container2_text1',
        'raw_container2_text2',
        'raw_container2_text3',
        'raw_container2_button',
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST) && !wp_is_post_autosave($post_id)) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'guardar_metaboxes_container1');
?>
