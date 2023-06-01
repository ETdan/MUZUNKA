<?php
    // include 'config.php';
    error_reporting(E_ERROR | E_PARSE);
    $u= ' *' . $_REQUEST['user'];
    $p= ' *' . $_REQUEST['pass'];
    $e= ' *' . $_REQUEST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <title>muzunka sign-up</title>
</head>
<body>
    <div class="container">
        <form action="config.php" method="post">
            <div class="signup">
                <p> Sign-up to </p>
                <p> <span> MUZUNKA </span> </p>
            </div>
            <div class="input">
                <label for="username"> <p class="username"> user name </p><span class="error"> <?php echo $u?></span></label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input">
                <label for="email"> <p class="email"> Email </p><span class="error"> <?php echo $p?></span></label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input">
                <label for="password"> <p class="password"> password </p><span class="error"> <?php echo $e?></span> </label>
                <input type="password" name="password" id="">
            </div>
            <div class="submit">
                <input type="submit" value="SIGN UP">
            </div>
        </form>
    </div>
</body>
</html>