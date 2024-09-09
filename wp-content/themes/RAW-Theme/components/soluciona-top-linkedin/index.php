<?php
//Variable "upload_dir" para situar el inicio de la ruta en la carpeta Uploads (donde insertamos nuestro contenido media) de WordPress
$upload_dir = wp_upload_dir();

//IMAGENES Top Startup
$imgTopStartup = $upload_dir['baseurl'] . '/2024/medios/topStartup.png';
?>

<div id="topStartups">
    <h3>Soluciona Mi Deuda, en el Top Startups de LinkedIn España 2023</h3>
    <div id="contentStarTup">
        <div id="textTopStartups">
            <p>LinkedIn nos ha seleccionado como una de las 20 startups más destacadas del país. Este reconocimiento es una muestra de nuestro crecimiento constante, nuestro compromiso con clientes y seguidores, así como nuestra capacidad para atraer al mejor talento profesional.</p>
            <p>Cada año, LinkedIn destaca a las startups que están marcando la diferencia en el mundo empresarial, y estamos orgullosos de ser parte de este grupo.</p>
            <p id="textNegrita">¡Seguimos trabajando en nuestra misión de proporcionar soluciones efectivas a aquellos que enfrentan desafíos económicos y brindar un servicio al cliente excepcional!</p>
        </div>
        <img src="<?php echo esc_url($imgTopStartup); ?>" alt="Logro Top 20 Startup España, Soluciona mi Deuda">
    </div>
</div>