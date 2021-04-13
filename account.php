<?php
	include_once "header.php";
?>
        <div class="text">
			<p> <?php print $_SESSION['userLogIn'] ?> </p>
			<!--<p> <?php print $_SESSION['testpassword']; ?> </p>-->
			<a class="sButton" href="newPost.php"> New Post </a>
        </div>
<?php
	include_once "footer.php";
?>