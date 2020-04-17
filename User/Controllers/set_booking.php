<?php

session_start();
$uname= $_SESSION["name"];

if(isset($_POST['upload'])){

    $user_name = $uname;
    $hotel_name = $_POST['hotel_name'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $rooms = $_POST['rooms'];
    $adaults = $_POST['adaults'];
    $childrens = $_POST['childrens'];


    function writeMsg($hotel_name) {

            //The data to send to the API
            $postData = array(
                'name' => $hotel_name
            );

            $ch = curl_init( 'https://mighty-inlet-78383.herokuapp.com/api/hotels/nmselectedhotel');
            curl_setopt_array($ch, array(
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
                CURLOPT_POSTFIELDS => json_encode($postData)
            ));

            // Send the request
            $response = curl_exec($ch);
            // Check for errors
            if($response === FALSE){
                die(curl_error($ch));
                echo 'No responce';
            }

            // Decode the response
            $responseData = json_decode($response, true);
            return $responseData[0]['hotelImage'];
    }

    $hotelImage = writeMsg($hotel_name);

    //The data to send to the API
    $postData = array(
        'user_name' => $user_name,
        'hotel_name' => $hotel_name,
        'check_in' => $check_in,
        'check_out' => $check_out,
        'rooms' => $rooms,
        'adaults' => $adaults,
        'childrens' => $childrens,
        'hotelImage' => $hotelImage
    );

    // Setup cURL
    $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/bookings/regbooking');
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    // Send the request
    $response = curl_exec($ch);

    // Check for errors
    if ($response === FALSE) {
        die(curl_error($ch));
        echo 'Connection error';
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);

    // Print the date from the response
    $bookingid = $responseData['booking'];
    if($bookingid == ""){
        echo 'Not a valid request';
    }
    else{
        header("Location: ../Hotelbooking.php");
    }
}
?>

