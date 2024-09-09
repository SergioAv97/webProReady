<?php
    // Agregar el metabox para el campo raw_caja-ayuda-mobil
    function agregar_metabox_caja_ayuda_mobil() {
        add_meta_box(
            'metabox-caja-ayuda-mobil', // ID del metabox
            'Caja de Ayuda Mobil', // Título del metabox
            'mostrar_metabox_caja_ayuda_mobil', // Callback para mostrar el contenido del metabox
            'post', // Tipo de publicación donde aparecerá el metabox
            'normal', // Contexto donde aparecerá el metabox (normal, side, etc.)
            'high' // Prioridad del metabox
        );
    }
    add_action('add_meta_boxes', 'agregar_metabox_caja_ayuda_mobil');
    
    // Mostrar el contenido del metabox
    function mostrar_metabox_caja_ayuda_mobil($post) {
        // Obtener el valor actual del campo
        $caja_ayuda_mobil = get_post_meta($post->ID, 'raw_caja-ayuda-mobil', true);
        ?>
        <label for="raw_caja-ayuda-mobil">Número de Ayuda Mobil:</label>
        <input type="text" name="raw_caja-ayuda-mobil" id="raw_caja-ayuda-mobil" value="<?php echo esc_attr($caja_ayuda_mobil); ?>" style="width: 100%;">
        <?php
    }
    
    // Guardar el valor del metabox
    function guardar_metabox_caja_ayuda_mobil($post_id) {
        // Verificar si se está guardando la publicación de manera automática
        if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
            return;
        }
    
        // Verificar el campo nonce para seguridad
        if (!isset($_POST['caja_ayuda_mobil_nonce']) || !wp_verify_nonce($_POST['caja_ayuda_mobil_nonce'], basename(__FILE__))) {
            return;
        }
    
        // Guardar el valor del campo
        if (isset($_POST['raw_caja-ayuda-mobil'])) {
            update_post_meta($post_id, 'raw_caja-ayuda-mobil', sanitize_text_field($_POST['raw_caja-ayuda-mobil']));
        }
    }
    add_action('save_post', 'guardar_metabox_caja_ayuda_mobil');
?>
