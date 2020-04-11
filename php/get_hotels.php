<?php

$ch = curl_init( 'https://mighty-inlet-78383.herokuapp.com/api/hotels/imagedata');
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => TRUE
));

// Send the request
$response = curl_exec($ch);
// Check for errors
if($response === FALSE){
    die(curl_error($ch));
    echo 'No responce';
}


// Decode the response
$responseData = json_decode($response, true);

// Print the date from the response
// foreach($responseData AS $response) {

//     $name = $response['name'];
//     $email = $response['email'];
//     $phone_number = $response['phone_number'];
//     $hotelImage = $response['hotelImage'];

//     if(empty($email)){
//         // header("Location:../login.html");
//         echo "No responce from server";
//     }
//     else{
//         echo '<br>';
//         echo'
//             <html>
//                 <head></head>
//                 <body>
//                 <input class="input100" type="text" name="email" value='.$name.'>
//                 <input class="input100" type="text" name="email" value='.$email.'>
//                 <input class="input100" type="number" name="phone" value='.$phone_number.'>
//                 <img src="data:image/png;base64,' . $hotelImage . '" />
//                 </body>
//             </html>    
//         ';
//         }
// }


?>