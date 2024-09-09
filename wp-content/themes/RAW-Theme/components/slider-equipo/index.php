<?php
/**
 * Componente: Slider Equipo.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<?php
	//Variable "upload_dir" para situar el inicio de la ruta en la carpeta Uploads (donde insertamos nuestro contenido media) de WordPress
    $upload_dir = wp_upload_dir();

	//IMAGENES Top Startup
    $imgTopStartup = $upload_dir['baseurl'] . '/2024/medios/topStartup.png';
	
	//IMÁGENES equipo Fundadores
	$imgCofundadorFer = $upload_dir['baseurl'] . '/2024/equipo/cofundadorManuel.png';
	$imgCofundadorMan = $upload_dir['baseurl'] . '/2024/equipo/cofundadorFernando.png';

	//IMÁGENES equipo Abogado Ley de la Segunda Oportunidad
	$imgAbogadoLSO1 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso1.jpg';
    $imgAbogadoLSO2 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso2.jpg';
    $imgAbogadoLSO3 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso3.jpg';
    $imgAbogadoLSO4 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso4.jpg';
	$imgAbogadoLSO5 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso5.jpg';
    $imgAbogadoLSO6 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso6.jpg';
    $imgAbogadoLSO7 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso7.jpg';
    $imgAbogadoLSO8 = $upload_dir['baseurl'] . '/2024/equipo/equipoLso8.jpg';

	//IMÁGENES equipo Abogado Derecho Bancario
    $imgAbogado1 = $upload_dir['baseurl'] . '/2024/equipo/equipoAbogado1.png';
    $imgAbogado2 = $upload_dir['baseurl'] . '/2024/equipo/equipoAbogado2.png';
    $imgAbogado3 = $upload_dir['baseurl'] . '/2024/equipo/equipoAbogado3.png';
    $imgAbogado4 = $upload_dir['baseurl'] . '/2024/equipo/equipoAbogado4.png';
?>

<div class="raw-component slider-equipo">
    <div id="nuestroEquipo">
        <?php
        printf(
            '<p class="title">%s</p>',
            esc_html( get_post_meta( get_the_ID(), 'raw_slider-equipo_title', true ) ) ?:
                'Nuestro equipo'
        )
        ?>

        <?php
        printf(
            '<p>%s</p>',
            esc_html( get_post_meta( get_the_ID(), 'raw_slider-equipo_text', true ) ) ?:
                'Nos mantenemos en constante evolución y optimizamos nuestros procesos para dar los mejores resultados. Operamos de forma simple y transparente con los riesgos que conlleve cada proceso.'
        )
        ?>

        <?php
        printf(
            '<p><a id="boton-whatsapp" role="button" class="raw-whatsapp" href="%1$s">%2$s</a></p>',
            esc_url( get_post_meta( get_the_ID(), 'raw_slider-equipo_button_url', true ) ) ?: 'https://api.whatsapp.com/send/?phone=%2B34613056334&text=Hola%21+Quiero+informacion+sobre+Soluciona+Mi+Deuda.&type=phone_number&app_absent=0',
            esc_html( get_post_meta( get_the_ID(), 'raw_slider-equipo_button_text', true ) ) ?: 'Consúltanos por WhatsApp'
        )
        ?>
    </div>

    <div id="containerFundadores">
        <h2>Conoce a Soluciona Mi Deuda</h2>
        <!--  IMÁGENES ESTÁTICAS EQUIPO FUNDADORES  -->
        <div class="Fundadores">
            <div class="imagenFundadores">
                <img class="imgEquipo" src="<?php echo esc_url($imgCofundadorMan); ?>" alt="Imagen Co-Fundador Manuel, Soluciona mi Deuda">
                <p class="textImgEquipo">Manuel, Co-Fundador | <br/> CEO</p>
            </div>
            
            <div class="imagenFundadores">
                <img class="imgEquipo" src="<?php echo esc_url($imgCofundadorFer); ?>" alt="Imagen Co-Fundador Fernando, Soluciona mi Deuda">
                <p class="textImgEquipo">Fernando, Co-fundador | Director Jurídico                                         </p>
            </div>
        </div>
    </div>

    <!--  CARRUSEL EQUIPO ABOGADO LSO    -->
    
    <h2>Abogados Especialistas en Ley de Segunda Oportunidad</h2>
    <div class="SliderLSO">
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO1); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Alejandra, Directora de Derecho Concursal.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO2); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Alfonso, Abogado Especialista en Ley de Segunda Oportunidad.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO3); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Alfonso , Abogado Especialista en Derecho Financiero.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO4); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Álvaro, Abogado Especialista en Ley de Segunda Oportunidad.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO5); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Damián, Abogado Especialista en Ley de Segunda Oportunidad.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO6); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">José María, Responsable de Área: Ley de Segunda Oportunidad.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO7); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Rosa, Abogado Especialista en Ley de Segunda Oportunidad.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogadoLSO8); ?>" alt="Miembro equipo LSO, Soluciona mi Deuda">
            <p class="textImgEquipo">Mercedes, Abogado Especialista en Ley de Segunda Oportunidad.</p>
        </div>
    </div>

    <!--  CARRUSEL EQUIPO ABOGADO BANCARIO    -->
    
    <h2>Abogados Especialistas en Derecho Bancario</h2>
    <div class="Slidecontainer">
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogado1); ?>" alt="Miembro equipo Abogado Bancario, Soluciona mi Deuda">
            <p class="textImgEquipo">Jesus Yendo Candal, Abogado de Derecho Bancario.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogado2); ?>" alt="Miembro equipo Abogado Bancario, Soluciona mi Deuda">
            <p class="textImgEquipo">David Parejo, Abogado de Derecho Bancario.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogado3); ?>" alt="Miembro equipo Abogado Bancario, Soluciona mi Deuda">
            <p class="textImgEquipo">Tania Martin, Abogado de Derecho Bancario.</p>
        </div>
        <div class="slide">
            <img class="imgEquipo" src="<?php echo esc_url($imgAbogado4); ?>" alt="Miembro equipo Abogado Bancario, Soluciona mi Deuda">
            <p class="textImgEquipo">Francisco Garrido, Abogado de Derecho Bancario.</p>
        </div>
    </div>
	
    <div id="topStartups">
        <h3>Soluciona Mi Deuda, en el Top Startups de LinkedIn España 2023</h3>
        <div id="contentStarTup">
            <div id="textTopStartups">
            	<p>LinkedIn nos ha seleccionado como una de las 20 startups más destacadas del país. Este reconocimiento es una muestra de nuestro crecimiento constante, nuestro compromiso con clientes y seguidores, así como nuestra capacidad para atraer al mejor talento profesional.</p>
            	<p>Cada año, LinkedIn destaca a las startups que están marcando la diferencia en el mundo empresarial, y estamos orgullosos de ser parte de este grupo.</p>
            	<p id="textNegrita">¡Seguimos trabajando en nuestra misión de proporcionar soluciones efectivas a aquellos que enfrentan desafíos económicos y brindar un servicio al cliente excepcional!</p>	
            </div>
            <img  src="<?php echo esc_url($imgTopStartup); ?>" alt="Logro Top 20 Startup España, Soluciona mi Deuda">
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    //CONFIGURACIÓN CARRUSEL ABOGADOS LSO
    jQuery(document).ready(function($) {
        $('.SliderLSO').slick({
            // Configuración de opciones para el slider
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            centerPadding: '15px'
        });
    });

    //CONFIGURACIÓN CARRUSEL ABOGADOS DERECHO BANCARIO
    jQuery(document).ready(function($) {
        $('.Slidecontainer').slick({
            // Configuración de opciones para el slider
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            centerPadding: '15px'
        });
    });
</script>
