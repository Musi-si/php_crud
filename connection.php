<?php
    $server = "localhost";
    $dbname = "student_id";
    $username = "root";
    $password = "";

    $conn = new mysqli( $server, $username, $password, $dbname );

    if( !$conn ) {
        echo "connection failed";
    } else {
        echo "connected successfully<br><br>";
    }
?>