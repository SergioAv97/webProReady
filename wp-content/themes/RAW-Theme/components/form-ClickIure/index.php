<?php
/**
 * Componente: Cajas Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */
?>  
    <div id="formularios-clicklure">
        <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
        <form id="form-Clicklure" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D7Q000006vVPz"
              method="POST" onsubmit="return ValidateForm()">
            <!-- estos campos han de ir obligatoriamente para su correcto funcionamiento justo debajo de la etiqueta de apertura del form -->
            <input type="hidden" name="oid" value="00D7Q000006vVPz">
            <input type="hidden" name="retURL" value="https://clickiure.com/politica-privacidad/">
        
            <div id="main-clicklure">
                <div class="pareja-inputs-clicklure">
                    <div class="container-inputs">
                        <label for="name" class="labels-form-clicklure">Nombre*</label>
                        <input class="inputs" type="text" id="first_name" maxlength="40" name="first_name" size="20" required>
                    </div>
                    <div class="container-inputs">
                        <label for="lastName" class="labels-form-clicklure">Apellidos*</label>
                        <input class="inputs" id="last_name" maxlength="80" name="last_name" size="20" type="text" required>
                    </div>
                </div>
                <div class="pareja-inputs-clicklure">
                    <div class="container-inputs">
                        <label for="email" class="labels-form-clicklure">Correo*</label>
                        <input class="inputs" id="email" maxlength="80" name="email" size="20" type="email" required>
                    </div>
                    <div class="container-inputs">
                        <label for="telfono" class="labels-form-clicklure">Número de teléfono*</label>
                        <input class="inputs" id="mobile" maxlength="40" name="mobile" size="20" type="tel" required>
                    </div>
                </div>
                <div class="container-inputs-individual">
                    <label for="telfono" class="labels-form-clicklure">Nombre de la empresa</label>
                    <input class="inputs-options" id="00NSo000001d6Zg" maxlength="40" name="00NSo000001d6Zg" type="text">
                </div>
                <div class="container-inputs-individual">
                    <label for="mensaje" class="labels-form-clicklure">Mensaje (opcional)</label>
                    <textarea class="inputs-options" id="00NSo000001d6Zi" name="00NSo000001d6Zi" type="text" ></textarea>
                </div>

                
                    <a id="politica-privacidad" href="https://clickiure.com/politica-privacidad/">Política de privacidad</a>
                    <input type="submit" name="submit" id="button-form-leads">
                
            </div>
            <input id="00NUC000000xFzC" maxlength="255" name="00NUC000000xFzC" type="hidden">
            <input id="gclid_field" maxlength="255" name="gclid" type="hidden">
            <input id="url" name="url" type="hidden">
            <input id="00NUC0000011O7t" maxlength="255" name="00NUC0000011O7t" type="hidden">
            <input id="00NUC0000011O7u" maxlength="255" name="00NUC0000011O7u" type="hidden">
            <input id="00NUC0000011O7v" maxlength="255" name="00NUC0000011O7v" type="hidden">
            <input id="00NUC0000011O7w" maxlength="255" name="00NUC0000011O7w" type="hidden">
        
        </form>
    <div class="configuracion-javaScript">
        <script type="text/javascript">
            function ValidateForm() {
                document.getElementById('url').value = window.location.href;
                var params = new URLSearchParams(window.location.search);
                document.getElementById('00NUC000000xFzB').value = ga.getAll()[0].get('clientId');
                document.getElementById('00NUC000000xFzC').value = ga.getAll()[0].get('trackingId');
                document.getElementById('gclid_field').value = params.get('gclid');
                document.getElementById('00NUC0000011O7t').value = params.get('utm_campaign');
                document.getElementById('00NUC0000011O7u').value = params.get('utm_medium');
                document.getElementById('00NUC0000011O7v').value = params.get('utm_source');
                document.getElementById('00NUC0000011O7w').value = params.get('utm_term');
                return true;
            }
        </script>
    </div>

    </div>
</div>
