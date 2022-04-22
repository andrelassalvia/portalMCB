$(function () {
    // when click button to insert a new occupation
    $("#plusButton").on("click", function (e) {
        console.log(e);
        // show modal to input the new occupation
        $("#occupationModal").modal("show").offset({ top: 200 });

        // logic to create a new register
        $("#btn-occupation-create").on("click", function () {
            occupationFormData = $("#occupation-form-create").serialize();
            occupationFormMethod = $("#occupation-form-create").attr("method");

            $.ajax($("#occupation-form-create").attr("action"), {
                method: occupationFormMethod,
                data: occupationFormData,
                success: function (response) {
                    if (response.error) {
                        // if error show alert message
                        const message = `<div class='modal-header'>
                                <h6 class='alert alert-warning'> 
                            ${response.error} 
                            </h6>
                            </div>`;
                        $("#occupationModal .modal-content").prepend(message);
                    } else {
                        // if ok save and reload page to load dropdown properly
                        location.reload();
                    }
                },
                error: function (response) {
                    console.log(response);
                },
            });
        });
        // cancel button
        $("#btn-occupation-dismiss").on("click", function () {
            $("#occupationModal").modal("hide");
        });
    });
});
