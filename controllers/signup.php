<?php
require_once('./../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);

    $user_check_query = "SELECT * FROM users WHERE email='$email' OR username='$username' LIMIT 1";
    $result = $conn->query($user_check_query);
    $user = $result->fetch_assoc();

    if ($user) {
        if ($user['email'] === $email) {
            echo "<script>
                showConfirm('Error', 'Email already exists.');
            </script>";
        }

        if ($user['username'] === $username) {
            echo "<script>
                showConfirm('Error', 'Username already exists.');
            </script>";
        }
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                showConfirm('Success', 'Sign Up Success');
            </script>";
        } else {
            echo "<script>
                console.log('Error: " . $sql . " " . $conn->error . "');
                
                showConfirm('Error', 'Error in sign up.');
            </script>";
        }
    }
}

$conn->close();
?>