$(function () {
    // Find order to bind it status with the step progress bar
    const urlshowOrder = [
        "http://localhost:8000/ordens/",
        "http://192.168.1.85:8000/ordens/",
    ];
    const progress = document.getElementById("progress");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");
    const circles = document.querySelectorAll(".circle");
    let currentActive;
    let currentStar;

    const updateCircles = function () {
        circles.forEach((circle, index) => {
            if (index < currentActive - 1) {
                circle.classList.add("active");
            } else {
                circle.classList.remove("active");
            }
        });
        // Disabled buttons depending how status are
        if (currentActive === 1) {
            prev.disabled = true;
        } else if (currentActive === circles.length + 1) {
            next.disabled = true;
        } else {
            prev.disabled = false;
            next.disabled = false;
        }
    };

    const updateBars = function (actives) {
        progress.style.width =
            ((actives.length - 1) / (circles.length - 1)) * 100 + "%";
    };

    // fetch status in database
    $.each(urlshowOrder, function (i, u) {
        const orderId = $("#orderId").attr("data-orderId");
        // let currentActive;
        $.ajax(u + orderId, {
            dataType: "json",
            method: "get",
            success: function (response) {
                response.statusordem_id != null
                    ? (currentActive = response.statusordem_id)
                    : (currentActive = 1);

                // update step progress bar
                updateCircles();
                updateBars(document.querySelectorAll(".active"));
            },
            error: function (err) {
                console.log(err);
            },
        });
    });

    // Increment currentActive whenever "Avancar" is pressed
    next.addEventListener("click", () => {
        currentActive++;
        currentActive > circles.length + 1
            ? (currentActive = circles.length + 1)
            : currentActive;
        update();
    });

    // Decrement currentActive whenever "Retroceder" is pressed
    prev.addEventListener("click", () => {
        currentActive--;
        currentActive < 1 ? (currentActive = 1) : currentActive;
        update();
    });

    const update = function () {
        updateCircles();
        updateBars(document.querySelectorAll(".active"));

        // show or hide finish button
        if (currentActive >= 7) {
            $("#finish").removeClass("d-none");
        } else {
            $("#finish").addClass("d-none");
        }

        const status = `
                <input type="hidden" name="statusordem_id" value="${currentActive}">
                `;

        $("#updateStatus").append(status);
        const dataValues = $("#updateStatus").serialize();

        $.ajax($("#updateStatus").attr("action"), {
            data: dataValues,
            method: $("#updateStatus").attr("method"),
            success: function (response) {
                let status = response.statusordem_id;

                switch (status) {
                    case 1:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Autorizada a OS'
                        );
                        break;
                    case 2:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Aguardando Documentos'
                        );
                        break;
                    case 3:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Aguardando Certificação Digital'
                        );
                        break;
                    case 4:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Aguardando Revisão da Minuta'
                        );
                        break;
                    case 5:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Aguardando Video Conferência'
                        );
                        break;
                    case 6:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Aguardando Assinatura'
                        );
                        break;

                    default:
                        $("#situacao").html(
                            '<span class="text-sm me-2">Situacao:</span>Finalizada'
                        );
                        break;
                }
            },
            error: function (err) {
                console.log(err);
            },
        });
    };

    //

    // CLASSIFY SUPPLEIRS
    $("#finish").on("click", function () {
        $("#star-rate-modal").modal("show");
        $("#assessButton").on("click", function () {
            $("#star-rate-modal").modal("hide");
            window.location.href = "/home";
        });

        const stars = document.querySelectorAll(".star");

        $.each(stars, function (i, s) {
            $(s).on("click", function () {
                currentStar = i + 1;
                updateStars();
            });
        });

        // primeiro atualiza o valor de current star
        // depois atualiza o css
        // no final manda a informacao para o bd
        // vem dentro de uma funcao update
        const updateStars = function () {
            stars.forEach((star, idx) => {
                if (idx < currentStar) {
                    star.classList.add("active");
                } else {
                    star.classList.remove("active");
                }
            });
            const inputStar = `
                <input type="hidden" name="classificacao_id" value="${currentStar}">
                `;
            $("#updateAvaliation").append(inputStar);
            const dataValues = $("#updateAvaliation").serialize();
            $.ajax($("#updateAvaliation").attr("action"), {
                data: dataValues,
                method: $("#updateAvaliation").attr("method"),
                success: function (response) {},
                error: function (err) {},
            });
        };
    });
});
