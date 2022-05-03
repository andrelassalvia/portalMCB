$(function () {
    // Find order to bind it status with the step progress bar
    const urlshowOrder = [
        "http://localhost:8000/ordens/",
        "http://192.168.1.85:8000/ordens/",
    ];
    $.each(urlshowOrder, function (i, u) {
        const orderId = $("#orderId").attr("data-orderId");
        let currentActive;
        $.ajax(u + orderId, {
            dataType: "json",
            method: "get",
            success: function (response) {
                response.statusordem_id != null
                    ? (currentActive = response.statusordem_id)
                    : (currentActive = 1);

                const progress = document.getElementById("progress");
                const prev = document.getElementById("prev");
                const next = document.getElementById("next");
                const circles = document.querySelectorAll(".circle");

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

                // update step progress bar
                updateCircles();

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

                // insert or withdraw the class "active" on circle dependind wich button was pressed
                // update status OS in database
                const update = function () {
                    updateCircles();
                    // customize the "active" class
                    const actives = document.querySelectorAll(".active");

                    // define the extension colored bar
                    progress.style.width =
                        ((actives.length - 1) / (circles.length - 1)) * 100 +
                        "%";

                    const status = `
                            <input type="hidden" name="statusordem_id" value="${currentActive}">
                            `;

                    $("#updateStatus").append(status);
                    const dataValues = $("#updateStatus").serialize();

                    $.ajax($("#updateStatus").attr("action"), {
                        data: dataValues,
                        method: $("#updateStatus").attr("method"),
                        success: function (response) {
                            response == true ? $(location.reload()) : false;
                        },
                        error: function (err) {
                            console.log(err);
                        },
                    });
                };
            },
            error: function (err) {
                console.log(err);
            },
        });
    });
});
