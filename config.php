<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'diciiart_data';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    echo "<script>console.log('Failed')</script>";
} else {
    echo "<script>console.log('Connected')</script>";
}
?>