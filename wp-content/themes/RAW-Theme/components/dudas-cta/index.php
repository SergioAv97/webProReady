<div id="duda-cta">
    <a href="https://es.trustpilot.com/review/solucionamideuda.es" id="title">
        <?php
            printf(
                '<h3 id="title">%s</h3>',
                esc_attr( get_post_meta( get_the_ID(), 'raw-title', true ) ) ?: 'Introduzca su titulo'
            );
        ?>
    </a>
    
    <a id="boton-dudas" class="button" href="#header">
        <?php
            printf(
                '<p id="texto-button">%s</p>',
                wp_kses_post( get_post_meta( get_the_ID(), 'raw-texto-button', true ) ?: 'Introduzca su texto' )
            );
        ?>
    </a>
    
</div>