<?php

if(isset($_POST['upload'])){

    $user_name = 'Hishan Kavishka';
    $hotel_name = $_POST['hotel_name'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $rooms = $_POST['rooms'];
    $adaults = $_POST['adaults'];
    $childrens = $_POST['childrens'];

    // $hotelImage = $_POST['spa'];


    //Image upload 
    // $target_file = basename($_FILES["imagefile"]["name"]);

    // // Select file type
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // // Valid file extensions
    // $extensions_arr = array("jpg","jpeg","png","gif");
  
    // // Check extension
    // if( in_array($imageFileType,$extensions_arr) ){
   
    //   // Convert to base64 
    //   $image_base64 = base64_encode(file_get_contents($_FILES['imagefile']['tmp_name']) );
    
    // }


    // Display the output 

    //The data to send to the API
    $postData = array(
        'user_name' => $user_name,
        'hotel_name' => $hotel_name,
        'check_in' => $check_in,
        'check_out' => $check_out,
        'rooms' => $rooms,
        'adaults' => $adaults,
        'childrens' => $childrens
        // 'hotelImage' => $hotelImage
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

