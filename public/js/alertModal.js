$(function () {
    // function to redirect route
    const redirectRoute = function (button) {
        // data-route coming from modal-alert blade
        let route = $(button).data("route");
        route ? (window.location.href = route) : window.history.back();
    };
    const hide = function () {
        return $("#alertModal").modal("hide");
    };

    // When page is loaded show modal
    $(window).on("load", function () {
        $("#alertModal").modal("show");

        // case ok button is clicked
        $("#okButton").on("click", function () {
            if ($("#telefoneStore")) {
                $("#telefoneStore").trigger("submit");
                hide();
            }
            redirectRoute($(this));
        });

        // case cancel button is clicked
        $("#cancelButton").on("click", function () {
            redirectRoute($(this));
        });
    });
});
