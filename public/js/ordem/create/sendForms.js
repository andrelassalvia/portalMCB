$(function () {
    $("#submitButton").click(function () {
        $(".formUpdate").each(function () {
            values = $(this).serialize();
            // console.log(values);
            // console.log($(this).attr("method"));
            $.ajax($(this).attr("action"), {
                method: $(this).attr("method"),
                data: values,
                success: function (response) {
                    console.log(response);
                    for (const value in response) {
                        const element = response[value];
                        const message = element.message;
                        const msg = "<p>" + message + "</p>";

                        $("#message .col-9").append(msg);
                        $("#message").modal("show");
                        $("#btn-success-message").click(function () {
                            window.location.href = "/home";
                        });
                    }
                },
                error: function (response) {
                    console.log(response);
                },
            });
        });
    });
});
