<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="gg.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <h2>Hotel Registration</h2>

  <form action="Controllers/register_hotel.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="uname" id="uname" required><br>

      <label for="location"><b>Location</b></label><br>
      <input type="text" placeholder="Enter location" name="location" id="location" required><br>

      <label for="pool"><b>Pool Facility</b></label><br>
      <select id="pool" name="pool">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="wifi"><b>wifi Facility</b></label><br>
      <select id="wifi" name="wifi">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="parking"><b>parking Facility</b></label><br>
      <select id="parking" name="parking">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="spa"><b>spa Facility</b></label><br>
      <select id="spa" name="spa">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="bar"><b>bar Facility</b></label><br>
      <select id="bar" name="bar">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="description"><b>description</b></label><br>
      <input type="text" placeholder="Enter description" name="description" id="description" required><br>

      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Enter email" name="email" id="email" required><br>

      <label for="phone"><b>Phone Number</b></label><br>
      <input type="number" placeholder="phonenumber" name="phone" id="phone" required><br>

      <label for="imageUpload"><b>Your Image</b></label><br>
      <input type="file" name="imagefile" id="imagefile" accept=".png, .jpg, .jpeg" required><br>

      <button type="submit" name="upload">Register</button>
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