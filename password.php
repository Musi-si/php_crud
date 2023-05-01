<?php
    include 'connection.php';
    if( isset( $_POST[ 'done' ] ) ) {
        $oldpassword = $_POST[ 'oldpassword' ];
        $password = SHA1( $_POST[ 'newpassword' ] );

        $sql = "UPDATE users SET password = '$password' WHERE password = '$oldpassword'";
        $result = $conn->query( $sql );
        if ( $result == true ) {
            header( "Location: read.php" );
        } else {
            echo '<br>Error: Couldn\'t change the password.';
        }
        $conn->close();
    }
?>