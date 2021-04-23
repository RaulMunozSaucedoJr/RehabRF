! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        setTimeout(function() {
            $("#Mensaje__Salud").show();
            setTimeout(function() {
                $("#Mensaje__Salud").hide();
            }, 10000);
        }, 1000);

        AOS.init();

    })
}();