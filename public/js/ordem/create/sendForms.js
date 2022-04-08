$(function () {
    $("#submitButton").click(function () {
        $(".formUpdate").each(function () {
            values = $(this).serialize();
            $.ajax($(this).attr("action"), {
                method: $(this).attr("method"),
                data: values,
                success: function (response) {
                    console.log(response);
                },
            });
        });
        // $("#orderUpdate").submit();
    });
});

// $(function () {
//     $("#submitButton").click(function () {
//         $("#orderUpdate").submit();
//     });
// });
