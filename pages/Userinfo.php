<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info | DiciiArt</title>
    <link rel="icon" href="./../assets/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/userinfo.page.css">
</head>

<body>
    <?php require_once('./../components/Navbar.php'); ?>
    <?php require_once('./../components/Sidebar.php'); ?>

    <main class="main_page">
        <div class="container">
            <article class="author_info">
                <div class="wrapper">
                    <div class="author_avatar">
                        <img src="./../assets/imgs/avatar.jpg" alt="">
                    </div>
                    <div class="infomation">
                        <div class="author_name">We33pxz</div>
                        <div class="author_bio">Cevi</div>
                        <div class="author_interact">
                            <span class="watchers">2K</span>
                            <span class="deciiartions">879</span>
                            <span class="pageviews">10K</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="author_menu">
                <div class="wrapper">
                    <div class="left">
                        <ul>
                            <li>
                                Home
                            </li>
                            <li>
                                Gallery
                            </li>
                            <li>
                                Favorites
                            </li>
                            <li>
                                Posts
                            </li>
                            <li>
                                Shop
                            </li>
                            <li>
                                About
                            </li>
                            <li>
                                Supscriptions
                            </li>
                        </ul>
                    </div>
                    <div class="right">
                        <div class="more">
                            <ul>
                                <li class="more_menu_author">
                                    <a id="tg_more_menu_author">
                                        <span class="material-symbols-outlined">
                                            steppers
                                        </span>
                                    </a>
                                    <div class="more_content">
                                        <ul>
                                            <li>
                                                <a>
                                                    <span class="material-symbols-outlined">
                                                        share
                                                    </span>
                                                    Share
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="material-symbols-outlined">
                                                        block
                                                    </span>
                                                    Block DiciiArt
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                                <li class="outside" id="give">

                                    <a>
                                        <span class="material-symbols-outlined">
                                            redeem
                                        </span>
                                    </a>
                                </li>
                                <li class="outside" id="message">
                                    <a>
                                        <span class="material-symbols-outlined">
                                            sms
                                        </span>
                                    </a>

                                </li>

                            </ul>
                        </div>
                        <div class="follow">
                            <button id="donate_btn">
                                <span class="material-symbols-outlined">
                                    paid
                                </span>
                                Donate
                            </button>
                            <button id="sub_btn">
                                <span class="material-symbols-outlined">
                                    sweep
                                </span>
                                subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </article>
            <article class="author_collection">
                <div class="wrapper">
                    <section class="lastest_diciiart clt_head">
                        <h1 class="category">
                            Lastest Diciiartions
                        </h1>
                        <a class="seeall">See all</a>
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
                        <div class="cover"></div>

                        <div class="lastest_diciiart_wp">
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo2.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">ocean troll</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo1.png" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Artic Ice Fall</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo3.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Spiderverse Doodles</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo4.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">spiderverse</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo5.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Last winter</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo6.png" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Aurora's Lullaby Interstellar Echoes</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo7.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Female knight tending her robotic
                                                guardian</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo8.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">00934-43224-43422</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo9.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Lumistica Cosmic Ethereal</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="card">
                                <img class="card_img" src="./../assets/imgs/demo10.jpg" alt="">
                                <figcaption class="card_body">
                                    <div class="wrapper">
                                        <div class="top-left">
                                            <span class="img_title truncate">Duckborne</span>
                                        </div>
                                        <div class="top-right">
                                            <span class="material-symbols-outlined">
                                                more_horiz
                                            </span>
                                        </div>
                                        <div class="bottom-left">
                                            <div class="author">
                                                <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                <span class="name">WeezyE14</span>
                                            </div>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="favour">
                                                <span class="text">11.1N</span>
                                                <span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                    <section class="clt_middle">
                        <div class="left">
                            <article class="oc">
                                <h1 class="category">OC</h1>
                                <span class="seeall">See all</span>
                                <div class="oc_wp">
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo2.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">ocean troll</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo1.png" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Artic Ice Fall</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo3.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Spiderverse Doodles</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo4.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">spiderverse</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo5.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Last winter</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo6.png" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Aurora's Lullaby Interstellar
                                                        Echoes</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo7.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Female knight tending her robotic
                                                        guardian</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo8.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">00934-43224-43422</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo9.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Lumistica Cosmic Ethereal</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <figure class="card">
                                        <img class="card_img" src="./../assets/imgs/demo10.jpg" alt="">
                                        <figcaption class="card_body">
                                            <div class="wrapper">
                                                <div class="top-left">
                                                    <span class="img_title truncate">Duckborne</span>
                                                </div>
                                                <div class="top-right">
                                                    <span class="material-symbols-outlined">
                                                        more_horiz
                                                    </span>
                                                </div>
                                                <div class="bottom-left">
                                                    <div class="author">
                                                        <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">
                                                        <span class="name">WeezyE14</span>
                                                    </div>
                                                </div>
                                                <div class="bottom-right">
                                                    <div class="favour">
                                                        <span class="text">11.1N</span>
                                                        <span class="material-symbols-outlined">
                                                            favorite
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </article>

                            <article class="watcher">
                                <h1 class="category">Watchers</h1>
                                <div class="watcher_wp">

                                </div>
                            </article>
                            <article class="watching">
                                <h1 class="category">Watching</h1>
                                <div class="watching_wp">

                                </div>
                            </article>

                        </div>
                        <div class="right">
                            <article class="author_about">
                                <h1 class="category">About</h1>
                                <div class="about_wp">
                                    <span class="digital">Artist // Digital</span>
                                    <div class="story">
                                        <div class="birthday">
                                            <span class="material-symbols-outlined">
                                                cake
                                            </span>
                                            OCT 14
                                        </div>
                                        <div class="born">
                                            <span class="material-symbols-outlined">
                                                location_on
                                            </span>
                                            HCM.City
                                        </div>
                                        <div class="active">
                                            <span class="material-symbols-outlined">
                                                azm
                                            </span>
                                            Deciiart for about a year
                                        </div>
                                    </div>
                                    <a class="link">
                                        <span class="material-symbols-outlined">
                                            attach_file
                                        </span>
                                        https://diciiart.com
                                    </a>
                                    <div class="bio">
                                        <span> My Bio</span>
                                        <p>hello! I love doing pretty girl and landscape, i'm doing sketch using clip
                                            studio paint using aitool for color and photoshop for clean up, if you are
                                            interest in comission you can reach me :) <br>
                                            I'm starting to sell print here too: <br>
                                            <br>
                                            <a href="#">Boutique de CerresVictoria | Redbubble</a> <br>
                                            <br>
                                            my discord: <br>
                                            <br>
                                            <a href="#">https://discord.gg/nSNgDKH8</a>
                                            <br>
                                            <br>
                                            peace ^^
                                            <hr>
                                        </p>
                                    </div>

                                </div>
                            </article>

                            <article class="prf_comment">
                                <h1 class="category">Profiles Comments</h1>
                                <div class="prf_cmt_wp">
                                    <form id="comment_form" action="">
                                        <span class="material-symbols-outlined person">
                                            person
                                        </span>
                                        <input type="text" id="comment" name="comment" placeholder="Write...">
                                        <button id="send_btn" type="submit">
                                            <span class="material-symbols-outlined">
                                                send
                                            </span>
                                            Send
                                        </button>
                                    </form>
                                </div>
                            </article>

                        </div>
                    </section>
                </div>

            </article>

        </div>
    </main>
    <?php require_once('./../components/Footer.php'); ?>

    <?php require_once('./../components/Confirm.php'); ?>

    <script src="./../assets/javascripts/isLogin.js"></script>
    <script src="./../assets/javascripts/toggleLogout.js"></script>
    <script src='./../assets/javascripts/toggleSidebar.js'></script>
    <script src='./../assets/javascripts/toggleMorlist.js'></script>
    <script src='./../assets/javascripts/theme.js'></script>

    <script src="./../assets/javascripts/userinfo.js"></script>
</body>

</html>