<?php
/**
 * RAW Theme Functions and Definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

use Acronyms\RAW;

require get_stylesheet_directory() . '/engine/class-raw.php';

// Metaboxes Custom
require_once get_stylesheet_directory() . '/metaboxes/hero-form-landin.php';
require_once get_stylesheet_directory() . '/metaboxes/caja-ayuda.php';
require_once get_stylesheet_directory() . '/metaboxes/texto-video-landings.php';
require_once get_stylesheet_directory() . '/metaboxes/cajas-imagenes.php';
require_once get_stylesheet_directory() . '/metaboxes/dudas-cta.php';
// DANI - Metaboxes adicionales
require_once get_stylesheet_directory() . '/metaboxes/dos-cajas-cta.php';
require_once get_stylesheet_directory() . '/metaboxes/tres-cajas-cta.php';
require_once get_stylesheet_directory() . '/metaboxes/modulo-imagen-caja-cta.php';

/**
 * Enqueue Slick Slider scripts and styles
 */
function enqueue_custom_scripts() {
    // Registra el script de Slick Slider desde el CDN con dependencia en jQuery
    wp_register_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_script('slick-slider');

    // Carga las hojas de estilo de Slick Slider
    wp_enqueue_style('slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick-slider-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css', array(), '1.8.1', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

/**
 * Enqueue custom metabox scripts in admin area
 */
function custom_metabox_scripts($hook) {
    global $typenow;
    if ($typenow == 'post') {
        // Incluye los medios de WordPress y el script personalizado de metaboxes
        wp_enqueue_media();
        wp_enqueue_script('custom-metabox', get_template_directory_uri() . '/js/custom-metabox.js', array('jquery'), null, true);
    }
}
add_action('admin_enqueue_scripts', 'custom_metabox_scripts');

/**
 * Carga el script de reseñas solo en la plantilla de página específica
 */
function load_trustindex_script() {
    if (is_page_template('titulo-reseña.php')) {
        echo '<script src="https://cdn.trustindex.io/loader.js?142e270781ec390bfd5887b218"></script>';
    }
}
add_action('wp_footer', 'load_trustindex_script');

/**
 * Función para cargar los scripts de Salesforce y Google Tag Manager
 */
function enqueue_chatbot_scripts() {
    // Cargar el script de Salesforce Embedded Messaging
    wp_enqueue_script('bootstrap-js', 'https://solucionamideuda.my.site.com/ESWChatWebSMD1714466662846/assets/js/bootstrap.min.js', array(), null, true);
    
    // Encolar el script de Google Tag Manager
    wp_enqueue_script('gtag-js1', 'https://www.googletagmanager.com/gtag/js?id=AW-711684797&l=dataLayer&cx=c', array(), null, true);
    wp_enqueue_script('gtag-js2', 'https://www.googletagmanager.com/gtag/js?id=G-7EC58ZXE47&l=dataLayer&cx=c', array(), null, true);
    wp_enqueue_script('gtm-js', 'https://www.googletagmanager.com/gtm.js?id=GTM-5WWH9VQ', array(), null, true);
    wp_enqueue_script('gtag-js3', 'https://www.googletagmanager.com/gtag/js?id=AW-711684797', array(), null, true);

    // Añadir el script inline para el chatbot
    wp_add_inline_script('bootstrap-js', '
        function initEmbeddedMessaging() {
            try {
                embeddedservice_bootstrap.settings.language = "es"; // Por ejemplo, "en" o "en-US"
                embeddedservice_bootstrap.init(
                    "00D7Q000006vVPz",
                    "Chat_Web_SMD",
                    "https://solucionamideuda.my.site.com/ESWChatWebSMD1714466662846",
                    {
                        scrt2URL: "https://solucionamideuda.my.salesforce-scrt.com"
                    }
                );
            } catch (err) {
                console.error("Error loading Embedded Messaging: ", err);
            }
        }
    
        // Llamar a la función de inicialización cuando se cargue el script
        initEmbeddedMessaging();
    ');

    // Añadir el código de la etiqueta <noscript> de Google Tag Manager
    add_action('wp_footer', function() {
        echo '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WWH9VQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>';
    });

    // Incluir el script para la gestión de consentimientos CMP
    wp_add_inline_script('bootstrap-js', '
        const revokeListeners = [];
        window.addRevokeListener = (callback) => {
            revokeListeners.push(callback);
        };
        document.addEventListener("cmplz_revoke", function(e) {
            cmplz_set_cookie("cmplz_consent_mode", "revoked", false);
            revokeListeners.forEach((callback) => {
                callback();
            });
        });

        const consentListeners = [];
        window.addConsentUpdateListener = (callback) => {
            consentListeners.push(callback);
        };
        document.addEventListener("cmplz_fire_categories", function(e) {
            var consentedCategories = e.detail.categories;
            const consent = {
                "security_storage": "granted",
                "functionality_storage": "granted",
                "personalization_storage": cmplz_in_array("preferences", consentedCategories) ? "granted" : "denied",
                "analytics_storage": cmplz_in_array("statistics", consentedCategories) ? "granted" : "denied",
                "ad_storage": cmplz_in_array("marketing", consentedCategories) ? "granted" : "denied",
                "ad_user_data": cmplz_in_array("marketing", consentedCategories) ? "granted" : "denied",
                "ad_personalization": cmplz_in_array("marketing", consentedCategories) ? "granted" : "denied"
            };
    
            let consented = [];
            for (const [key, value] of Object.entries(consent)) {
                if (value === "granted") {
                    consented.push(key);
                }
            }
            cmplz_set_cookie("cmplz_consent_mode", consented.join(","), false);
            consentListeners.forEach((callback) => {
                callback(consent);
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'enqueue_chatbot_scripts');

new RAW();
?>
