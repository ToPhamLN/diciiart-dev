<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group | DiciiArt</title>
    <link rel="icon" href="./../assets/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/group.page.css">
</head>

<body>
    <?php require_once('./../components/Navbar.php'); ?>
    <?php require_once('./../components/Sidebar.php'); ?>

    <main class="main_page">
        <div class="container">
            <section class="group_list">
                <article class="ppl_group">
                    <span class="category">Popular Group</span>
                    <div class="ppl_group_wp">
                        <!-- <figure class="card">
                            <img src="./../assets/imgs/demo11.jpg" alt="">
                            <figcaption class="card__content">
                                <p class="card__title">Robots-and-Space Group Feed</p>
                                <p class="card__description">Support we on Patreon to get all my arts with super high
                                    quality without watermark and many exclusive arts</p>
                                <button class="watch_btn">Watch</button>
                                <button class="join_btn">Join</button>
                            </figcaption>
                        </figure> -->
                    </div>
                </article>
                <div class="control">
                    <button class="prev">
                        <span class="material-symbols-outlined">
                            arrow_back_ios
                        </span>
                    </button>
                    <button class="next">
                        <span class="material-symbols-outlined">
                            arrow_forward_ios
                        </span>
                    </button>
                </div>
            </section>
            <section class="more_view">
                <article class="group_create">
                    <button id="toggle_cr_group">
                        <span class="material-symbols-outlined">
                            draft_orders
                        </span>
                        Make my Group
                    </button>
                </article>
                <article class="my_group">
                    <span class="category">My Joined Group</span>
                    <div class="my_group_wp">
                        <!-- <figure class="card">
                            <img class="image" src="" alt="">
                            <figcaption class="content">
                                <a href="#">
                                    <span class="title">
                                        Robots-and-Space Group Feed
                                    </span>
                                </a>

                                <a class="action" href="#">
                                    Watch group
                                    <span aria-hidden="true">
                                        →
                                    </span>
                                </a>
                            </figcaption>
                        </figure> -->
                    </div>
                </article>
                <article class="recommended_group">
                    <span class="category">Recommended</span>
                    <div class="rcmd_gr_wp">
                        <!-- <div class="card">
                            <img class="card_image" src="" alt="">
                            <div class="title"> Illustration </div>
                        </div> -->
                    </div>
                </article>
            </section>
        </div>
    </main>

    <?php require_once('./../components/Footer.php'); ?>
    <?php require_once('./../components/Confirm.php'); ?>

    <script src="./../assets/javascripts/isLogin.js"></script>
    <script src="./../assets/javascripts/toggleLogout.js"></script>
    <script src='./../assets/javascripts/toggleSidebar.js'></script>
    <script src='./../assets/javascripts/toggleMorlist.js'></script>
    <script src='./../assets/javascripts/theme.js'></script>

    <script src="./../assets/javascripts/group.js"></script>
</body>

</html>