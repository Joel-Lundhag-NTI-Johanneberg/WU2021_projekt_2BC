<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script src="./js/main.js" async></script>
    <script src="./js/key.js" async></script>
    <?php session_start(); ?>

    <meta name="robots" content="joel, portfolio, jonna, wip, blog">
    <meta name="description" content="A work in progress website which has been created as the final project in webdevelopment one">

    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <nav>
        <a class="burger-menu-btn"><img class="burger-menu-btn" src="./img/menu-icon.svg"></a>
        <div class="burger-menu">
            <a href="/">Home</a>
            <a href="post.php">Posts</a>
            <a href="#">temp</a>
            <a href="#">temp</a>
            <a href="#">temp</a>
        </div>
        <?php 
            if ($_SESSION['userLogIn'] != null) {
                echo
                '<a class="btn-accordion">' ."{$_SESSION['userLogIn']}". '<img src="./img/Arrow-down.svg"></a>
                <ul class="accordion"> 
                    <li> <a id="signedIn" href="account.php">Your account</a> </li>
                    <li> <a id="logOut" href="./misc/logOut.inc.php">Log Out</a> </li>
                </ul>';
                $_SESSION['url'] = $_SERVER['PHP_SELF'];
            }
            else {
                print '<a id="logIn" href="logIn.php">Log In</a>';
            }
        ?>
    </nav>
    <div class="container">
    <div class="deselect"></div>