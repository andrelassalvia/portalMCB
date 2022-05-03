$(function () {
    // //////////////////////////////////////////
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

    // Create search field to orders table
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

    /////////////////////////////////////////////////////// //
    // LAUNCH CLIENT MODEL
    $("#tableLastContacts tr:not(:first) td:not(:last-child)").on(
        "click",
        function (e) {
            e.preventDefault;

            // capture client id
            let id = $(this).attr("data-nome");

            // show modal
            $("#clientDetailsModal").modal("show");

            // Hide client Modal Card and save button
            $("#clientModalCard, #clientModalSaveComment").hide();

            // remove previous modal title and comments
            $(".modal-body p, #clientDetailsModalTitle").remove();

            // show new comment button
            $("#clientModalNewComment").show();

            // Input hidden client on new comment form
            const hiddenId = `
                    <input type="hidden" name="cliente_id" value="${id}">
                    `;
            // Insert current day in a form comment
            var currentdate = new Date();
            var datetime =
                currentdate.getFullYear() +
                "/" +
                (currentdate.getMonth() + 1) +
                "/" +
                currentdate.getDate() +
                " " +
                currentdate.getHours() +
                ":" +
                currentdate.getMinutes() +
                ":" +
                currentdate.getSeconds();

            const date = `
                    <input type="hidden" name="created_at" value="${datetime}">
                    `;

            $("#clientModalCard form").append([hiddenId, date]);

            // define routes array
            const urlsClientComments = [
                "http://localhost:8000/clientes/cards/",
                "http://192.168.1.85:8000/clientes/cards/",
            ];

            // ajax to retrieve a modal with comments and client's name
            $.each(urlsClientComments, function (i, u) {
                $.ajax(u + id, {
                    type: "get",
                    dataType: "json",
                    success: function (response) {
                        const message = response.slice(0, 1);
                        const headerName = response.slice(1, 2);

                        $.each(message, function (i, v) {
                            $.each(v, function (index, value) {
                                const comment = `
                                        <p><span><b>${value.created_at}: </b></span>  ${value.comentario}</p>
                                      `;
                                $("#clientDetailsModal .modal-body").append(
                                    comment
                                );
                            });
                        });
                        const hn = `
                                    <h5 class="modal-title" id="clientDetailsModalTitle">${headerName[0].nome}</h5>
                                `;
                        $("#clientModalHeader").prepend(hn);
                    },
                    error: function (err) {},
                });
            });
        }
    );
    // Script to redirect click on an OS to edit page
    $("#tableOrders tr:not(:first) td:not(:last-child)").on(
        "click",
        function (e) {
            e.preventDefault;
            // capture client id
            let id = $(this).attr("data-nome");
            window.location.href = "/ordens/" + id + "/edit";
        }
    );

    // CREATE A NEW COMMENT
    $("#clientModalNewComment").on("click", function () {
        // show input field
        $("#clientModalCard").show();

        // swap button
        $(this).hide();
        $("#clientModalSaveComment").show();

        // place cursor on input field
        $("#inputComment").trigger("focus");
    });

    // Save new comment
    $("#clientModalSaveComment").on("click", function () {
        const formValues = $("#clientModalCard form").serialize();
        console.log(formValues);
        $.ajax($("#clientModalCard form").attr("action"), {
            method: $("#clientModalCard form").attr("method"),
            data: formValues,
            success: function (response) {
                // reload modal with the new comment
                response == true ? $(location.reload()) : false;
            },
            error: function (err) {},
        });
    });
});
