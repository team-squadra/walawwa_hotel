<?php
session_start();

if (isset($_GET['update']) && $_GET['update'] == 'true'){

    if(isset($_SESSION['email'])){

        $hotel_email = $_SESSION['email'];
        $hotel_phone_number_input_atr = $_POST['hotel_phone_number_input_atr'];
        $hotel_location_input_atr = $_POST['hotel_location_input_atr'];
        $hotel_description_input_atr = $_POST['hotel_description_input_atr'];
        $hotel_pool_input_atr = $_POST['hotel_pool_input_atr'];
        $hotel_parking_input_atr = $_POST['hotel_parking_input_atr'];
        $hotel_spa_input_atr = $_POST['hotel_spa_input_atr'];
        $hotel_bar_input_atr = $_POST['hotel_bar_input_atr'];
        $hotel_wifi_input_atr = $_POST['hotel_wifi_input_atr'];

        // The data to send to the API
        $postData = array(

            'email' => $hotel_email,
            'phone_number' => $hotel_phone_number_input_atr,
            'location' => $hotel_location_input_atr,
            'description' => $hotel_description_input_atr,
            //'hotelImage' => $email
            'pool' => $hotel_pool_input_atr,
            'parking' => $hotel_parking_input_atr,
            'spa' => $hotel_spa_input_atr,
            'bar' => $hotel_bar_input_atr,
            'wifi' => $hotel_wifi_input_atr
            
        );

        // Setup cURL
        $ch = curl_init( 'https://mighty-inlet-78383.herokuapp.com/api/hotels/updatehotel');
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
            echo 'Dead';
        }

        // Decode the response
        $responseData = json_decode($response, TRUE);

        // Print the date from the response
        $function_status = $responseData['function_status'];

        if($function_status == "Success"){
            echo json_encode(['error' => 'success', 'msg' => 'profile.php']);
        }else{
            echo json_encode(['error' => 'error', 'msg' => 'Something went wrong']);
        }

        
    
    }else{
        echo json_encode(['error' => 'error', 'msg' => 'email not set']);
    }
        
}
?>