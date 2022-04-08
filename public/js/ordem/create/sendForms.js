$(function () {
    $("#submitButton").click(function () {
        $(".formUpdate").each(function () {
            values = $(this).serialize();
            $.ajax($(this).attr("action"), {
                method: $(this).attr("method"),
                data: values,
                success: function (response) {
                    if (response) {
                        window.location.href = "/home";
                    }
                },
            });
        });
    });
});
