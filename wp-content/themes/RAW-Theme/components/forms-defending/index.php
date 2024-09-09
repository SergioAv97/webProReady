<?php
/**
 * Componente: Cajas Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */
?>  
    <div >
        <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
        <form id="form-defending" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D7Q000006vVPz"
              method="POST" onsubmit="return ValidateForm()">
            <!-- estos campos han de ir obligatoriamente para su correcto funcionamiento justo debajo de la etiqueta de apertura del form -->
            <input type="hidden" name="oid" value="00D7Q000006vVPz">
            <input type="hidden" name="retURL" value="https://defending.es/politica-de-privacidad">
        
            <div id="body">
                <div class="pareja-inputs">
                    <div class="container-inputs">
                        <label for="name" class="labels-form">Nombre*</label>
                        <input class="inputs" type="text" id="first_name" maxlength="40" name="first_name" size="20" required>
                    </div>
                    <div class="container-inputs">
                        <label for="lastName" class="labels-form">Apellidos*</label>
                        <input class="inputs" id="last_name" maxlength="80" name="last_name" size="20" type="text" required>
                    </div>
                </div>
                <div class="pareja-inputs">
                    <div class="container-inputs">
                        <label for="email" class="labels-form">Correo*</label>
                        <input class="inputs" id="email" maxlength="80" name="email" size="20" type="email" required>
                    </div>
                    <div class="container-inputs">
                        <label for="telfono" class="labels-form">Número de teléfono*</label>
                        <input class="inputs" id="mobile" maxlength="40" name="mobile" size="20" type="tel" required>
                    </div>
                </div>
                <div class="container-inputs" id="container-inputs-pick-list">
                    <label for="interes_del_cliente__c" class="labels-form">Seleccione una opción:</label>
                    <select class="inputs-options" id="00NSo000001d6Zh" name="00NSo000001d6Zh" title="Interes del cliente">
                        <option class="option-form" selected value="">Selecciona</option>
                        <option class="option-form" value="Salir de ASNEF u otro fichero">Salir de ASNEF u otro fichero</option>
                        <option class="option-form" value="Denunciar Acoso telefónico">Denunciar Acoso telefónico</option>
                        <option class="option-form" value="Reclamar Tarjetas Revolving">Reclamar Tarjetas Revolving</option>
                        <option class="option-form" value="Reclamar Microcréditos">Reclamar Microcréditos</option>
                        <option class="option-form" value="Reclamar Préstamos Personales">Reclamar Préstamos Personales</option>
                        <option class="option-form" value="Ley de Segunda Oportunidad">Ley de Segunda Oportunidad</option>
                    </select>
                </div>
                <a id="politica-privacidad-defending" href="https://defending.es/politica-de-privacidad/">Política de privacidad</a>
                <input type="submit" name="submit" id="button-form-leads-defending">
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
