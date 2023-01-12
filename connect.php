<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "group66";

    $username = "it65309010103";
    $password = "it12345";
    $dbname = "it65309010103";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }