<?php
// Agregar el metabox para el título de la página "Te liberamos"
function agregar_metabox_title_page_te_liberamos() {
    add_meta_box(
        'metabox-title_page_te_liberamos',
        'Título de la Página "Te liberamos"',
        'mostrar_metabox_title_page_te_liberamos',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );
// Agregar el metabox para el sub-titulo de la página "Te liberamos"
    add_meta_box(
        'metabox-title_sub_text_te_liberamos',
        'Subtexto de la Página "Te liberamos"',
        'mostrar_metabox_title_sub_text_te_liberamos',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );
    
    add_meta_box(
        'metabox-header-text-te-liberamos',
        'Header Text Te Liberamos',
        'mostrar_metabox_header_text_te_liberamos',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );
    add_meta_box(
        'metabox-span-text-te-liberamos',
        'Span Text Te Liberamos',
        'mostrar_metabox_span_text_te_liberamos',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'agregar_metabox_title_page_te_liberamos');

// Mostrar el metabox para el título de la página "Te liberamos"
function mostrar_metabox_title_page_te_liberamos($post) {
    // Obtiene el valor actual del campo del título
    $title = get_post_meta($post->ID, 'raw-title-page-te-liberamos', true);
    ?>
    <input type="text" name="raw-title-page-te-liberamos" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    <p>Introduce el título de la página "Te liberamos".</p>
    <?php

    $raw_title = get_post_meta( $post->ID, 'raw-title-cajas-imagenes', true );
    wp_nonce_field( basename( __FILE__ ), 'my_meta_box_nonce' );
    ?>
    <label for="raw-title-cajas-imagenes">Título:</label>
    <input type="text" name="raw-title-cajas-imagenes" value="<?php echo esc_attr( $raw_title ); ?>" class="widefat">
    <?php
}

// Mostrar el metabox para el subtexto de la página "Te liberamos"
function mostrar_metabox_title_sub_text_te_liberamos($post) {
    // Obtiene el valor actual del campo del subtexto
    $sub_texto = get_post_meta($post->ID, 'raw-title-sub-text-te-liberamos', true);
    ?>
    <textarea name="raw-title-sub-text-te-liberamos" style="width: 100%; height: 100px;"><?php echo esc_textarea($sub_texto); ?></textarea>
    <p>Introduce el subtexto de la página "Te liberamos".</p>
    <?php
}
function mostrar_metabox_header_text_te_liberamos($post) {
    $header_text = get_post_meta($post->ID, 'raw-header-text-te-liberamos', true);
    ?>
    <textarea name="raw-header-text-te-liberamos" style="width: 100%; height: 100px;"><?php echo esc_textarea($header_text); ?></textarea>
    <?php
}
function mostrar_metabox_span_text_te_liberamos($post) {
    $span_text = get_post_meta($post->ID, 'raw-span-text-te-liberamos', true);
    ?>
    <input type="text" name="raw-span-text-te-liberamos" value="<?php echo esc_attr($span_text); ?>" style="width: 100%;">
    <?php
}

// Guardar el valor de los metaboxes de la página "Te liberamos"
function guardar_metaboxes_te_liberamos($post_id) {
    if (array_key_exists('raw-title-page-te-liberamos', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'raw-title-page-te-liberamos', $_POST['raw-title-page-te-liberamos']);
    }

    if (array_key_exists('raw-title-sub-text-te-liberamos', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'raw-title-sub-text-te-liberamos', $_POST['raw-title-sub-text-te-liberamos']);
    }

    if (array_key_exists('raw-header-text-te-liberamos', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'raw-header-text-te-liberamos', $_POST['raw-header-text-te-liberamos']);
    }
    if (array_key_exists('raw-span-text-te-liberamos', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'raw-span-text-te-liberamos', $_POST['raw-span-text-te-liberamos']);
    }
}
add_action('save_post', 'guardar_metaboxes_te_liberamos');
