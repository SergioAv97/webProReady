<?php
/**
 * The template for displaying the header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <style>
        /* Estilos para dispositivos con ancho menor a 767px en orientación horizontal */
        @media screen and (max-width: 767px) and (orientation: landscape) {
            html, body {
                width: 100vw;
                height: 100vh;
                overflow: hidden;
                position: relative;
                background-color: #14264D !important;
                margin: 0;
                padding: 0;
            }
            #orientation-warning {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                max-width: 400px;
                padding: 20px;
                background-color: #f0f0f0; /* Gris claro */
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Sombra */
				border: 2px solid white;
                border-radius: 8px;
                text-align: center;
            }
            #orientation-warning p {
                margin: 0;
                font-size: 16px;
                line-height: 1.5;
                color: #333;
            }
            #main-content {
                display: none;
            }
        }
        /* Estilos para dispositivos con ancho menor a 767px en orientación vertical y dispositivos más grandes */
        @media screen and (min-width: 768px), (max-width: 767px) and (orientation: portrait) {
            #orientation-warning {
                display: none;
            }
            #main-content {
                display: block;
            }
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'raw' ); ?>>
    <!-- Cuadro con mensaje de advertencia -->
    <div id="orientation-warning">
        <p>Para una correcta visualización en dispositivos móviles y tablets pequeñas, por favor utiliza tu dispositivo en orientación vertical.</p>
    </div>

    <!-- Contenido principal del sitio -->
    <div id="main-content">
        <?php wp_body_open(); ?>
        <header id="header">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            // Primary menu.
            print '<div id="raw-primary-menu"><a class="toggle-nav" href="#">Menú <span>&#9776;</span></a>';
            wp_nav_menu(
                array(
                    'menu'           => 'primary',
                    'theme_location' => 'primary',
                )
            );
            // Llámanos sin compromiso.
            print '</div><div><a role="button" class="raw-phone" href="tel:910916445">Llámanos sin compromiso</a></div><br><br>';
            // Secondary menu.
            print '<div id="raw-secondary-menu"><a class="toggle-nav" href="#">Servicios <span>&#9776;</span></a>';
            wp_nav_menu(
                array(
                    'menu'           => 'secondary',
                    'menu_class'     => 'container menu',
                    'theme_location' => 'secondary',
                )
            );
            print '</div>';
            ?>
        </header>
        <section id="primary">
            <main id="main">