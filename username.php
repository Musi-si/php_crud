<?php
    include 'connection.php';
    if( isset( $_POST[ 'done' ] ) ) {
        $oldname = $_POST[ 'oldusername' ];
        $username = $_POST[ 'newusername' ];

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
            $sql = "UPDATE users SET username = '$username' WHERE username = '$oldname'";
            $result = $conn->query( $sql );

            if ( $result == true ) {
                header( "Location: read.php" );
            } else {
                echo '<br>Error: Couldn\'t change the username.';
            }
        }
        $conn->close();
    }
?>