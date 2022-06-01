$(function () {
    // when click button to insert a new occupation
    $("#plusButton").on("click", function (e) {
        // show modal to input the new occupation
        $("#occupationModal").modal("show").offset({ top: 200 });

        // Submit occupation form
        $("#btn-occupation-create").on("click", function () {
            $("#occupation-form-create").trigger("submit");
        });
        // cancel button
        $("#btn-occupation-dismiss").on("click", function () {
            $("#occupationModal").modal("hide").offset({ top: -200 });
        });
    });
});
