<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION['email']);
unset($_SESSION['file']);
unset($_SESSION['phone']);

if (isset($_POST['upload'])) {

    $name = $_POST['uname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];

    //Image upload 
    $target_file = basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Convert to base64 
        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));

        echo $image_base64;
        echo "<br>";

    }

    //The data to send to the API
    $postData = array(
        'name' => $name,
        'phone_number' => $phone_number,
        'email' => $email,
        'hotelImage' => $image_base64
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

    // Check for errors
    if ($response === FALSE) {
        die(curl_error($ch));
        echo 'Dead';
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);

    // Print the date from the response
    echo $responseData['hotel'];
}
?>