<?php
session_start();
$_SESSION['userLogIn'] = null;
print $_SESSION['url'];
if ($_SESSION['url'] != "/account.php" && $_SESSION['url'] != "/index.php") {
    header("location: ". $_SESSION['url']);
}
else {
    header("location: /");
}