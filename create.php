<?php
   include 'connection.php';
   if( isset( $_POST[ 'submit' ] ) ) {
       $first_name = $_POST[ 'firstname' ];
       $last_name = $_POST[ 'lastname' ];
       $email = $_POST[ 'email' ];
       $username = $_POST[ 'username' ];
       $password = SHA1( $_POST[ 'password' ] );
      // $password = MD5( $_POST[ 'password' ] );
       $gender = $_POST[ 'gender' ];

       $nms = "SELECT username FROM users";
       $ourusers = $conn->query( $nms );
       $exists = false;

        while ( $row = mysqli_fetch_assoc($ourusers) ) {
            if ( $row[ 'username' ] == $username ) {
                $exists = true;
                break;
            }
        }
        
        if ( $exists == true ) {
            echo '<br>Username is already in use.';
        } else {
            $sql = "INSERT INTO users ( fname, lastname, email, username, password, gender) values
                    ('$first_name', '$last_name', '$email', '$username', '$password', '$gender')";
            $result = $conn->query( $sql );
           if ( $result == true ) {
                echo 'new record created.';
                header( "Location: read.php" );
            } else {
                echo 'Error: Could not create the user.';
            }
        }
        $conn->close();
    }
?>
