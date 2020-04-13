function login_check() {
    var lg_email_id_val = document.getElementById("lg_email_id").value;
    var lg_password_id_val = document.getElementById("lg_password_id").value;
    document.getElementById("login_err_lbl").innerHTML = "";

    if (lg_email_id_val == "") {
        document.getElementById("login_submit").innerHTML = "login";
        document.getElementById("login_err_lbl").innerHTML = "Email is reqired !";
        document.getElementById("login_loading_bar").classList.remove("progress");

    } else if (lg_password_id_val == "") {
        document.getElementById("login_submit").innerHTML = "login";
        document.getElementById("login_err_lbl").innerHTML = "Password is reqired !";
        document.getElementById("login_loading_bar").classList.remove("progress");
    } else {

        $.ajax({
            type: 'POST',
            url: 'Controllers/php_login.php?login=true',
            data: $("#login_form").serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#login_submit").html("Wait........");
                $(".show-progress").addClass('progress');
            },
            success: function(feedback) {
                if (feedback['error'] == 'success') {
                    location = feedback['msg'];
                } else if (feedback['error'] == 'no_password') {

                    $("#login_err_lbl").html(feedback['msg']);
                    $(".show-progress").removeClass('progress');
                    $("#login_submit").html("login");

                } else {

                }
            }
        })
    }

}