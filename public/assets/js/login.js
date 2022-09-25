$(document).ready(function() {
    $('#logout').hide()
});

$("#loginFormSubmit").on("click", function(event) {
    event.preventDefault();
    var dataFromForm = $('#loginForm').serialize();

    // -------------------------------------------
    // for your information:
    // this is the format of what we are sending over
    // -------------------------------------------
    $("h1 span").append(dataFromForm + "<br>");
    // -------------------------------------------

    $.ajax({
        type: "POST",
        data: dataFromForm,
        url: "/validate-user",
        success: function(data) {
            window.location.replace("/login");
        },
        error: function(data) {
            alert("Something went wrong");
        }
   });
});