<?php

registration();

function registration()
{

    if (isset($_GET['registration']) && $_GET['registration'] == 'true'){

        $uname = $_POST['reg_uname'];
        $phone_number = $_POST['reg_phone'];
        $email = $_POST['reg_email'];
        $password = $_POST['reg_pass'];

        
        // The data to send to the API
        $postData = array(
            'name' => $uname,
            'password' => $password,
            'email' => $email,
            'phone_number' => $phone_number
        );

        // Setup cURL
        $ch = curl_init('https://mighty-inlet-78383.herokuapp.com/api/user/register');
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

        //error
        $error = $responseData['error'];
        
        //result finalizing
        if ($error == "success"){
            echo json_encode(['error' => 'success', 'msg' => 'login.php']);
        }
        else{
            echo json_encode(['error' => 'error', 'msg' => ''.$error.'']);
        }

    }
}
?>