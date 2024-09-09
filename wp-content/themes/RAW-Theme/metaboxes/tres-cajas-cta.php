<?php
function tres_cajas_cta() {
    add_meta_box(
        'metabox-cta-title',
        'Título',
        'mostrar_metabox_cta_title',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-cta-texto',
        'Texto',
        'mostrar_metabox_cta_texto',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja1-title',
        'Titulo de la caja 1',
        'mostrar_metabox_caja1_title',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja1-texto1',
        'Texto 1 de la caja 1',
        'mostrar_metabox_caja1_texto1',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja1-texto2',
        'Texto 2 de la caja 1',
        'mostrar_metabox_caja1_texto2',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja1-button',
        'Botón de la caja 1',
        'mostrar_metabox_caja1_button',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja2-title',
        'Titulo de la caja 2',
        'mostrar_metabox_caja2_title',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja2-texto1',
        'Texto 1 de la caja 2',
        'mostrar_metabox_caja2_texto1',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja2-texto2',
        'Texto 2 de la caja 2',
        'mostrar_metabox_caja2_texto2',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja2-button',
        'Botón de la caja 2',
        'mostrar_metabox_caja2_button',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja3-title',
        'Titulo de la caja 3',
        'mostrar_metabox_caja3_title',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja3-texto1',
        'Texto 1 de la caja 3',
        'mostrar_metabox_caja3_texto1',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja3-texto2',
        'Texto 2 de la caja 3',
        'mostrar_metabox_caja3_texto2',
        'post',  
        'normal',
        'high'
    );

    add_meta_box(
        'metabox-caja3-button',
        'Botón de la caja 3',
        'mostrar_metabox_caja3_button',
        'post',  
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'tres_cajas_cta');

// Función para mostrar el metabox del título
function mostrar_metabox_cta_title($post) {
    $title = get_post_meta($post->ID, 'raw_title_cta', true);
    ?>
    <input type="text" name="raw_title_cta" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título.</p>
    <?php
}

// Función para mostrar el metabox del texto
function mostrar_metabox_cta_texto($post) {
    $texto = get_post_meta($post->ID, 'raw_texto_cta', true);
    ?>
    <textarea name="raw_texto_cta" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto); ?></textarea>
    <p>Introduce el texto.</p>
    <?php
}

function mostrar_metabox_caja1_title($post) {
    $title = get_post_meta($post->ID, 'raw_caja1_title', true);
    ?>
    <input type="text" name="raw_caja1_title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título de la Caja 1.</p>
    <?php
}

function mostrar_metabox_caja1_texto1($post) {
    $texto1 = get_post_meta($post->ID, 'raw_caja1_texto1', true);
    ?>
    <textarea name="raw_caja1_texto1" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto1); ?></textarea>
    <p>Introduce el texto 1 de la Caja 1.</p>
    <?php
}

function mostrar_metabox_caja1_texto2($post) {
    $texto2 = get_post_meta($post->ID, 'raw_caja1_texto2', true);
    ?>
    <textarea name="raw_caja1_texto2" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto2); ?></textarea>
    <p>Introduce el texto 2 de la Caja 1.</p>
    <?php
}

function mostrar_metabox_caja1_button($post) {
    $button = get_post_meta($post->ID, 'raw_caja1_button', true);
    ?>
    <input type="text" name="raw_caja1_button" value="<?php echo esc_attr($button); ?>" style="width: 100%;">
    <p>Introduce el texto del botón de la Caja 1.</p>
    <?php
}

function mostrar_metabox_caja2_title($post) {
    $title = get_post_meta($post->ID, 'raw_caja2_title', true);
    ?>
    <input type="text" name="raw_caja2_title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título de la Caja 2.</p>
    <?php
}

function mostrar_metabox_caja2_texto1($post) {
    $texto1 = get_post_meta($post->ID, 'raw_caja2_texto1', true);
    ?>
    <textarea name="raw_caja2_texto1" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto1); ?></textarea>
    <p>Introduce el texto 1 de la Caja 2.</p>
    <?php
}

function mostrar_metabox_caja2_texto2($post) {
    $texto2 = get_post_meta($post->ID, 'raw_caja2_texto2', true);
    ?>
    <textarea name="raw_caja2_texto2" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto2); ?></textarea>
    <p>Introduce el texto 2 de la Caja 2.</p>
    <?php
}

function mostrar_metabox_caja2_button($post) {
    $button = get_post_meta($post->ID, 'raw_caja2_button', true);
    ?>
    <input type="text" name="raw_caja2_button" value="<?php echo esc_attr($button); ?>" style="width: 100%;">
    <p>Introduce el texto del botón de la Caja 2.</p>
    <?php
}

function mostrar_metabox_caja3_title($post) {
    $title = get_post_meta($post->ID, 'raw_caja3_title', true);
    ?>
    <input type="text" name="raw_caja3_title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título de la Caja 3.</p>
    <?php
}

function mostrar_metabox_caja3_texto1($post) {
    $texto1 = get_post_meta($post->ID, 'raw_caja3_texto1', true);
    ?>
    <textarea name="raw_caja3_texto1" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto1); ?></textarea>
    <p>Introduce el texto 1 de la Caja 3.</p>
    <?php
}

function mostrar_metabox_caja3_texto2($post) {
    $texto2 = get_post_meta($post->ID, 'raw_caja3_texto2', true);
    ?>
    <textarea name="raw_caja3_texto2" style="width: 100%; height: 100px;"><?php echo esc_textarea($texto2); ?></textarea>
    <p>Introduce el texto 2 de la Caja 3.</p>
    <?php
}

function mostrar_metabox_caja3_button($post) {
    $button = get_post_meta($post->ID, 'raw_caja1_button', true);
    ?>
    <input type="text" name="raw_caja1_button" value="<?php echo esc_attr($button); ?>" style="width: 100%;">
    <p>Introduce el texto del botón de la Caja 3.</p>
    <?php
}


// Guardar los valores de los metaboxes
function guardar_metaboxes_cta($post_id) {
    $fields = [
        'raw_title_cta',
        'raw_texto_cta',
        'raw_caja1_title',
        'raw_caja1_texto1',
        'raw_caja1_texto2',
        'raw_caja1_button',
        'raw_caja2_title',
        'raw_caja2_texto1',
        'raw_caja2_texto2',
        'raw_caja2_button',
        'raw_caja3_title',
        'raw_caja3_texto1',
        'raw_caja3_texto2',
        'raw_caja3_button'
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST) && !wp_is_post_autosave($post_id)) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'guardar_metaboxes_cta');
?>
