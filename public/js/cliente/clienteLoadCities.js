// Script para recuperar old estado e cidade - validacao falhar
$(function () {
    const urlsLoadCidades = [
        "http://192.168.1.85:8000/clientes/load_cidades/",
        "http://localhost:8000/clientes/load_cidades/",
    ];

    const urlsLoadCities = [
        "http://192.168.1.85:8000/clientes/load_cities/",
        "http://localhost:8000/clientes/load_cities/",
    ];

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
    loadCities("#estado_brasil", urlsLoadCidades, "#cidade_brasil");
    loadCities("#pais", urlsLoadCities, "#cidade");
});
