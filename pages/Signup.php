<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | DiciiArt</title>
    <link rel="icon" href="./../assets/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/signup.page.css">
</head>

<body>
    <?php require_once('./../components/Navbar.php'); ?>
    <?php require_once('./../components/Sidebar.php'); ?>

    <main class="main_page">
        <div class="container">
            <div class="poster">
                <img src="./../assets/imgs/poster_login.jpg" alt="">
            </div>
            <form id="signup_form" method="POST" action="">
                <h1>Sign Up</h1>
                <h2>Welcome to Our Application</h2>
                <div id="input_box" class="username_wp">
                    <input type="text" id="username" name="username" placeholder="User Name:">
                </div>
                <div id="input_box" class="email_wp">
                    <input type="text" id="email" name="email" placeholder="Email:">
                </div>
                <div id="input_box" class="password_wp">
                    <input type="password" id="password" class="password" name="password" placeholder="Password:">
                    <span id="switch_pwd" class="material-symbols-outlined ">
                        visibility_off
                    </span>
                </div>
                <div id="input_box" class="password_again_wp">
                    <input type="password" id="password-again" class="password" name="password-again"
                        placeholder="Password Again:">
                    <span id="switch_pwd" class="material-symbols-outlined ">
                        visibility_off
                    </span>
                </div>

                <button type="submit">Sign Up</button>

                <p class="signup_link">Haved account?
                    <a href="./Login.php">Login</a>
                </p>
                <div class="footer">
                    By joining DiciiArt, I confirm that I have read and agree to the DiciiArt "
                    <a href="#">Terms of Service</a>
                    ", "
                    <a href="#">Privacy Policy</a>
                    ", and to receive emails and updates.
                </div>
            </form>
        </div>

    </main>

    <?php require_once('./../components/Footer.php'); ?>
    <?php require_once('./../components/Confirm.php'); ?>

    <script src="./../assets/javascripts/isLogin.js"></script>
    <script src="./../assets/javascripts/toggleLogout.js"></script>
    <script src='./../assets/javascripts/toggleSidebar.js'></script>
    <script src='./../assets/javascripts/toggleMorlist.js'></script>
    <script src='./../assets/javascripts/theme.js'></script>

    <script src="./../assets/javascripts/signup.js"></script>
    <?php require('./../controllers/signup.php'); ?>


</html>