<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Login</title>
</head>
<body>
    <?php
    include './login.php'
    ?>

    <div class="container">
        <div class="img">
            <img src="./img/login.svg">
        </div>
        <div class="login-container">
            <form action="index.php" method="POST">
                <img class="avatar" src="./img/ava.svg" alt="">
                <h2>Welcome</h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="user">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="pass">
                    </div>
                </div>

                <a href="#">Forgot password</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
        
    <script type="text/javascript" src="./js/main.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>