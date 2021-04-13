<?php
session_start();
$postFile = fopen("posts.txt", "a+") or die("Unable to access posts!");
$input = '<div class="post-card"><p class="header"> '.$_POST["header"].' </p> <p class="author"> '.$_SESSION["userLogIn"].' </p><p> '.$_POST["paragraph"].' </p></div>'.PHP_EOL;
fwrite($postFile, $input);
header("Location: ../post.php");
?>