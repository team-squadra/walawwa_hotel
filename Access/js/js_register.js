function register_check() {

    var reg_uname_val_id = document.getElementById("reg_uname_id").value;
    var reg_phone_val_id = document.getElementById("reg_phone_id").value;
    var reg_email_val_id = document.getElementById("reg_email_id").value;
    var reg_pass_val_id = document.getElementById("reg_pass_id").value;
    var reg_conpass_val_id = document.getElementById("reg_conpass_id").value;

    var atr_register_loading_bar = document.getElementById("register_loading_bar");
    var atr_register_err_lbl = document.getElementById("register_err_lbl");
    var atr_register_submit = document.getElementById("register_submit");

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    atr_register_err_lbl.innerHTML = ""; //clr err


    if (reg_uname_val_id == "") {

        atr_register_submit.innerHTML = "login";
        atr_register_err_lbl.innerHTML = "User Name is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (reg_phone_val_id == "") {

        atr_register_submit.innerHTML = "login";
        atr_register_err_lbl.innerHTML = "Phone number is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (reg_email_val_id == "") {

        atr_register_submit.innerHTML = "login";
        atr_register_err_lbl.innerHTML = "Email is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (reg_email_val_id.match(mailformat)) {

        if (reg_pass_val_id == "") {

            atr_register_submit.innerHTML = "login";
            atr_register_err_lbl.innerHTML = "Password is required !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (reg_conpass_val_id == "") {

            atr_register_submit.innerHTML = "login";
            atr_register_err_lbl.innerHTML = "Confirm your password !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (reg_conpass_val_id != reg_pass_val_id) {

            atr_register_submit.innerHTML = "login";
            atr_register_err_lbl.innerHTML = "Password Mismatch !";
            document.getElementById("reg_pass").value = "";
            document.getElementById("reg_conpass").value = "";
            atr_register_loading_bar.classList.remove("progress");

        } else {

            $.ajax({
                type: 'POST',
                url: 'Controllers/php_registration.php?registration=true',
                data: $("#register_form").serialize(),
                dataType: "JSON",
                beforeSend: function() {
                    $("#register_submit").html("Wait........");
                    $(".show-progress").addClass('progress');
                    $("#register_submit").attr("disabled", true);
                },
                success: function(feedback) {
                    console.log(feedback);
                    if (feedback['error'] == 'success') {
                        //Registration successful !
                        var r = confirm(
                            'Registration successful !\n\n' +
                            "Login now ? "
                        );
                        if (r == true) {
                            location = feedback['msg'];
                        } else {
                            location.reload();
                        }

                    } else if (feedback['error'] == 'error') {

                        $("#register_err_lbl").html(feedback['msg']);
                        $(".show-progress").removeClass('progress');
                        $("#register_submit").html("signup");
                        $("#register_submit").attr("disabled", false);

                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })

        }

    } else {

        atr_register_submit.innerHTML = "login";
        atr_register_err_lbl.innerHTML = "Invalid Email !";
        atr_register_loading_bar.classList.remove("progress");
    }



}

function clr_err() {
    document.getElementById("register_err_lbl").innerHTML = "";
}

function redirect_login() {
    window.location.replace("login.php");
}