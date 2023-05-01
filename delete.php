<?php
    include 'connection.php';
    if( isset( $_POST[ 'delete' ] ) ) {
        $username = $_POST[ 'username' ];

        $sql = "DELETE FROM users WHERE username = '$username'";
        $result = $conn->query( $sql );
        
        if( $result == true ) {
            header( 'Location: read.php' );
        } else {
            echo'There was an error deleting the account.';
        }
    }
    $conn->close();
?>