$(function () {
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

        // Load Estado dropdown
        $.each(urlEstado, function (i, u) {
            $.ajax(u, {
                type: "get",
                success: function (response) {
                    $.each(response, function (m, n) {
                        let option = `
                              <option value='${n.id}'>${n.nome}</option>
                         `;
                        $("#fornecedorCreateEstadoBrasil").append(option);
                    });
                },
                error: function (err) {
                    console.log(err);
                },
            });
        });

        // Load Cidades Brasil dropdown
        $("#fornecedorCreateEstadoBrasil").on("change", function () {
            const stateLoaded = $(this).val();
            $.each(urlsLoadCidades, function (i, u) {
                $.ajax(u + stateLoaded, {
                    type: "get",
                    success: function (response) {
                        $.each(response, function (i, c) {
                            let option = `
                          <option value='${c.id}'>${c.nome}</option>  
                        `;
                            $("#fornecedorCreateCidadeBrasil").append(option);
                        });
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
            });
        });
    });
});
