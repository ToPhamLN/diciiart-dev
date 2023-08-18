<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'diciiart_data';
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Could not connect to database: " . $conn->connect_error);
    }
?>