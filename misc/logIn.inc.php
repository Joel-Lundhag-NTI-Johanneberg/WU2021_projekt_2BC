<?php
require_once "dbc.inc.php";
$user = $_POST["user"];
$result = mysqli_query($con, "SELECT `userPass` FROM `users` WHERE `userName` = '$user'");
$row = $result->fetch_row();
verify($row[0]);


function verify($password) {
    if (password_verify($_POST["password"], $password)) {
        session_start();
        $_SESSION['userLogIn'] = $_POST["user"];
        header("Location: ../account.php");
    }
    else {
        header("Location: ../logIn.php");
    }
}
?>