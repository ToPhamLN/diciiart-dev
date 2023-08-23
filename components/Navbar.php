<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="icon" href="../../public/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/navbar.css">
    <link rel="stylesheet" href="./../assets/css/morelist.css">
</head>

<nav id="navbar">
    <div class="nav_tab">
        <header class="logo_nav">
            <span id="toggle_sidebar" class="material-symbols-outlined item_nav">
                menu
            </span>
            <a href="./../pages/Home.php">
                <img src="./../assets/imgs/logo.png" alt="">
            </a>
            <form class="search_nav" action="">
                <input id="search_box" type="text" class="search-box" name="q" />
                <label for="search_box">
                    <span id="search_icon" class="material-symbols-outlined">
                        search
                    </span>
                </label>
                <input type="submit" id="search-submit" />
            </form>

        </header>

        <div class="auth_nav">

            <div id="user">

                <ul>
                    <li>
                        <a class="item_nav" href="./../pages/Home.php?feed" icon_name="Feed">
                            <span class="material-symbols-outlined">
                                whatshot
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="item_nav" href="./../pages/Home.php?hot" icon_name="Hot">
                            <span class="material-symbols-outlined">
                                local_fire_department
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="item_nav" href="#" icon_name="Topics">
                            <span class="material-symbols-outlined">
                                grain
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="item_nav" href="./Group.php" icon_name="Group">
                            <span class="material-symbols-outlined">
                                thermostat_carbon
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="item_nav" href="./../pages/Post.php" icon_name="Create">
                            <span class="material-symbols-outlined">
                                add_circle
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="item_nav" href="#" icon_name="Nolification">
                            <span class="material-symbols-outlined">
                                notifications
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="item_nav" href="#" icon_name="Message">
                            <span class="material-symbols-outlined">
                                sms
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="./Userinfo.php" icon_name="My Info">
                            <img src="./../assets/imgs/avatar.jpg" alt="Avatar">

                        </a>
                    </li>
                    <li>
                        <a id="more_list_btn" class="item_nav" icon_name="More">
                            <span class="material-symbols-outlined toggle_mode">
                                expand_circle_down
                            </span>
                        </a>
                    </li>
                </ul>
                <article id="more_list" class="more_list unmount">
                    <h1>More</h1>
                    <div class="space"></div>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">
                                    settings
                                </span>
                                Setting
                            </a>
                        </li>
                        <li>
                            <a href="./Userinfo.php">
                                <span class="material-symbols-outlined">
                                    account_circle
                                </span>
                                My Info
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">
                                    bookmarks
                                </span>
                                Saved
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="material-symbols-outlined">
                                    help
                                </span>
                                Help
                            </a>
                        </li>
                        <li>
                            <a id="toggle_dark_light_btn">
                                <span class="material-symbols-outlined">
                                    settings_night_sight
                                </span>
                                Dark/Light
                            </a>
                        </li>
                        <li>
                            <a id="toggle_logout_btn">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </article>

            </div>
            <div id="side">
                <ul>
                    <li>
                        <a href="./../pages/Login.php"><span class="material-symbols-outlined">
                                login
                            </span>
                            Log In
                        </a>
                    </li>
                    <li>
                        <a href="./../pages/Signup.php">
                            <span class="material-symbols-outlined">
                                breastfeeding
                            </span>
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>