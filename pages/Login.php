<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|Diciiart</title>
    <link rel="icon" href="./../assets/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/login.page.css">

</head>

<body>
    <?php require_once('./../components/Navbar.php');?>
    <?php require_once('./../components/Sidebar.php');?>

    <main class="main_page">
        <div class="container">
            <div class="poster">
                <img src="./../assets/imgs/poster_login.jpg" alt="">
            </div>
            <form id="login_form">

                <h1>Login</h1>
                <h2>Welcome to Our Application</h2>
                <div id="input_box">
                    <input type="text" id="email" name="email" placeholder="Email:">
                </div>
                <div id="input_box">
                    <input type="password" id="password" name="password" placeholder="Password:">
                    <span id="switch_pwd" class="material-symbols-outlined ">
                        visibility
                    </span>
                </div>
                <div class="option">
                    <div class="left">
                        <input type="checkbox">
                        Keep me logged in
                    </div>
                    <a class="right" href="#">Forgot email or password?</a>
                </div>
                <button type="submit">Login</button>
                <p class="signup_link">No account?
                    <a href="./Signup.php">Sign up</a>
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

    <?php require_once('./../components/Footer.php');?>
    <?php require_once('./../components/Error.php');?>

    <script src="./../assets/javascripts/isLogin.js"></script>
    <script src='./../assets/javascripts/toggleSidebar.js'></script>
    <script src='./../assets/javascripts/toggleMorlist.js'></script>
    <script src=' ./../assets/javascripts/theme.js'></script>

    <script src="./../assets/javascripts/login.js"></script>
</body>

</html>