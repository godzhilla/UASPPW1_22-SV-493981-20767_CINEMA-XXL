<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bioskop";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT no, judul, durasi, price, age_rate FROM list";
    $result = mysqli_query($conn, $sql);
?>