<?php

if (isset($_SESSION["name"])) {
    
    // The data to send to the API
    $postData = array(
        'hotel_name' => $_SESSION["name"]
    );

    // Setup cURL
    $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/bookings/getbooking');
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
    
} else {
    echo "not found";
}