$(function () {
    // SUPPORT FUNCTIONS
    const toogleViews = function () {
        $("#new-OS-view, #fornecedoresIndexLista").toggle();
    };
    // MANAGE VIEWS - OS AND PROVIDERS
    $("#fornecedoresIndexLista").hide();
    $("#select-provider-button").on("click", function () {
        toogleViews();
    });
    $(".choose-provider-button").on("click", function () {
        let selectedProvider = $(this).attr("data-value");
        let selectedNameProvider = $(this).attr("data-name");
        $("#providerInput").attr("value", selectedProvider);
        $("#providerName").attr("value", selectedNameProvider);
        toogleViews();
    });

    // CREATE PROVIDER

    $("#fornecedorIndexInsertButton").on("click", function () {
        const urlEstado = [
            "http://localhost:8000/fornecedor/create",
            "http://192.168.1.85:8000/fornecedor/create",
        ];

        const urlsLoadCidades = [
            "http://192.168.1.85:8000/clientes/load_cidades/",
            "http://localhost:8000/clientes/load_cidades/",
        ];

        $("#providerModal").modal("show");
        $("#btn-fornecedor-dismiss").on("click", function () {
            $("#providerModal").modal("hide");
        });

        // REFAZER A INSERCAO DADOS ESTADO E CIDADES
        // Load Estado Brail dropdown
        // $.each(urlEstado, function (i, u) {
        //     $.ajax(u, {
        //         type: "get",
        //         success: function (response) {
        //             $.each(response, function (m, n) {
        //                 let option = `
        //                       <option value='${n.id}'>${n.nome}</option>
        //                  `;
        //                 $("#fornecedorCreateEstadoBrasil").append(option);
        //             });
        //         },
        //         error: function (err) {},
        //     });
        // });

        // Load Cidades Brasil dropdown
        const loadCities = function (id, url, cityId) {
            let stateId = "";
            $(id).on("change", function () {
                stateId = $(this).val();
                $.each(url, function (i, u) {
                    $.ajax(u + stateId, {
                        success: function (response) {
                            $(cityId).html(response);
                        },
                    });
                });
            });
        };
        loadCities(
            "#fornecedorCreateEstadoBrasil",
            urlsLoadCidades,
            "#cidade_brasil"
        );
        // $("#fornecedorCreateEstadoBrasil").on("change", function () {
        //     const stateLoaded = $(this).val();
        //     $.each(urlsLoadCidades, function (i, u) {
        //         $.ajax(u + stateLoaded, {
        //             type: "get",
        //             success: function (response) {
        //                 $.each(response, function (i, c) {
        //                     let option = `
        //                   <option value='${c.id}'>${c.nome}</option>
        //                 `;
        //                     $("#fornecedorCreateCidadeBrasil").append(option);
        //                 });
        //             },
        //             error: function (err) {},
        //         });
        //     });
        // });
    });

    // Clicking on save button
    $("#btn-fornecedor-create").on("click", function () {
        values = $("#providerModal form").serialize();
        $.ajax($("#providerModal form").attr("action"), {
            method: $("#providerModal form").attr("method"),
            data: values,

            // Case success retrieve message to print on the screen
            success: function (response) {
                const alertError = response.error;
                const alertSuccess = response.success;
                $("#providerAlertModal").modal("show");
                $("#providerModal").fadeOut(200);
                $("#providerAlertModal .modal-body .alert").remove();
                if (alertSuccess != undefined) {
                    let successResponseMessage = `
                        <h5 class='alert alert-success'>${alertSuccess}</h5>
                    `;

                    $("#providerAlertModal .modal-body").append(
                        successResponseMessage
                    );
                    $("#btn-providerAlert-dismiss").on("click", function () {
                        $("#providerAlertModal").modal("hide");
                        $("#providerModal").modal("hide");
                        location.reload();
                    });
                } else if (alertError != undefined) {
                    let successResponseMessage = `
                        <h5 class='alert alert-warning'>${alertError}</h5>
                    `;
                    $("#providerAlertModal .modal-body").append(
                        successResponseMessage
                    );
                    $("#btn-providerAlert-dismiss").on("click", function () {
                        $("#providerAlertModal").modal("hide");
                        $("#providerModal").fadeIn(200);
                    });
                }
            },

            // Case fail retrieve message to print on the screen
            error: function (err) {
                $("#providerAlertModal").modal("show");
                $("#providerModal").fadeOut(200);
                const validatedData = err.responseJSON.errors;
                for (const key in validatedData) {
                    const element = validatedData[key];
                    const alertMessage = element[0];
                    const alertWarning = `
                        <h5 class='alert alert-warning'>${alertMessage}</h5>
                    `;
                    $("#providerAlertModal .modal-body").append(alertWarning);
                }
                $("#btn-providerAlert-dismiss").on("click", function () {
                    $("#providerAlertModal").modal("hide");
                    $("#providerModal").fadeIn(200);
                });
            },
        });
    });

    // Search register in table
    $("#fornecedoresTable").DataTable({
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

    $("#fornecedoresTable_filter").css({
        display: "flex",
        "justify-content": "flex-end",
    });

    // // Increase row's margin bottom
    $("#fornecedoresTable_wrapper .row").css({
        "margin-bottom": "1.75rem",
    });

    // Remove table legend
    $("#fornecedoresTable_wrapper .row:eq(2) div:eq(0)").remove();
});
