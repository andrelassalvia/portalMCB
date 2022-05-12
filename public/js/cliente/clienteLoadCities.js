// Script para recuperar old estado e cidade - validacao falhar
$(function () {
    const urlsLoadCidades = [
        "http://192.168.1.85:8000/clientes/load_cidades/",
        "http://localhost:8000/clientes/load_cidades/",
    ];

    let estadoId = "";

    $("#estado_brasil").on("change", function () {
        estadoId = $(this).val();
        $.each(urlsLoadCidades, function (i, u) {
            $.ajax(u + estadoId, {
                success: function (response) {
                    $("#cidade_brasil").html(response);
                },
            });
        });
    });
});
