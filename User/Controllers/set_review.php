<?php

if (isset($_POST['upload'])) {

    $name = $_POST['uname'];
    $location = $_POST['location'];
    $review = $_POST['review'];

    echo $name;

    //Image upload 
    // $target_file = basename($_FILES["img"]["name"]);

    // // Select file type
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // // Valid file extensions
    // $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // // Check extension
    // if (in_array($imageFileType, $extensions_arr)) {

    //     // Convert to base64 
    //     $image_base64 = base64_encode(file_get_contents($_FILES['img']['tmp_name']));

    // }

    //The data to send to the API
    $postData = array(
        'name' => $name,
        'location' => $location,
        'review' => $review
        // 'reviewImage' => $image_base64
    );

    // Setup cURL
    $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/review/setreview');
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
    echo $responseData['review'];

}
?>