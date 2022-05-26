$(function () {
    const hide = function () {
        return $("#alertModal").modal("hide");
    };

    // When page is loaded show modal
    $(window).on("load", function () {
        $("#alertModal").modal("show");

        // button to go back last page
        $("#okButton").on("click", function () {
            if ($("#telefoneStore")) {
                $("#telefoneStore").trigger("submit");
                hide();
            }
            window.history.back();
        });

        // button to go to index page
        $("#cancelButton").on("click", function () {
            window.location.href = "/clientes/last";
        });
    });
});
