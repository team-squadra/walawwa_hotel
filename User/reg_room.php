<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="gg.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <h2>Hotel Registration</h2>

  <form action="Controllers/set_room.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="hotel_name"><b>Hotel Name</b></label><br>
      <input type="text" placeholder="Enter hotel name" name="hotel_name" id="hotel_name" required><br>

      <label for="roomtype"><b>Room Type</b></label><br>
      <input type="text" placeholder="Enter room type" name="roomtype" id="roomtype" required><br>

      <label for="room_capacity"><b>Room Capacity</b></label><br>
      <input type="number" placeholder="Enter room capacity" name="room_capacity" id="room_capacity" required><br>

      <label for="room_capacity"><b>Room Price</b></label><br>
      <input type="number" placeholder="Enter room Price" name="rmprice" id="rmprice" required><br>

      <label for="ac"><b>A/C Facility</b></label><br>
      <select id="ac" name="ac">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="tv"><b>TV Facility</b></label><br>
      <select id="tv" name="tv">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="minibar"><b>Minibar Facility</b></label><br>
      <select id="minibar" name="minibar">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="wardrobe"><b>Wardrobe Facility</b></label><br>
      <select id="wardrobe" name="wardrobe">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="safe"><b>Safe Facility</b></label><br>
      <select id="safe" name="safe">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="soundproof"><b>Soundproof Facility</b></label><br>
      <select id="soundproof" name="soundproof">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>
      
      <label for="bathroom"><b>Privet Bathroom Facility</b></label><br>
      <select id="bathroom" name="bathroom">
        <option value="available">available</option>
        <option value="not available">not available</option>
      </select><br>

      <label for="view"><b>view</b></label><br>
      <input type="text" placeholder="Enter Room View" name="view" id="view" required><br>

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