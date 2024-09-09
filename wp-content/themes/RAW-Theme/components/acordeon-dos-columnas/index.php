<?php
/**
 * Componente: Acordeón Dos Columnas.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component acordeon-dos-columnas">
    <div class="container">

        <h2 class="big"><?php echo wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-dos-columnas_title', true ) ) ?: '¿Quién puede acogerse a la Ley de Segunda Oportunidad?'; ?></h2>

        <div class="grid">
            <div id="acordeon-li-left">
                <h3><?php echo wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-dos-columnas_col_1_title', true ) ) ?: 'Particulares y autónomos'; ?></h3>

                <?php
                $col_1_content = get_post_meta( get_the_ID(), 'raw_acordeon-dos-columnas_col_1_editor', true );
                echo $col_1_content ? do_shortcode( wp_kses_post( $col_1_content ) ) : '
                <ul class="accordion">
                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_1_box_1">
                        <label for="raw_acordeon-dos-columnas_1_box_1">Particulares</label>
                        <div>
                            <p>Los ingresos de muchas familias se ven disminuidos cada día ante imprevistos y las distintas crisis económicas por las que ha atravesado el país durante los últimos años.</p>
                            <p>Muchos de ellos, como tú, se han visto obligados a incumplir el pago de sus deudas para poder sobrevivir.</p>
                            <p>El sobreendeudamiento es una situación delicada ya que la deuda no deja de crecer y la posibilidad de cumplir con tus obligaciones de pago se hace cada vez más lejana.</p>
                            <p>Si tú también te encuentras en esta situación, la Ley de la Segunda Oportunidad es el procedimiento idóneo para acabar de una vez con tus deudas.</p>
                            <p>¡Nosotros te ayudamos!</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_1_box_2">
                        <label for="raw_acordeon-dos-columnas_1_box_2">Autónomos</label>
                        <div>
                            <p>Las crisis económicas y emergencias obligan a autónomos y empresarios a cerrar sus negocios, además de quedarse con deudas que no serán capaces de afrontar.</p>
                            <p>Si este es tu caso, la Ley de la Segunda Oportunidad te conviene. Y es que este procedimiento se creó pensando en emprendedores como tú, para que puedas acabar con tus deudas pendientes de la mejor forma.</p>
                            <p>Este mecanismo se diseñó para que todas aquellas personas cuya actividad empresarial ha resultado fallida, opten a una verdadera segunda oportunidad.</p>
                            <p>Así, esta ley funciona como una red que apoya los casos de endeudamiento y permite a autónomos y empresarios volver a integrarse en la economía de nuestro país.</p>
                        </div>
                    </li>
                </ul>';
                ?>
            </div>

            <div id="acordeon-li-right">
                <h3><?php echo wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-dos-columnas_col_2_title', true ) ) ?: 'Requisitos'; ?></h3>
                <h4><?php echo wp_kses_post( get_post_meta( get_the_ID(), 'raw_acordeon-dos-columnas_col_2_subtitle', true ) ) ?: 'Requisitos para acogerse a la Ley de la Segunda Oportunidad'; ?></h4>

                <?php
                $col_2_content = get_post_meta( get_the_ID(), 'raw_acordeon-dos-columnas_col_2_editor', true );
                echo $col_2_content ? do_shortcode( wp_kses_post( $col_2_content ) ) : '
                <ul class="accordion">
                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_2_box_1">
                        <h3>
                            <label for="raw_acordeon-dos-columnas_2_box_1">Situación de insolvencia actual o inminente</label>
                        </h3>
                        <div>
                            <p>Las cuotas de tus deudas y tus gastos básicos superan los ingresos familiares. En otras palabras, <b>no puedes pagar tus deudas</b> con los ingresos que tienes.</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_2_box_2">
                        <h3>
                            <label for="raw_acordeon-dos-columnas_2_box_2">Número de acreedores</label>
                        </h3>
                        <div>
                            <p>Las deudas que tengas deben provenir de al menos <b>dos acreedores distintos</b>. Esto es, más de dos bancos o entidades de financiación distintas con las que has contraído deudas.</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_2_box_3">
                        <h3>
                            <label for="raw_acordeon-dos-columnas_2_box_3">Cantidad total de deuda</label>
                        </h3>
                        <div>
                            <p>Para acogerte al procedimiento se encuentran regulados unos mínimos y máximos de deuda.</p>
                            <p>La cantidad total de la <b>deuda</b> que acumules <b>no</b> puede ser <b>superior a los 5 millones</b> de euros.</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_2_box_4">
                        <h3>
                            <label for="raw_acordeon-dos-columnas_2_box_4">Delitos socioeconómicos</label>
                        </h3>
                        <div>
                            <p>No puedes haber sido condenado con sentencia firme en los últimos 10 años por <b>delitos socioeconómicos</b>, contra el patrimonio, Hacienda, Seguridad Social, derechos de los trabajadores o falsedad documental.</p>
                            <p>Si tuvieras antecedentes por delitos de otra índole, no te impide acogerte al procedimiento de la segunda oportunidad ni te perjudica durante ninguna fase del proceso.</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_2_box_5">
                        <h3>
                            <label for="raw_acordeon-dos-columnas_2_box_5">Solicitudes anteriores de la Ley de Segunda Oportunidad</label>
                        </h3>
                        <div>
                            <p><b>No puedes haber solicitado</b> este procedimiento de <b>Ley de Segunda Oportunidad</b> durante los <b>últimos 5 años</b>.</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="hidden" id="raw_acordeon-dos-columnas_2_box_6">
                        <h3>
                            <label for="raw_acordeon-dos-columnas_2_box_6">Solicitudes anteriores de la Ley de Segunda Oportunidad</label>
                        </h3>
                        <div>
                            <p>Esta conducta viene determinada por una serie de aspectos que son revisados cuando presentas la solicitud para iniciar este procedimiento.</p>
                            <p>Es necesario que, <b>la persona no haya sido declarada culpable en el concurso de acreedores</b>. La buena fe no existiría si el deudor hubiera contraído deudas siendo consciente de que no podría pagarlas o actuó con falta de diligencia.</p>
                            <p>En los casos en los que el deudor se encuentra en situación de desempleo, <b>no haya rechazado una oferta de empleo acorde a sus capacidades en los últimos 4 años</b>.</p>
                        </div>
                    </li>
                </ul>';
                ?>
            </div>
        </div>

    </div>
</div>
