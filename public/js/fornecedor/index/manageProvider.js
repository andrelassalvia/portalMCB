$(function () {
    //     // SUPPORT FUNCTIONS
    //     const toogleViews = function () {
    //         $("#new-OS-view, #fornecedoresIndexLista").toggle();
    //     };
    //     // MANAGE VIEWS - OS AND PROVIDERS
    //     $("#fornecedoresIndexLista").hide();
    //     $("#select-provider-button").on("click", function () {
    //         toogleViews();
    //     });
    //     // Atribuir o selecionado ao campo input
    //     $(".choose-provider-button").on("click", function () {
    //         let selectedProvider = $(this).attr("data-value");
    //         let selectedNameProvider = $(this).attr("data-name");
    //         $("#providerInput").attr("value", selectedProvider);
    //         $("#providerName").attr("value", selectedNameProvider);
    //         toogleViews();
    //     });
    //     // CREATE PROVIDER
    //     $("#fornecedorIndexInsertButton").on("click", function () {
    //         $("#providerModal").modal("show");
    //         $("#btn-fornecedor-dismiss").on("click", function () {
    //             $("#providerModal").modal("hide");
    //         });
    //     });
    //     // Clicking on save button
    //     $("#btn-fornecedor-create").on("click", function () {
    //         $("#providerModal form").trigger("submit");
    //         // values = $("#providerModal form").serialize();
    //         // $.ajax($("#providerModal form").attr("action"), {
    //         //     method: $("#providerModal form").attr("method"),
    //         //     data: values,
    //         //     // Case success retrieve message to print on the screen
    //         //     success: function (response) {
    //         //         const alertError = response.error;
    //         //         const alertSuccess = response.success;
    //         //         $("#providerAlertModal").modal("show");
    //         //         $("#providerModal").fadeOut(200);
    //         //         $("#providerAlertModal .modal-body .alert").remove();
    //         //         if (alertSuccess != undefined) {
    //         //             let successResponseMessage = `
    //         //                 <h5 class='alert alert-success'>${alertSuccess}</h5>
    //         //             `;
    //         //             $("#providerAlertModal .modal-body").append(
    //         //                 successResponseMessage
    //         //             );
    //         //             $("#btn-providerAlert-dismiss").on("click", function () {
    //         //                 $("#providerAlertModal").modal("hide");
    //         //                 $("#providerModal").modal("hide");
    //         //                 location.reload();
    //         //             });
    //         //         } else if (alertError != undefined) {
    //         //             let successResponseMessage = `
    //         //                 <h5 class='alert alert-warning'>${alertError}</h5>
    //         //             `;
    //         //             $("#providerAlertModal .modal-body").append(
    //         //                 successResponseMessage
    //         //             );
    //         //             $("#btn-providerAlert-dismiss").on("click", function () {
    //         //                 $("#providerAlertModal").modal("hide");
    //         //                 $("#providerModal").fadeIn(200);
    //         //             });
    //         //         }
    //         //     },
    //         //     // Case fail retrieve message to print on the screen
    //         //     error: function (err) {
    //         //         $("#providerAlertModal").modal("show");
    //         //         $("#providerModal").fadeOut(200);
    //         //         const validatedData = err.responseJSON.errors;
    //         //         for (const key in validatedData) {
    //         //             const element = validatedData[key];
    //         //             const alertMessage = element[0];
    //         //             const alertWarning = `
    //         //                 <h5 class='alert alert-warning'>${alertMessage}</h5>
    //         //             `;
    //         //             $("#providerAlertModal .modal-body").append(alertWarning);
    //         //         }
    //         //         $("#btn-providerAlert-dismiss").on("click", function () {
    //         //             $("#providerAlertModal").modal("hide");
    //         //             $("#providerModal").fadeIn(200);
    //         //         });
    //         //     },
    //         // });
    //     });
    //     // Search register in table
    //     $("#fornecedoresTable").DataTable({
    //         language: {
    //             // manage legends
    //             search: "_INPUT_", // remove search legend
    //             searchPlaceholder: "Pesquisar...", // insert placeholder
    //             lengthMenu: "_MENU_", // remove entries legend
    //         },
    //         // which fields will be showed
    //         bPaginate: true,
    //         bLengthChange: true,
    //         bFilter: true,
    //         bInfo: false,
    //         bAutoWidth: false,
    //     });
    //     $("#fornecedoresTable_filter").css({
    //         display: "flex",
    //         "justify-content": "flex-end",
    //     });
    //     // // Increase row's margin bottom
    //     $("#fornecedoresTable_wrapper .row").css({
    //         "margin-bottom": "1.75rem",
    //     });
    //     // Remove table legend
    //     $("#fornecedoresTable_wrapper .row:eq(2) div:eq(0)").remove();
});
