<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
<title> Register Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<body>
    <div class="container mregister">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div id="login">
        <h2>Create an account</h2>
        <form action="check.php" id="registerform" method="post" name="registerform">
            <p><label for="user_pass">Username<br>
            <input type="text" class="form-control" id="username" name="username"size="32"></label></p>

            <p><label for="user_pass">E-mail<br>
            <input type="email" class="form-control" id="email" name="email" size="32"></label></p>

            <p><label for="user_pass">Password<br>
            <input type="password" class="form-control" id="password" name="password" size="32"></label></p>

            <button class="btn btn-success" type="submit">Register</button>
            <p class="regtext">Already have an account? <a href= "login.php">Login</a>!</p>
        </form>
        </div>

        <?php else: ?>
            <p>Hello, <?=$_COOKIE['user']?> <a href="/exit.php" type="button" class="btn btn-success">Exit</a> <p>
        <?php endif;?>
    </div>
</body>

</html>