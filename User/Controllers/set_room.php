<?php

if(isset($_POST['upload'])){

    $hotel_name = $_POST['hotel_name'];
    $roomtype = $_POST['roomtype'];
    $room_capacity = $_POST['room_capacity'];
    $ac = $_POST['ac'];
    $tv = $_POST['tv'];
    $minibar = $_POST['minibar'];
    $wardrobe = $_POST['wardrobe'];
    $safe = $_POST['safe'];
    $soundproof = $_POST['soundproof'];
    $bathroom = $_POST['bathroom'];
    $rmprice = $_POST['rmprice'];
    $view = $_POST['view'];


    //The data to send to the API
    $postData = array(
        'hotel_name' => $hotel_name,
        'roomtype' => $roomtype,
        'room_capacity' => $room_capacity,
        'ac' => $ac,
        'tv' => $tv,
        'minibar' => $minibar,
        'wardrobe' => $wardrobe,
        'safe' => $safe,
        'soundproof' => $soundproof,
        'bathroom' => $bathroom,
        'rmprice' => $rmprice,
        'view' => $view
    );

    // Setup cURL
    $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/rooms/regroom');
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
    echo $response;
    echo "<br>";

    // Check for errors
    if ($response === FALSE) {
        die(curl_error($ch));
        echo 'Connection error';
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);

    // Print the date from the response
    echo $responseData['room'];
}
?>

