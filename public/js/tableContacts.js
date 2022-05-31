// Script to create search, number of entries per page and
// allow click on line to edit client
$(function () {
    // SEARCH FIELD PAGINATION AND SHOW ENTRIES
    $("#tableContacts").DataTable({
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
    var table = $("#tableContacts").DataTable();

    $("#tableContacts_filter").css({
        display: "flex",
        "justify-content": "flex-end",
    });

    // // Increase row's margin bottom
    $("#tableContacts_wrapper .row").css({
        "margin-bottom": "1.75rem",
    });

    // Remove table legend
    $("#tableContacts_wrapper .row:eq(2) div:eq(0)").remove();

    // EDIT CLIENT
    $("#tableContacts tbody").on("click", "tr", function (e) {
        e.preventDefault;
        var data = table.row(this).data();

        let id = data[1]; // id para ser enviado ao show
        window.location.href = "/clientes/" + id;
    });
});
