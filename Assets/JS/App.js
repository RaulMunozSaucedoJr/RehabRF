! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        setTimeout(function() {
            $("#Mensaje__Salud").show();
            setTimeout(function() {
                $("#Mensaje__Salud").hide();
            }, 10000);
        }, 1000);


        const e = document.getElementById("formulario"),
            t = document.getElementById("nombre"),
            n = document.getElementById("correo"),
            c = document.getElementById("telefono"),
            o = document.getElementById("motivo");
        e.addEventListener("submit", function (r) {
            function i(e, t) {
                let n;
                switch (t) {
                    case 1:
                        return function (e, t) {
                            return !!t.value.match(e) || (swal({
                                title: "¡ATENCIÓN!",
                                text: "Los campos: NOMBRE Y MOTIVO DE MENSAJE, únicamente aceptan letras con acentos. Favor de abstenerse de ingrersar carácteres especiales",
                                icon: "warning",
                                timer: 5e3,
                                closeOnClickOutside: !1,
                                button: !1,
                                closeOnEsc: !1
                            }), !1)
                        }(n = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0-\u00FC]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0-\u00FC]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0-\u00FC]+$/, e);
                    case 2:
                        return function (e, t) {
                            return !!t.value.match(e) || (swal({
                                title: "¡ATENCIÓN!",
                                text: "Su correo tienen un formato incorrecto. Favor de verificar.",
                                icon: "warning",
                                timer: 3e3,
                                closeOnClickOutside: !1,
                                button: !1,
                                closeOnEsc: !1
                            }), !1)
                        }(n = /^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])$/, e);
                    case 3:
                        return function (e, t) {
                            return !!t.value.match(e) || (swal({
                                title: "¡ATENCIÓN!",
                                text: "Recuerde que la nueva marcación empieza con 55.\nFavor de verifica su numero telefónico.",
                                icon: "warning",
                                timer: 3e3,
                                closeOnClickOutside: !1,
                                button: !1,
                                closeOnEsc: !1
                            }), !1)
                        }(n = /^([0-9]{1,3})+([0-9]{1,4})+([0-9]{1,4})+$/, e);
                    default:
                        return !1
                }
            }
            r.preventDefault(),
                function () {
                    if (e = t && n && c && o, r = e.value.trim(), ("" === r || "" == r || "" === r || "" == r) && (swal({
                            title: "¡ATENCIÓN!",
                            text: "¡Ningún campo debe de permanecer vacio!.",
                            icon: "warning",
                            timer: 2e3,
                            closeOnClickOutside: !1,
                            button: !1,
                            closeOnEsc: !0
                        }), 1) || function (e) {
                            if (t = e.value, t.length <= 2 || t.length >= 40) return swal({
                                title: "¡ATENCIÓN!",
                                text: "¡Nigún campo debe de tener menos de 2 carácteres ni más de 40!.",
                                icon: "warning",
                                timer: 3e3,
                                closeOnClickOutside: !1,
                                button: !1,
                                closeOnEsc: !1
                            }), !0;
                            var t;
                            return !1
                        }(t && n && c && o) || !i(t, 1) || !i(n, 2) || !i(c, 3) || !i(o, 1)) return;
                    var e, r;
                    return !0
                }() && (swal({
                    icon: "success",
                    title: "¡Correo Enviado!",
                    text: "A la brevedad nos comunicaremos con usted",
                    timer: 5e3,
                    button: !1,
                    closeOnClickOutside: !1,
                    closeOnEsc: !1
                }), e.reset())
        })
    })
}();