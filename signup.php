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
        <h1>Signup Form</h1>
        <form action="create.php" method="post" class="form">
            <legend>Personal Information</legend><br>
            First name: <br>
            <input type="text" name="firstname" minlength="3" maxlength="20" class="input">
            <br>
            Last name: <br>
            <input type="text" name="lastname" minlength="3" maxlength="10" class="input">
            <br>
            Email: <br>
            <input type="email" name="email" minlength="15" maxlength="25" class="input">
            <br>
            Username: <br>
            <input type="text" name="username" minlength="5" maxlength="10" class="input">
            <br>
            Password: <br>
            <input type="password" name="password" minlength="6" maxlength="10" class="input">
            <br>
            Gender: <br>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <br><br>
            <input type="submit" name="submit" value="Sign Up" class="submit">
        </form>
    </body>
</html>