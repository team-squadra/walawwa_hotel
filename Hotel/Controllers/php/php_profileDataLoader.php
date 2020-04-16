<?php
//
if (isset($_SESSION["email"])) {

    // The data to send to the API
    $postData = array(
        'email' => $_SESSION["email"]
    );

    // Setup cURL
    $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/hotels/selectedhotel');
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
        echo 'Dead';
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);

    $hotel_id = $responseData[0]['_id'];
    $hotel_name = $responseData[0]['name'];
    $hotel_email = $responseData[0]['email'];
    $hotel_phone_number = $responseData[0]['phone_number'];
    $hotel_location = $responseData[0]['location'];
    $hotel_description = $responseData[0]['description'];
    $hotel_hotelImage = $responseData[0]['hotelImage'];
    $hotel_pool = $responseData[0]['pool'];
    $hotel_parking = $responseData[0]['parking'];
    $hotel_spa = $responseData[0]['spa'];
    $hotel_bar = $responseData[0]['bar'];
    $hotel_wifi = $responseData[0]['wifi'];
    

} else {
    echo "not found";
}
