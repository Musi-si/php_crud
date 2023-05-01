<?php
    include 'connection.php';
    if( isset( $_POST[ 'done' ] ) ) {
        $oldemail = $_POST[ 'oldemail' ];
        $email = $_POST[ 'newemail' ];

        $ems = "SELECT email FROM users";
        $ouremails = $conn->query( $ems );
        $exists = false;
        while ( $row = mysqli_fetch_assoc( $ouremails ) ) {
            if ( $row[ 'email' ] == $email ) {
                $exists = true;
                break;
            }
        }

        if ( $exists == true ) {
            echo '<br>Invalid email.';
        } else {
            $sql = "UPDATE users SET email = '$email' WHERE email = '$oldemail'";
            $result = $conn->query( $sql );
            if ( $result == true ) {
                header( "Location: read.php" );
            } else {
                echo '<br>Error: Couldn\'t change the email.';
            }
        }
        $conn->close();
    }
?>