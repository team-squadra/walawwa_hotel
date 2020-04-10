<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION['pw']);

if (isset($_POST['login'])) {
//  $uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
 $email =$_POST['email'];
 $password =$_POST['pass'];



// The data to send to the API
$postData = array(
    'password' => $password,
    'email' => $email
);

// Setup cURL
$ch = curl_init( 'https://mighty-inlet-78383.herokuapp.com/api/user/login');
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
$status = $responseData['status'];
$token = $responseData['token'];
$email = $responseData['email'];
$name = $responseData['name'];

//setting session variables
$_SESSION["email"] = $email;
$_SESSION["status"] = $status;
$_SESSION["token"] = $token;
$_SESSION["name"] = $name;

if(empty($_SESSION["token"])){
    header("Location:../login.html");
}
else{
    if($status == 'admin'){
        header("Location:../Admin/index.php");
        exit();
    }
    else{
        header("Location:../Home.php");
        exit();
    }
}
}
?>