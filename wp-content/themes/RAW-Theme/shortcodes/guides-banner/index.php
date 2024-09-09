<?php
/**
 * RAW Guides Banner Shortcode.
 *
 * This file is part of the Acronyms RAW Theme Shortcodes ~ Copyright (C) 2024 Raul Illana <raul.illana@gmail.com>.
 * This code is NOT free software: you can NOT redistribute or sell it. You can modify it to suit your needs, but you can NOT sell or redistribute any derivative work also.
 * This code is distributed WITHOUT ANY WARRANTY and WITH ALL RIGHTS RESERVED.
 *
 * @package Acronyms\RAW
 * @subpackage Shortcodes
 * @since 1.0.0
 */

add_action(
	'init',
	function () {
		add_shortcode(
			'raw-guides-banner',
			function ( $atts ) {

				$atts = shortcode_atts(
					array(
						'type' => array(
							'acoso-telefonico',
							'asnef-baja',
							'asnef-consulta',
							'asnef-salir',
							'deudas-cancelar',
							'deudas-control',
							'deudas-embargo',
							'deudas-liquidar',
							'deudas-renegociar',
							'deudas-reunificar',
							'lso-dudas',
							'lso-errores',
						),
					),
					$atts,
					'raw-guides-banner'
				);

				switch ( $atts['type'] ) {
					case 'acoso-telefonico':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Cómo acabo con el acoso telefónico?', 'raw' ),
							'content'  => __( 'Ponle freno de una vez por todas al acoso que ejercen las entidades financieras y vuelve a respirar tranquilo.', 'raw' ),
							'link'     => '/lead-magnet-guia-gratuita-frenar-el-acoso-telefonico',
							'image'    => 21663,
						);
						break;

					case 'asnef-baja':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Cómo pedir la baja temporal de ASNEF?', 'raw' ),
							'content'  => __( 'Te enseñamos cómo pedir la supresión de tus datos de fichero de manera temporal y que desaparezcas de ASNEF.', 'raw' ),
							'link'     => '/baja-cautelar-asnef',
							'image'    => 21725,
						);
						break;

					case 'asnef-consulta':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Necesitas saber si estás en ASNEF?', 'raw' ),
							'content'  => __( 'Conseguimos tu fichero de morosidad completamente gratis para que puedas conseguir la financiación que necesitas.', 'raw' ),
							'link'     => '/landing-solicitar-asnef',
							'image'    => '',
						);
						break;

					case 'asnef-salir':
						$shortcode = array(
							'contrast' => false,
							'heading'  => __( '¿Cómo puedo salir de ASNEF para siempre?', 'raw' ),
							'content'  => __( 'En esta guía aprenderás cómo conseguir que tu nombre deje de figurar en ASNEF de manera definitiva.', 'raw' ),
							'link'     => '/guia-gratuita-como-salir-asnef-definitivamente',
							'image'    => 21769,
						);
						break;

					case 'deudas-cancelar':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Cómo puedo cancelar mi deuda sin devolver mi préstamo?', 'raw' ),
							'content'  => __( 'Descubre si puedes cancelar tu deuda sin tener que devolver los intereses y cómo hacerlo en sencillos pasos.', 'raw' ),
							'link'     => '/academia/intereses/guia-gratuita-como-cancelar-tu-deuda-sin-tener-que-devolver-el-prestamo',
							'image'    => 23449,
						);
						break;

					case 'deudas-control':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Cómo puedo dejar de acumular deudas y recuperar el control?', 'raw' ),
							'content'  => __( 'Te mostramos cómo dejar de acumular deudas sin que tengas que optar a una refinanciación.', 'raw' ),
							'link'     => '/academia/sobreendeudamiento/guia-gratuita-como-dejar-de-acumular-deudas-y-recuperar-el-control-de-tus-finanzas',
							'image'    => 23461,
						);
						break;

					case 'deudas-embargo':
						$shortcode = array(
							'contrast' => false,
							'heading'  => __( '¿Cómo puedes frenar el embargo de tus deudas?', 'raw' ),
							'content'  => __( 'En esta guía aprenderás cómo frenar el embargo de tus deudas y proteger tu salario y propiedades.', 'raw' ),
							'link'     => '/academia/impago/guia-gratuita-como-frenar-el-embargo-de-tus-deudas',
							'image'    => 23435,
						);
						break;

					case 'deudas-liquidar':
						$shortcode = array(
							'contrast' => false,
							'heading'  => __( '¿Cómo liquido mis deudas sin ganar más?', 'raw' ),
							'content'  => __( 'Con esta guía conseguirás liquidar tus deudas sin necesidad de tener más ingresos.', 'raw' ),
							'link'     => '/guia-gratuita-cancelar-deudas-sin-pagar-mas',
							'image'    => 21744,
						);
						break;

					case 'deudas-renegociar':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Cómo puedo renegociar mis deudas?', 'raw' ),
							'content'  => __( 'En esta guía te descubriremos como negociar las deudas para que pagues menos por ellas.', 'raw' ),
							'link'     => '/guia-gratuita-como-negociar-tus-deudas',
							'image'    => 21809,
						);
						break;

					case 'deudas-reunificar':
						$shortcode = array(
							'contrast' => true,
							'heading'  => __( '¿Cuál es la mejor reunificación para mis deudas?', 'raw' ),
							'content'  => __( 'Con esta guía podrás decidir la reunificación de deudas que mejor se adapte a tu situación, y agrupar todas tus cuotas en una sola de menor cantidad.', 'raw' ),
							'link'     => '/guia-gratuita-reunificacion-deuda',
							'image'    => 21824,
						);
						break;

					case 'lso-dudas':
						$shortcode = array(
							'contrast' => false,
							'heading'  => __( '¿Quieres resolver todas tus dudas con la LSO?', 'raw' ),
							'content'  => __( 'Respondemos todas tus preguntas sobre el procedimiento que te cambiará la vida.', 'raw' ),
							'link'     => '/guia-gratuita-preguntas-frecuentes-lso',
							'image'    => 21838,
						);
						break;

					case 'lso-errores':
						$shortcode = array(
							'contrast' => false,
							'heading'  => __( '¿Cómo evitar errores antes de acogerse a la LSO?', 'raw' ),
							'content'  => __( 'En esta guía conocerás los errores comunes a evitar antes de acogerte a la LSO y cancelar tus deudas.', 'raw' ),
							'link'     => '/academia/ley-segunda-oportunidad/guia-gratuita-errores-comunes-ley-segunda-oportunidad',
							'image'    => 26677,
						);
						break;

					default:
						exit;
				}

				return sprintf(
					'<div id="%1$s" %2$s>%3$s<div><strong>%4$s</strong><p>%5$s</p></div><div><p>%6$s</p><a role="button" href="%7$s">%8$s <i class="fa-solid fa-download"></i></a></div></div>',
					$atts['type'],
					( $shortcode['contrast'] ? ' class="guide-banner contrast"' : ' class="guide-banner"' ),
					wp_get_attachment_image( $shortcode['image'], 'full' ),
					$shortcode['heading'],
					$shortcode['content'],
					'GUÍA GRATUITA',
					$shortcode['link'],
					'Descargar'
				);
			}
		);
	}
);
