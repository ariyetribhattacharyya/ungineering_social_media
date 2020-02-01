$(document).ready(function () {
    $('#editprofile').submit(function() {
        var url = "editprofile_submit.php";
        var data = $('#editprofile').serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: registration_success,
            error: on_error
        });
        return false;
    });
});
var registration_success = function (response) {
    response = JSON.parse(response);
    alert(response.message);
};
var on_error = function () {
    alert("something went wrong");
};
