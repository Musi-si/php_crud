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
    <div class="info">
        <form action="username.php" method="post">
            <fieldset>
                <label>Change Username:</label><br>
                <input type="text" placeholder="Current Username" name="oldusername" class="input"><br>
                <input type="text" placeholder="New Username" name="newusername" class="input"><br>
                <input type="submit" value="Done" class="done" name="done">
            </fieldset>
        </form>
        <form action="email.php" method="post">
            <fieldset>
                <label>Change Email:</label><br>
                <input type="email" placeholder="Older Email" name="oldemail" class="input"><br>
                <input type="email" placeholder="New Email" name="newemail" class="input"><br>
                <input type="submit" value="Done" class="done"name="done">
            </fieldset>
        </form>
        <form action="password.php" method="post">
            <fieldset>
                <label>Change Password:</label><br>
                <input type="password" placeholder="Older Password" name="oldpassword" class="input"><br>
                <input type="password" placeholder="New Password" name="newpassword" class="input"><br>
                <input type="submit" value="Done" class="done" name="done">
            </fieldset>
        </form>
    </div>
</body>
</html>