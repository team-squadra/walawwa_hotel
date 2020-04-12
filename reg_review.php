<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="gg.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <h2>Login Form</h2>

    <form action="Controllers/set_review.php" method="post" enctype="multipart/form-data">
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" id="uname" required><br>

            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Location" name="location" id="location" required><br>

            <label for="phone"><b>Your Review</b></label><br>
            <!-- <input type="number" placeholder="phonenumber" name="review" id="review" required><br> -->

            <textarea rows="4" cols="50" name="review" id="review">Enter text here...</textarea><br>

            <label for="imageUpload"><b>Your Image</b></label><br>
            <input type="file" name="img" id="img" accept=".png, .jpg, .jpeg" required><br>

            <button type="submit" name="upload">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>

</body>

</html>