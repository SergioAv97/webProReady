<?php
/**
 * Componente: Caja Ayuda.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<?php
//Variable "upload_dir" para situar el inicio de la ruta en la carpeta Uploads (donde insertamos nuestro contenido media) de WordPress
$upload_dir = wp_upload_dir();
$iconMobil = $upload_dir['baseurl'] . '/2021/12/icon-phone.png';

?>
<div id="caja-ayuda-telefono" class="raw-component-caja-ayuda">
    <div id="raw-container-caja-ayuda">
        <a href="https://es.trustpilot.com/review/solucionamideuda.es">
            <h1>¿Necesitas ayuda urgente?</h1>
            <p>¡Llamanos!</p>
        </a>
        <a href="tel:910916445">  
            <div id="raw-enlace-mobil">
                    <img id="iconMobil" src="<?php echo esc_url($iconMobil); ?>" alt="Icono telefono">
                    <?php
		                	printf(
		                		'<h2>%s</h2>',
		                		esc_html( get_post_meta( get_the_ID(), 'raw_caja-ayuda-mobil', true ) ) ?:
		                			'Introduce el numero que deseas'
		                	);
		                ?>
            </div>
        </a>
    </div>
</div>