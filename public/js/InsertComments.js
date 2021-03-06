// Script to create e show a comment
$(function () {
    const urlsClientComments = [
        "http://localhost:8000/comentarios/cards/",
        "http://192.168.1.85:8000/comentarios/cards/",
    ];

    // save id got from data-id
    const id = $("#clientId").attr("data-id");

    // SHOW COMMENTS
    $.each(urlsClientComments, function (i, u) {
        $.ajax(u + id, {
            type: "get",
            dataType: "json",
            accepts: "application/json",
            success: function (response) {
                const message = response.slice(0, 1);
                $.each(message, function (i, v) {
                    $.each(v, function (idx, value) {
                        const comment = `
                        <p class="fs-5"><span class="text-sm me-2">${value.created_at}:</span>${value.comentario}</p>
                  `;
                        $("#commentClientBody").append(comment);
                    });
                });
            },
        });
    });

    // CREATE A NEW COMMENT
    $("#clientModalNewComment").on("click", function () {
        // create form to input comment
        const form = `                  
        <input type="text" class="form-control" id="inputComment" name="comentario">
      `;

        // create save button
        const saveButton = `<button 
      type="button" 
      class="btn btn-mcb" 
      id="clientModalSaveComment"
    >
      Salvar
    </button>`;

        // append form and button
        $("#formInputComment").append(form);
        $("#commentClientFooter").append(saveButton);

        // Hide "Inserir Comentario" button
        $(this).hide();

        // place cursor on input field
        $("#inputComment").trigger("focus");

        // Save new comment
        $("#clientModalSaveComment").on("click", function () {
            const hiddenId = `
            <input type="hidden" name="cliente_id" value="${id}">
            `;
            // Insert current day in a form comment
            var currentdate = new Date();
            var datetime =
                currentdate.getFullYear() +
                "/" +
                (currentdate.getMonth() + 1) +
                "/" +
                currentdate.getDate() +
                " " +
                currentdate.getHours() +
                ":" +
                currentdate.getMinutes() +
                ":" +
                currentdate.getSeconds();

            const date = `
            <input type="hidden" name="created_at" value="${datetime}">
            `;

            // Append cliente_id and date in the form
            $("#clientModalCard form").append([hiddenId, date]);
            const formValues = $("#clientModalCard form").serialize();

            $.ajax($("#clientModalCard form").attr("action"), {
                method: $("#clientModalCard form").attr("method"),
                accepts: "application/json",
                data: formValues,
                success: function (response) {
                    // reload modal with the new comment
                    response == true ? $(location.reload()) : false;
                },
                error: function (err) {},
            });
        });
    });
});
