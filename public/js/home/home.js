$(function () {
    $(document).on("click", "tr", function (e) {
        e.preventDefault;
        var id = $(this).find("td[data-nome]").data("nome");

        $(".card-body").find("h5").remove();
        $(".card-body").find("p").remove();

        $.ajax({
            url: "http://192.168.1.85:8000/clientes/cards/" + id,
            type: "get",
            dataType: "json",
            timeout: 5000,
            success: function (response) {
                if (response.nome !== undefined) {
                    var name = response.nome;
                    var comments = response.comentario;
                    var h5 = "<h5 class='card-title'>" + name + "</h5>";
                    var p = "<p class='card-text'>" + comments + "</p>";
                    $(".card-body").append(h5);
                    $(".card-body").append(p);
                }
            },
        });
        $.ajax({
            url: "http://localhost:8000/clientes/cards/" + id,
            type: "get",
            dataType: "json",
            timeout: 5000,
            success: function (response) {
                if (response.nome !== undefined) {
                    var name = response.nome;
                    var comments = response.comentario;
                    var h5 = "<h5 class='card-title'>" + name + "</h5>";
                    var p = "<p class='card-text'>" + comments + "</p>";
                    $(".card-body").append(h5);
                    $(".card-body").append(p);
                }
            },
        });
    });

    // Create search field to last contacts table
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

    // Create search field to lorders table
    $("#tableOrders").DataTable({
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

    $("#tableOrders_filter").css({
        display: "flex",
        "justify-content": "flex-end",
    });

    // // Increase row's margin bottom
    $("#tableOrders_wrapper .row").css({
        "margin-bottom": "1.75rem",
    });

    // Remove table legend
    $("#tableOrders_wrapper .row:eq(2) div:eq(0)").remove();
});
