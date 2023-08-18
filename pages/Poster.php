<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|DiciiArt</title>
    <link rel="icon" href="./../assets/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/poster.page.css">
</head>

<body>
    <?php require_once('./../components/Navbar.php');?>
    <?php require_once('./../components/Sidebar.php');?>

    <main class="main_page">
        <div class="container">
            <section class="poster">
                <div class="wrapper">
                    <div class="poster_img">
                        <span id="prev" class="material-symbols-outlined">
                            chevron_left
                        </span>
                        <img id="current_img" src="./../assets/imgs/demo2.jpg" alt="">
                        <span id="next" class="material-symbols-outlined">
                            navigate_next
                        </span>
                    </div>
                    <div class="option">
                        <div class="item_icon" id="like">
                            <span class="material-symbols-outlined">
                                thumb_up
                            </span>
                            Like
                        </div>
                        <div class="item_icon" id="dislike">
                            <span class="material-symbols-outlined">
                                thumb_down
                            </span>
                            Dislike
                        </div>
                        <div class="item_icon" id="comment">
                            <span class="material-symbols-outlined">
                                chat_bubble
                            </span>
                            Comment
                        </div>
                        <div class="item_icon" id="save">
                            <span class="material-symbols-outlined">
                                bookmark
                            </span>
                            Save
                        </div>
                    </div>
                    <div class="poster_content">
                        <div class="primary">
                            <header>
                                <div>
                                    <img class="avatar" src="./../assets/imgs/avatar.jpg" alt="">

                                </div>
                                <div class="author">
                                    <span class="img_title">ocean troll</span>
                                    <span class="name">WeezyE14</span>
                                </div>
                            </header>
                            <div class="description">
                                <p>Beautiful Ice Landscape </p>
                                <p>Digital art I created using Ai generator </p>
                                <p> out www.deviantart.com/weezye14 </p>
                            </div>
                        </div>

                    </div>
                    <div class="comment_field">
                        <header>
                            <h1>Comment 8K</h1>
                        </header>
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
                        <div id="commet_list">
                            <h1>Comment list</h1>
                            <div id="comment_form">
                                <span class="material-symbols-outlined person">
                                    person
                                </span>
                                <p id="comment">I like the mood you have here ^__^ </p>

                            </div>
                            <ul id="comments"></ul>
                        </div>

                    </div>

                </div>
            </section>
            <section class="more_view">
                <div class="wrapper">
                    <article class="author_info">
                        <div class="author">
                            <img class="avatar" src="../../public/imgs/avatar.jpg" alt="">
                            <span class="name">WeezyE14</span>
                        </div>
                        <img class="coverphoto" src="./../assets/imgs/demo11.jpg" alt="">
                        <p class="story">I make AI adopts and edit them in Procreate or Clip Studio Paint as to make
                            them not completely AI.</p>
                        <hr>
                        <div class="option">
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
                    </article>
                    <article class="author_album">
                        <p>More by WeezyE14</p>
                        <div class="list">
                            <img src="./../assets/imgs/demo1.png" alt="">
                            <img src="./../assets/imgs/demo2.jpg" alt="">
                            <img src="./../assets/imgs/demo3.jpg" alt="">
                            <img src="./../assets/imgs/demo4.jpg" alt="">
                            <img src="./../assets/imgs/demo5.jpg" alt="">
                            <img src="./../assets/imgs/demo6.png" alt="">
                            <img src="./../assets/imgs/demo7.jpg" alt="">
                            <img src="./../assets/imgs/demo8.jpg" alt="">
                            <img src="./../assets/imgs/demo9.jpg" alt="">
                            <img src="./../assets/imgs/demo10.jpg" alt="">
                        </div>
                    </article>

                </div>
            </section>
        </div>

    </main>

    <?php require_once('./../components/Footer.php');?>
    <?php require_once('./../components/Error.php');?>

    <script src="./../assets/javascripts/isLogin.js"></script>
    <script src='./../assets/javascripts/toggleSidebar.js'></script>
    <script src='./../assets/javascripts/toggleMorlist.js'></script>
    <script src='./../assets/javascripts/theme.js'></script>

    <script src="./../assets/javascripts/poster.js"></script>
</body>

</html>