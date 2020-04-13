function login_check() {
    $.ajax({
        type: 'POST',
        url: 'Controllers/php_login.php?login=true',
        data: $("#login_form").serialize(),
        dataType: "JSON",
        beforeSend: function() {
            $("#login_submit").html("Wait........");
            //$("#login_loading_bar").display("none");
            $(".show-progress").addClass('progress');
        },
        success: function(feedback) {
            if (feedback['error'] == 'success') {
                location = feedback['msg'];
            } else if (feedback['error'] == 'no_password') {

                $("#login_err_lbl").html(feedback['msg']);
                $(".show-progress").removeClass('progress');

            } else {

            }
        }
    })
}