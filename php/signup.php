<?php

if (isset($_POST['signup'])) {

 $email =$_POST['email'];
 $password =$_POST['pass'];
 $uname = $_POST['uname'];
 $phone_number = $_POST['phone'];

// The data to send to the API
$postData = array(
    'name' => $uname,
    'password' => $password,
    'email' => $email,
    'phone_number' => $phone_number
);
// Setup cURL
$ch = curl_init( 'https://mighty-inlet-78383.herokuapp.com/api/user/register');
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


// Check for errors
if($response === FALSE){
    die(curl_error($ch));
    echo 'Dead';
}

// Decode the response
$responseData = json_decode($response, TRUE);

// Print the date from the response
echo $responseData['published'];


}
?>