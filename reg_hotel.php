<!DOCTYPE html>
<html>

<head>
  <!-- <script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
	  function submit_soap(){
		var email=$("#email").val();
		$.post("login.php",{email:email});
	}
	</script> -->

  <link rel="stylesheet" type="text/css" href="gg.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <h2>Login Form</h2>

  <form action="register_hotel.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter email" name="email" id="email" required>

      <label for="phone"><b>Phone Number</b></label>
      <input type="number" placeholder="phonenumber" name="phone" id="phone" required>

      <label for="imageUpload"><b>Your Image</b></label>
      <input type="file" name="imagefile" id="imagefile" accept=".png, .jpg, .jpeg" required>

      <button type="submit" name="upload">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

</body>

</html>