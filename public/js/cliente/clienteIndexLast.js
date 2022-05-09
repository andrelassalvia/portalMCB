$(function () {
    // SEARCH FIELD PAGINATION AND SHOW ENTRIES
    $("#tableLastContacts").DataTable({
        language: {
            // manage legends
            search: "_INPUT_", // remove search legend
            searchPlaceholder: "Pesquisar...", // insert placeholder
            lengthMenu: "_MENU_", // remove entries legend
        },

        // which fields will be showed
        bPaginate: true,
        bLengthChange: true,
        bFilter: true,
        bInfo: false,
        bAutoWidth: false,
    });
    var table = $("#tableLastContacts").DataTable();

    $("#tableLastContacts_filter").css({
        display: "flex",
        "justify-content": "flex-end",
    });

    // // Increase row's margin bottom
    $("#tableLastContacts_wrapper .row").css({
        "margin-bottom": "1.75rem",
    });

    // Remove table legend
    $("#tableLastContacts_wrapper .row:eq(2) div:eq(0)").remove();

    // EDIT CLIENT
    $("#tableLastContacts tbody").on("click", "tr", function (e) {
        e.preventDefault;
        var data = table.row(this).data();

        let id = data[1]; // id para ser enviado ao edit
        window.location.href = "/clientes/" + id;
    });
});
