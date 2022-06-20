$(function () {
    $("#tableContacts tbody").on("click", "tr", function (e) {
        e.preventDefault;
        // var data = $(this).data("id");
        var id = $(this).data("id");

        window.location.href = "/clientes/" + id;
    });
});
