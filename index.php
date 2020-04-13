<!DOCTYPE html>
<html lang="en">

<head>
    <title>HotelBook</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="logo/logo1.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <!--===============================================================================================-->
</head>

<style>
.centered {
    align-items: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.progress {
    border-radius: 5px;
    width: 100%;
    height: 4px;
    position: relative;
    background: red;
}

.progress::before {
    position: absolute;
    content: "";
    width: 0%;
    height: 4px;
    top: 0;
    left: 0;
    background-color: orange;
    animation: wait 1s infinite;
    -webkit-animation: wait 1s infinite;
    -moz-animation: wait 1s infinite;
}

@keyframes wait {
    10% {
        width: 10%
    }

    30% {
        width: 30%
    }

    50% {
        width: 50%
    }

    70% {
        width: 70%
    }

    100% {
        width: 100%
    }
}
</style>

<body>
    <div id="loading_div" style="width: 100%; height: 100%;">
        <div class="centered">
            <img src="logo/logo1.png" style="width: 100px; height: 100px;padding: 50px;"><br>
            <div class="progress"></div>
        </div>
    </div>
</body>

<?php
	session_start();
	
	if(!isset($_SESSION['status'])){
		//not logged in
		header('Location: Access/login.php');
	} 
	
	else if($_SESSION['status'] =='admin')
	{
		header('Location: Admin/index.php');
    }
    else if($_SESSION['status'] =='user')
	{
		header('Location: User/Home.php');
	}
?>

</html>