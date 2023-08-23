<?php
require_once('./../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = $_POST["email"];
    $password = $_POST["password"];

    echo "<script>console.log('$username_or_email','$password')</script>";
    $username_or_email = mysqli_real_escape_string($conn, $username_or_email);

    $user_check_query = "SELECT * FROM users WHERE username='$username_or_email' OR email='$username_or_email' LIMIT 1";
    $result = $conn->query($user_check_query);
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            echo "<script>
                console.log('Login Success');
                showConfirm('Success', 'Login Success');
                isLogin = true;
                localStorage.setItem('isLoginDiciiArt', isLogin);
                window.location.href = './Home.php';
            </script>";
        } else {
            echo "<script>
                console.log('Error: Incorrect password.');
                showConfirm('Error', 'Incorrect password.');
            </script>";
        }
    } else {
        echo "<script>
            console.log('Error: User not found.');
            showConfirm('Error', 'User not found.');
        </script>";
    }
}

$conn->close();
?>