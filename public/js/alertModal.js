$(function () {
    const hide = function () {
        return $("#alertModal").modal("hide");
    };

    $(window).on("load", function () {
        $("#alertModal").modal("show");
        $("#okButton").on("click", function () {
            if ($("#telefoneStore")) {
                $("#telefoneStore").trigger("submit");
                hide();
            }
            window.history.back();
        });
        $("#cancelButton").on("click", function () {
            // hide();
            window.location.href = "/clientes/last";
        });
    });
});
