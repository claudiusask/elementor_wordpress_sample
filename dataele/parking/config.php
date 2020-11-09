<?php
    session_start();

    $servername = "db";
    $username = "root";
    $password = "password";
    $dbName = "dbexample";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);
    

    // // Check connection
    /*
    uncomment the below if connection is giving errors
    */
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>