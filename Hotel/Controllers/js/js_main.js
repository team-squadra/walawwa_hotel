loadingfun();

function loadingfun() {
    var hotel_pool_input_val = document.getElementById("hotel_pool_input").value;
    var hotel_parking_input_val = document.getElementById("hotel_parking_input").value;
    var hotel_spa_input_val = document.getElementById("hotel_spa_input").value;
    var hotel_bar_input_val = document.getElementById("hotel_bar_input").value;
    var hotel_wifi_input_val = document.getElementById("hotel_wifi_input").value;

    toggle_hotel_pool(hotel_pool_input_val);
    toggle_hotel_parking(hotel_parking_input_val);
    toggle_hotel_spa(hotel_spa_input_val);
    toggle_hotel_bar(hotel_bar_input_val);
    toggle_hotel_wifi(hotel_wifi_input_val);

}


function toggle_hotel_pool(xx) {
    if (xx == 1) {
        document.getElementById("pool_ava").style.display = "inline";
        document.getElementById("pool_notava").style.display = "none";
        document.getElementById("hotel_pool_input").value = 1;
    } else {
        document.getElementById("pool_ava").style.display = "none";
        document.getElementById("pool_notava").style.display = "inline";
        document.getElementById("hotel_pool_input").value = 0;
    }
}

function toggle_hotel_parking(xx) {
    if (xx == 1) {
        document.getElementById("parking_ava").style.display = "inline";
        document.getElementById("parking_notava").style.display = "none";
        document.getElementById("hotel_parking_input").value = 1;
    } else {
        document.getElementById("parking_ava").style.display = "none";
        document.getElementById("parking_notava").style.display = "inline";
        document.getElementById("hotel_parking_input").value = 0;
    }
}

function toggle_hotel_spa(xx) {
    if (xx == 1) {
        document.getElementById("spa_ava").style.display = "inline";
        document.getElementById("spa_notava").style.display = "none";
        document.getElementById("hotel_spa_input").value = 1;
    } else {
        document.getElementById("spa_ava").style.display = "none";
        document.getElementById("spa_notava").style.display = "inline";
        document.getElementById("hotel_spa_input").value = 0;
    }
}

function toggle_hotel_bar(xx) {
    if (xx == 1) {
        document.getElementById("bar_ava").style.display = "inline";
        document.getElementById("bar_notava").style.display = "none";
        document.getElementById("hotel_bar_input").value = 1;
    } else {
        document.getElementById("bar_ava").style.display = "none";
        document.getElementById("bar_notava").style.display = "inline";
        document.getElementById("hotel_bar_input").value = 0;
    }
}

function toggle_hotel_wifi(xx) {
    if (xx == 1) {
        document.getElementById("wifi_ava").style.display = "inline";
        document.getElementById("wifi_notava").style.display = "none";
        document.getElementById("hotel_wifi_input").value = 1;
    } else {
        document.getElementById("wifi_ava").style.display = "none";
        document.getElementById("wifi_notava").style.display = "inline";
        document.getElementById("hotel_wifi_input").value = 0;
    }
}

function switch_to_edit() {
    document.getElementById("profile_details_view").style.display = "none";
    document.getElementById("profile_details_input").style.display = "block";
}

function update_profile() {

    $.ajax({
        type: 'POST',
        url: 'Controllers/php/php_updateProfile.php?update=true',
        data: $("#profile_form").serialize(),
        dataType: "JSON",
        beforeSend: function() {
            $("#update_profile_btn").html("Wait........");
            $(".show-progress").addClass('progress');
            $("#update_profile_btn").attr("disabled", true);
        },
        success: function(feedback) {
            console.log(feedback);
            if (feedback['error'] == 'success') {
                location = feedback['msg'];
            } else if (feedback['error'] == 'error') {

                $("#update_err_lbl").html(feedback['msg']);
                $(".show-progress").removeClass('progress');
                $("#update_profile_btn").html("Save");
                $("#update_profile_btn").attr("disabled", false);

            } else {

            }
        },
        error: function(error) {
            console.log(error);
        }

    })
}