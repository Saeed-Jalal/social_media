$(document).ready(function () {
    $("#signup").click(function () {
        var user_name = $("#userName").val();
        if (user_name == "") {
            $("#userName_error").html("Please Enter Your USER Name");
            return false;
        }
        if (user_name.length < 8) {
            $("#userName_error").html("USER Name Should be atleast 8 character");
            return false;
        }
        var user_password = $("#pwd").val();
        if (user_password == "") {
            $("#password_error").html("Please Enter Your Password");
            return false;
        }
        if (user_password.length < 5) {
            $("#password_error").html("PASSWORD Should be atleast 5 character");
            return false;
        }

    });
});
