<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | DiciiArt</title>
    <link rel="icon" href="./../assets/imgs/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../app.css">
    <link rel="stylesheet" href="./../assets/css/post.page.css">
</head>

<body>
    <?php require_once('./../components/Navbar.php'); ?>
    <?php require_once('./../components/Sidebar.php'); ?>

    <main class="main_page">
        <div class="container">
            <h1>Let Post</h1>
            <form id="post_form" enctype="multipart/form-data">
                <!-- <label for="album">In album:</label>
                <textarea id="album" name="album" required></textarea> -->

                <label for="title">Title:</label>
                <input type="text" id="title" name="title">

                <label for="image">NFT:</label>
                <input type="file" id="image" name="image" accept="image/*">

                <div class="image-preview">
                    <img id="imagePreview" src="#" alt="">
                </div>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4"></textarea>

                <button type="submit">Post</button>
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

    <script src="./../assets/javascripts/post.js"></script>
</body>

</html>