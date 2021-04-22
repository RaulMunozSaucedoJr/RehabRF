! function DOMContentLoaded() {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        const formulario = document.getElementById("formulario");
        const nombre = document.getElementById("nombre");
        const correo = document.getElementById("correo");
        const telefono = document.getElementById("telefono");
        const motivo = document.getElementById("motivo");

        formulario.addEventListener('submit', function (event) {
            event.preventDefault();

            if (Campos()) {
                swal({
                    icon: "success",
                    title: "¡Correo Enviado!",
                    text: "A la brevedad nos comunicaremos con usted",
                    timer: 5000,
                    button: false,
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                });
                formulario.reset();
            }


            function Campos() {
                if ((verificarVacio(nombre && correo && telefono && motivo)) ||
                    (Tamanos(nombre && correo && telefono && motivo)) ||
                    (!RegExs(nombre, 1) || !RegExs(correo, 2) || !RegExs(telefono, 3) || !RegExs(motivo, 1))) return;
                return true;
            }

            function estaVacio(value) {
                return value === "" || value == "" || value === '' || value == '' ? true : false;
            }

            function verificarVacio(field) {
                if (estaVacio(field.value.trim())) {
                    swal({
                        title: "¡ATENCIÓN!",
                        text: "¡Ningún campo debe de permanecer vacio!.",
                        icon: "warning",
                        timer: 2000,
                        closeOnClickOutside: false,
                        button: false,
                        closeOnEsc: true,
                    });
                    return true;
                } else {
                    return false;
                }
            }
            //Verifica que ningún campo tenga menos de 2 carácteres ni más de 30 carácteres.
            function MinMax(value) {
                return value.length <= 2 || value.length >= 40 ? true : false;
            }
            //Muestra mensaje de la funcion MinMax
            function Tamanos(field) {
                if (MinMax(field.value)) {
                    swal({
                        title: "¡ATENCIÓN!",
                        text: "¡Nigún campo debe de tener menos de 2 carácteres ni más de 40!.",
                        icon: "warning",
                        timer: 3000,
                        closeOnClickOutside: false,
                        button: false,
                        closeOnEsc: false,
                    });
                    return true;
                }
                return false;
            }
            //Letras minusculas, mayusculas, acentuadas y numeros.
            function RegExs(field, caso) {
                let regEx;
                switch (caso) {
                    case 1:
                        /*
                        Acentos:
                        \u00E0-\u00FC
                        Dieresis/Eñe:
                        \u00f1\u00d1
                        */
                        regEx = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0-\u00FC]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0-\u00FC]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0-\u00FC]+$/;
                        return CoincidirLetRegEx(regEx, field);
                    case 2:
                        //CORREO ELECTRÓNICO PERSONAL Y DE TRABAJO
                        regEx = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])$/;
                        return CoincidirCorreosRegEx(regEx, field);
                    case 3:
                        //NUMEROS TELEFÓNICOS
                        regEx = /^([0-9]{1,3})+([0-9]{1,4})+([0-9]{1,4})+$/;
                        return CoincidirNumTelRegEx(regEx, field);

                    default:
                        return false;
                }
            }

            function CoincidirLetRegEx(regEx, field) {

                if (field.value.match(regEx)) {
                    return true;
                } else {
                    swal({
                        title: "¡ATENCIÓN!",
                        text: "Los campos: NOMBRE Y MOTIVO DE MENSAJE, únicamente aceptan letras con acentos. Favor de abstenerse de ingrersar carácteres especiales",
                        icon: "warning",
                        timer: 5000,
                        closeOnClickOutside: false,
                        button: false,
                        closeOnEsc: false,
                    });
                    return false;
                }
            }

            function CoincidirCorreosRegEx(regEx, field) {
                if (field.value.match(regEx)) {
                    return true;
                } else {
                    swal({
                        title: "¡ATENCIÓN!",
                        text: "Su correo tienen un formato incorrecto. Favor de verificar.",
                        icon: "warning",
                        timer: 3000,
                        closeOnClickOutside: false,
                        button: false,
                        closeOnEsc: false,
                    });
                    return false;
                }
            }

            function CoincidirNumTelRegEx(regEx, field) {
                if (field.value.match(regEx)) {
                    return true;
                } else {
                    swal({
                        title: "¡ATENCIÓN!",
                        text: "Recuerde que la nueva marcación empieza con 55.\n" + "Favor de verifica su numero telefónico.",
                        icon: "warning",
                        timer: 3000,
                        closeOnClickOutside: false,
                        button: false,
                        closeOnEsc: false,
                    });
                    return false;
                }
            }

        });
    });
}();