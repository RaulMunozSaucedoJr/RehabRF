! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            swal({
                icon: "warning",
                title: "Estimado paciente",
                text: "Se le recuerda que para ser acreedor del servicio es necesario cumplir con los protocólos de sanidad impuestos por la Secretaría de Salud Pública.",
                timer: 8000,
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
            });
        } else {
            swal({
                icon: "warning",
                title: "Estimado paciente",
                text: "Se le recuerda que para ser acreedor del servicio es necesario cumplir con los protocólos de sanidad impuestos por la Secretaría de Salud Pública.",
                timer: 8000,
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
            });
        }

        AOS.init();

    })
}();