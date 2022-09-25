$("#applicationFormSubmit").on("click", function(event) {
    event.preventDefault();
    var dataFromForm = $('#applicationForm');
    var formData = new FormData(dataFromForm[0]);
    var files = dataFromForm.find("#file")[0].files;
    $.each(files, function() {
        var file = $(this);
        formData.append(file[0].name, file[0]);
    });

    // -------------------------------------------
    // for your information:
    // this is the format of what we are sending over
    // -------------------------------------------
    // $("h1 span").append(dataFromForm + "<br>");
    // -------------------------------------------

    $.ajax({
        type: "POST",
        data: formData,
        url: "/save-application",
        contentType: false,
        processData: false,
        success: function(data) {
            window.location.replace("/login");
        },
        error: function(data) {
            alert("Something went wrong");
        }
   });
});