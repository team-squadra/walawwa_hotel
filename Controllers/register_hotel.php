<?php

if(isset($_POST['upload'])){

    $name = $_POST['uname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $location = $_POST['location'];
    $pool = $_POST['pool'];
    $wifi = $_POST['wifi'];
    $parking = $_POST['parking'];
    $spa = $_POST['spa'];
    $bar = $_POST['bar'];
    $description = $_POST['description'];

    //Image upload 
    $target_file = basename($_FILES["imagefile"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
      // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['imagefile']['tmp_name']) );
    
    }


    // Display the output 

    //The data to send to the API
    $postData = array(
        'name' => $name,
        'phone_number' => $phone_number,
        'email' => $email,
        'hotelImage' => $image_base64,
        'location' => $location,
        'pool' => $pool,
        'wifi' => $wifi,
        'parking' => $parking,
        'spa' => $spa,
        'bar' => $bar,
        'description' => $description
    );

    // Setup cURL
    $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/hotels/reghotel');
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
    echo $responseData['hotel'];
}
?>

