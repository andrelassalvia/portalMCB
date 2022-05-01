$(function () {
    // WATCH ANY CHANGE ON STATE
    const urlsLoadCidades = [
        "http://192.168.1.85:8000/clientes/load_cidades/",
        "http://localhost:8000/clientes/load_cidades/",
    ];

    $("#estado_brasil").on("change", function () {
        const estado = $(this).val();

        // empty the dropdown
        $("#cidade_brasil").find("option").not(":first").remove();

        // AJAX
        $.each(urlsLoadCidades, function (i, u) {
            $.ajax(u + estado, {
                type: "get",
                dataType: "json",
                success: function (response) {
                    var len = 0;
                    if (response != null) {
                        len = response.length;
                    }
                    if (len > 0) {
                        for (let i = 0; i < len; i++) {
                            var id = response[i].id;
                            var name = response[i].nome;
                            var option =
                                "<option value='" +
                                id +
                                "'>" +
                                name +
                                "</option>";

                            $("#cidade_brasil").append(option);
                        }
                    }
                },
            });
        });
    });

    // SEND FORM TO CLIENT CONTROLLER
    $("#submitButton").on("click", function () {
        // SUPPORT FUNCTION
        // show modal
        const showModal = function () {
            $("#alertModal").modal("show");
        };

        // shut modal
        const dismissModal = function () {
            $("#okButton").on("click", function () {
                $("#alertModal").modal("hide");
            });
        };

        // empty old messages within modal
        $("#alertModal .modal-body h5").remove();

        // Failed Modal -> in case data not saved
        const failedModal = function (msg) {
            showModal();
            let printErrorMessage = `
            <h5 class="alert alert-warning">${msg}</h5>
          `;
            $("#alertModal .modal-body").append(printErrorMessage);
            dismissModal();
        };

        // Success Modal - data saved successfully
        const succesModal = function (msg) {
            showModal();
            const printSuccessMessage = `
            <h5 class="alert alert-success">${msg}</h5>
          `;
            $("#alertModal .modal-body").append(printSuccessMessage);
            $("#okButton").on("click", function () {
                window.location.href = "/home";
            });
        };

        // send data to client controller
        const values = $("#formClientCreate").serialize();
        $.ajax($("#formClientCreate").attr("action"), {
            data: values,
            method: $("#formClientCreate").attr("method"),
            success: function (response) {
                const success = response.success;
                const errors = response.errors;
                const failed = response.errors;

                errors || failed
                    ? failedModal(errors || failed)
                    : succesModal(success);
            },

            // Validation rules
            error: function (err) {
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    const element = errors[key];
                    let errorMessage = element[0];
                    let printErrorMessage = `
                      <h5 class="alert alert-warning">${errorMessage}</h5>`;
                    $("#alertModal .modal-body").append(printErrorMessage);
                }
                showModal();
                dismissModal();
            },
        });
    });
});
