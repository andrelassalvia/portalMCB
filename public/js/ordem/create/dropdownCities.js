$(document).ready(function () {
    var estadoCadastrado = $("#estado_brasil").val();
    var idCadastrado = $(this).find("input[data-id]").data("id");
    if (typeof estadoCadastrado != undefined) {
        var urlsCards = [
            "http://localhost:8000/clientes/cards/",
            "http://192.168.1.85:8000/clientes/cards/",
        ];

        var urlsCidadesBrasil = [
            "http://localhost:8000/cidadesBrasil/",
            "http://192.168.1.85:8000/cidadesBrasil/",
        ];

        var urlsLoadCidades = [
            "http://192.168.1.85:8000/clientes/load_cidades/",
            "http://localhost:8000/clientes/load_cidades/",
        ];

        var urlsLoadCities = [
            "http://localhost:8000/clientes/load_cities/",
            "http://192.168.1.85:8000/clientes/load_cities/",
        ];

        // AJAX
        $.each(urlsCards, function (i, u) {
            $.ajax(u + idCadastrado, {
                type: "get",
                dataType: "json",
                success: function (response) {
                    if (response.cidadebrasil_id != null) {
                        var cidadebrasilId = response.cidadebrasil_id;

                        $.each(urlsCidadesBrasil, function (i, u) {
                            $.ajax(u + cidadebrasilId, {
                                // url:"http://localhost:8000/cidadesBrasil/"+cidadebrasilId,
                                type: "get",
                                dataType: "json",
                                success: function (response) {
                                    // empty dropdown
                                    $("#cidade_brasil").find("option").remove();
                                    var cidadebrasilNome = response.nome;
                                    var option =
                                        "<option value='" +
                                        cidadebrasilId +
                                        "'>" +
                                        cidadebrasilNome +
                                        "</option>";
                                    $("#cidade_brasil").append(option);
                                },
                            });
                        });
                    }
                },
            });
        });
    }

    $("#estado_brasil").change(function () {
        var estado = $(this).val();

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

    $("#pais_id").change(function () {
        var country = $(this).val();

        // empty dropdown
        $("#cidade").find("option").not(":first").remove();

        // AJAX
        $.each(urlsLoadCities, function (i, u) {
            $.ajax(u + country, {
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
                            $("#cidade").append(option);
                        }
                    }
                },
            });
        });
    });
});
