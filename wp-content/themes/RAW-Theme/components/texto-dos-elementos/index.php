<?php
/**
 * Componente: Texto Dos Elementos.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */
 
?>
<div class="raw-component texto-dos-elementos">
    <div class="container">
        <div class="grid">
            <div>
                <?php
                    print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_editor', true ) ) ?:
                        '<p><b class="title">Tus abogados para cancelar deudas en Sevilla</b></p>
                        <p>En <b>Soluciona Mi Deuda</b> ofrecemos asesoría financiera y legal para resolver impagos en todo el territorio español. Disponemos de un equipo de <b>abogados de deudas en Sevilla</b> con amplia experiencia en la liquidación de deudas especializados en la reunificación y negociación de deudas y en la Ley de la Segunda Oportunidad.</p>
                        <p><b class="title">Negociamos acuerdos extrajudiciales</b></p>
                        <p>Nuestros <b>abogados especialistas en deudas bancarias en Sevilla</b> emplean métodos y estrategias rápidas y efectivas para negociar con las entidades cuando nuestros clientes necesitan ayuda para pagar sus deudas y sus préstamos incluyen intereses usurarios y cláusulas abusivas logrando, incluso, recuperar el dinero que han pagado sin que les correspondiera. Si tienes deudas pendientes, con nosotros estarás acompañado de los mejores <b>abogados para negociar deudas de Sevilla.</b></p>
                        <p><b class="title">Abogados Ley de Segunda Oportunidad Sevilla</b></p>
                        <p>Nuestros clientes también son guiados por nuestros <b>abogados para deudas de Sevilla</b> cuando la solución a sus problemas financieros pasa por iniciar la Ley de la Segunda Oportunidad. Les acompañamos desde el principio en la solicitud ante el notario cuando son particulares y ante el Registro Mercantil si son autónomos, mediamos para conseguir un acuerdo extrajudicial de pagos favorable y en la liquidación del patrimonio. Además, tratamos de conseguir una resolución positiva del Beneficio de Exoneración del Pasivo Insatisfecho (BEPI) para que las deudas queden canceladas definitivamente.</p>
                        <p><b class="title">Miles de clientes satisfechos nos avalan</b></p>
                        <p>Soluciona Mi Deuda opera en toda España contando con sedes físicas en Madrid y Sevilla en las que te atenderemos encantados si lo deseas. ¡Llámanos al <a href="tel:+34910916495" rel="noopener">910916495</a> para coger tu cita previa!</p>
                        <p>Nuestros clientes son particulares y autónomos en una situación de sobreendeudamiento que necesitas resolver de la forma más eficiente y rápida posible. Muchos casos de éxito posicionan a <b>Soluciona Mi Deuda</b> como uno de los mejores despachos de <b>abogados para cancelar deudas de Sevilla</b>.</p>';
 
                    printf(
                        '<a id="boton-llamada" role="button" class="raw-phone" href="%s">%s</a>',
                        esc_url( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_link', true ) ) ?: 'tel:+34910916445',
                        esc_html( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_text', true ) ) ?: 'Llámanos gratuitamente'
                    )
                    ?>
            </div>
 
            <div>
                <div>
                    <div id="form-reunificacion-deudas">
                      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">                  
 
                      <form id="container-formulario" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D7Q000006vVPz" method="POST" onsubmit="return ValidateForm()">
                        <b class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>
                        <input type="hidden" name="oid" value="00D7Q000006vVPz">
                        <input type="hidden" name="retURL" value="https://www.solucionamideuda.es/gracias-descarga-guias/">                
 
                        <label for="first_name" class="label-form-web-leads">Nombre*</label>
                        <input id="first_name" maxlength="40" name="first_name" size="20" type="text" required><br>
                   
                        <label for="last_name" class="label-form-web-leads">Apellido*</label>
                        <input id="last_name" maxlength="80" name="last_name" size="20" type="text" required><br>
                   
                        <label for="mobile" class="label-form-web-leads">Número de teléfono móvil*</label>
                        <input id="mobile" maxlength="40" name="mobile" size="20" type="number" required><br>
                   
                        <label for="email" class="label-form-web-leads">Email*</label>
                        <input id="email" maxlength="80" name="email" size="20" type="email" required><br>

						<label for="label-picklist-form-asesoria" class="label-form-web-leads">Total de deuda estimada*</label>
						<select id="00NSo0000016BUz" class="input-form-web-leads" name="00NSo0000016BUz" title="Cantidad Deuda Formulario">
							<option disabled="" value="">Selecciona</option>
							<option value="Menos de 5.000€">Menos de 5.000€</option>
							<option value="5.000€ - 15.000€">5.000€ - 15.000€</option>
							<option value="15.000€ - 25.000€">15.000€ - 25.000€</option>
							<option value="25.000€ - 35.000€">25.000€ - 35.000€</option>
							<option value="35.000€ - 45.000€">35.000€ - 45.000€</option>
							<option value="45.000€ - 55.000€">45.000€ - 55.000€</option>
							<option value="Más de 55.000€">Más de 55.000€</option>
						</select><br>
                   
                        <div class="container-checkbox-form">
                          <input id="00NSo0000019wnQ" name="00NSo0000019wnQ" type="checkbox" value="1" required>
                          <p class="label-checkbox-form">Entiendo y acepto el tratamiento de mis datos según lo descrito en la política de privacidad.*</p>
                        </div>                  
 
                        <div class="container-checkbox-form">
                          <input id="00NSo0000019wnR" name="00NSo0000019wnR" type="checkbox" value="1" required>
                          <p class="label-checkbox-form">Entiendo y acepto recibir información sobre los servicios de Soluciona Mi Deuda, marca registrada por The Fintech Laboratory, S.L.*</p>
                        </div>                  
 
                        <input id="00NSo0000019oLH" name="00NSo0000019oLH" type="hidden" maxlength="255">
                        <input id="00NSo0000019oLG" name="00NSo0000019oLG" type="hidden" maxlength="255">
                        <input id="00NSo000001AN63" name="00NSo000001AN63" type="hidden" maxlength="255">
                        <input id="url" name="url" type="hidden">
                        <input id="00NSo000001C53R" name="00NSo000001C53R" type="hidden" maxlength="255">
                        <input id="00NSo000001C53S" name="00NSo000001C53S" type="hidden" maxlength="255">
                        <input id="00NSo000001C53T" name="00NSo000001C53T" type="hidden" maxlength="255">
                        <input id="00NSo000001C53U" name="00NSo000001C53U" type="hidden" maxlength="255">
                   
                        <input type="submit" name="submit" id="button-form-leads">
                      </form>                  
 
                      <script type="text/javascript">
                        function getCookie(name) {
                          var value = "; " + document.cookie;
                          var parts = value.split("; " + name + "=");
                          if (parts.length == 2) return parts.pop().split(";").shift();
                        }                  
 
                        function ValidateForm() {
                          document.getElementById('url').value = window.location.href;
                          var gaAll = ga.getAll();
                          if (gaAll.length > 0) {
                            var tracker = gaAll[0];
                            document.getElementById('00NSo0000019oLG').value = tracker.get('clientId');
                            document.getElementById('00NSo0000019oLH').value = tracker.get('trackingId');
                          }                
 
                          var urlParams = new URLSearchParams(window.location.search);
                          document.getElementById('00NSo000001AN63').value = urlParams.get('gclid');
                          document.getElementById('00NSo000001C53R').value = urlParams.get('utm_campaign');
                          document.getElementById('00NSo000001C53S').value = urlParams.get('utm_medium');
                          document.getElementById('00NSo000001C53T').value = urlParams.get('utm_source');
                          document.getElementById('00NSo000001C53U').value = urlParams.get('utm_term');                
 
                          var tduid = getCookie('tduid');
                          var leadNumber = 'ID_DEL_LEAD_GENERADO'; // Reemplaza esto con la lógica para obtener el ID del lead generado
                          var retURL = "https://www.solucionamideuda.es/gracias-lso/?leadNumber=" + leadNumber + "&tduid=" + (tduid ? tduid : '');
                          document.getElementById('retURL').value = retURL;
                          return true;
                        }                  
 
                        function obtenerIdLead(token) {
                          var url = "https://your-instance.salesforce.com/services/data/vXX.X/sobjects/Lead/ID_DEL_LEAD_GENERADO";                  
 
                          const clientId = 'tu_client_id';
                          const clientSecret = 'tu_client_secret';
                          const username = 'tu_usuario';
                          const password = 'tu_contraseña';
                          const securityToken = 'tu_security_token';                    
 
                          fetch('https://tudominio.my.salesforce.com/services/oauth2/token', {
                              method: 'POST',
                              headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                              },
                              body: `grant_type=password&client_id=${encodeURIComponent(clientId)}&client_secret=${encodeURIComponent(clientSecret)}&username=${encodeURIComponent(username)}&password=${encodeURIComponent(password + securityToken)}`
                            })
                            .then(response => response.json())
                            .then(data => {
                              const accessToken = data.access_token;                    
 
                              fetch('https://tudominio.my.salesforce.com/services/data/vXX.X/sobjects/Account', {
                                  method: 'GET',
                                  headers: {
                                    'Authorization': `Bearer ${accessToken}`
                                  }
                                })
                                .then(response => response.json())
                                .then(data => {
                                  console.log(data);
                                })
                                .catch(error => {
                                  console.error('Error al obtener los datos:', error);
                                });
                            })
                            .catch(error => {
                              console.error('Error de autenticación:', error);
                            });
                        }
                      </script>
                    </div>
                </div>
 
                <?php
                    $map_img = get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_map-image', true ) ?: 29004;
                    $map_url = get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_map-url', true ) ?: 'https://www.google.com/maps?ll=37.403307,-6.00434&z=13&t=m&hl=es-ES&gl=US&mapclient=embed&q=C.+Albert+Einstein,+10+41092+Sevilla';
 
                    printf( '<a href="%s" target="_blank">%s</a>', esc_url_raw( $map_url ), wp_kses_post( wp_get_attachment_image( $map_img, 'full' ) ) )
                ?>
 
                <div class="special">
                    <?php
                        printf(
                            '<p class="single">También puedes acudir a <a href="%s">%s</a>.</p>',
                            esc_url( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_link_url', true ) ) ?: '/abogados-deudas-sevilla/',
                            esc_html( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_link_text', true ) ) ?: 'nuestro despacho en Sevilla'
                        )
                        ?>
 
                    <?php
                        printf(
                            '<a id="boton-whatsapp" role="button" class="raw-whatsapp" href="%s">%s</a>',
                            esc_url( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_whatsapp_url', true ) ) ?: 'https://api.whatsapp.com/send/?phone=%2B34613056334&text=Hola%21+Quiero+informacion+sobre+Soluciona+Mi+Deuda.&type=phone_number&app_absent=0',
                            esc_html( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_whatsapp_text', true ) ) ?: 'Consúltanos gratis por WhatsApp'
                        )
                        ?>
                </div>
            </div>
        </div>
 
    </div>
</div>