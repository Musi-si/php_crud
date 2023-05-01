<?php
    include 'connection.php';
    $sql = "SELECT username, email, gender FROM users";
    $result = $conn->query($sql);
    
    // Check if there are any rows in the result set
    if ($result->num_rows > 0) {
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Ours</title>
                <link rel="stylesheet" href="signup.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            </head>
            <body>
                <table cellspacing="0" cellpadding="5" border="2">
                    <thead>Users</thead>
                    <tr>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Gender</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
        ';
        while ($row = $result->fetch_assoc()) {
            $usersname = $row['username'];
            echo '
                <tr>
                    <td>' . $usersname . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['gender'] . '</td>
                    <td>
                        <form action="update.php" method="post">
                            <button type="submit" name="update">    
                                <i class="bi-database-down"></i>
                            </button>
                        </form><br>
                    </td>
                    <td>
                        <form action="delete.php" method="post">
                        <input type="hidden" name="username" value="' . $usersname . '">
                            <button type="submit" name="delete">
                                <i class="bi-trash3-fill"></i>
                            </button>
                        </form><br>
                    </td>
                </tr>
            ';
        }
        echo '
            </table>
        </body>
        </html>
        ';
    } else {
        echo "0 results";
    }
    $conn->close();
?>
