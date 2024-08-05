<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Page</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="mainpage">
        <div class="col">
            <div class="bg">
                <img class="bg" src="images/level3.jpg" alt="">
            </div>
            <div class="center">
                <div class="col1">
                    <img class="bg2" src="images/login2.jpg" alt="">
                </div>
                <div id="form">
                    <h1>Login</h1>
                    <form id="form1" name="form" action="login.php" method="POST">
                        <label>Username:</label>
                        <input type="text" id="user" name="user" required />
                        <br><br>
                        <label>Password: </label>
                        <input type="password" id="pass" name="pass" />
                        <br><br>
                        <input type="submit" id="btn" value="Login" name="submit" required />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>