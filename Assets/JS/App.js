! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        !(function () {
            "use strict";
            window.addEventListener(
              "load",
              function () {
                var t = document.getElementsByClassName("needs-validation");
                Array.prototype.filter.call(t, function (t) {
                  t.addEventListener(
                    "submit",
                    function (e) {
                      !1 === t.checkValidity() &&
                        (e.preventDefault(), e.stopPropagation()),
                        t.classList.add("was-validated");
                    },
                    !1
                  );
                });
              },
              !1
            );
          })();

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            swal({
                icon: "warning",
                title: "Estimado paciente",
                text: "Se le recuerda que para ser acreedor del servicio es necesario cumplir con los protocólos de salubridad impuestos por la Secretaría de Salud Pública.",
                timer: 8000,
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
            });
        } else {
            swal({
                icon: "warning",
                title: "Estimado paciente",
                text: "Se le recuerda que para ser acreedor del servicio es necesario cumplir con los protocólos de salubridad impuestos por la Secretaría de Salud Pública.",
                timer: 8000,
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
            });
        }

        AOS.init();

    })
}();