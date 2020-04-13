<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <h2>News Form</h2>

    <form action="Controllers/set_news.php" method="post" enctype="multipart/form-data">
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="hedding"><b>News Title</b></label><br>
            <input type="text" placeholder="Enter Title" name="hedding" id="hedding" required><br>

            <label for="phone"><b>News Content</b></label><br>
            <textarea rows="4" cols="50" name="content" id="content">Enter text here...</textarea><br>

            <label for="newsImage"><b>News Image</b></label><br>
            <input type="file" name="newsImage" id="newsImage" accept=".png, .jpg, .jpeg" required><br>

            <button type="submit" name="upload">Submit</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>

</body>

</html>