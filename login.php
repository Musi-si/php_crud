<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ours</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <h1>Login Form</h1>
        <form action="display.php" method="post" class="form">
            <legend>Personal Information</legend><br>
            Username: <br>
            <input type="text" name="username" minlength="5" maxlength="10" class="input">
            <br>
            Password: <br>
            <input type="password" name="password" minlength="6" maxlength="10" class="input">
            <br><br>
            <input type="submit" name="submit" value="Sign In" class="submit">
        </form>
    </body>
</html>