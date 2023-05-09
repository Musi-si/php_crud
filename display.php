<?php
    include 'connection.php';
    if ( isset( $_POST[ 'submit' ] ) ){
        $username = $_POST[ 'username' ];
        $password = $_POST[ 'password' ];

        $nms = "SELECT username FROM users";
        $ourusers = $conn->query( $nms );
        $exists = false;

        while ( $row = mysqli_fetch_assoc($ourusers) ) {
            if ( $row[ 'username' ] == $username ) {
                $exists = true;
                break;
            }
        }
        
        if ( $exists == false ) {
            echo '<br>Username does not exist.';
        } else {
            $pswrd = "SELECT password FROM users WHERE username = '$username'";
            $userpswrd = $conn->query( $pswrd );
            $thepswrd = $userpswrd->fetch_assoc()[ 'password' ];

            $real = ( password_verify( $password, $thepswrd ) );
            if( $real = true ){
                echo 'true';
            } else {
                echo 'false';
            }

            if ( $real == false ) {
                echo '<br>Wrong password.';
            } else {
                $eml = "SELECT email FROM users WHERE username = '$username'";
                $useremail = $conn->query( $eml );

                if ( $useremail == true ) {
                    $row = $useremail->fetch_assoc()[ 'email' ];

                    echo '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>ours</title>
                            <link rel="stylesheet" href="signup.css">
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
                        </head>
                        <body>
                            <div class="img">
                                <img src="../../img/user.jpg" alt="Profile Picture">
                                <input type="button" value="Change Profile Picture" id="profile">
                            </div>
                            <div class="info">
                                <p>Username: ' . $username . '</p><br>
                                <p>Email: ' . $row . '</p><br>
                                <p>Make changes to your profile: </p>
                                <p>Update personal information</p>
                                <form action="update.php" method="post">
                                    <button type="submit" name="update">    
                                        <i class="bi-database-down"></i>
                                    </button>
                                </form><br>
                                <p>Delete your account</p>
                                <form action="delete.php" method="get">
                                    <button type="submit" name="delete">
                                        <i class="bi-trash3-fill"></i>
                                    </button>
                                </form><br>
                                <p>For <a href="#">More</a></p>
                            </div>
                        </body>
                        </html>
                        ';
                } else {
                echo 'Error: Could not display information of the user.';
                }
            }
        }
        $conn->close();
    }
?>