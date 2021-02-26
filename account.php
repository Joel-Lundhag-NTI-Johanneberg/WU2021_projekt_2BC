<?php
	include_once "header.php";
?>
        <div class="text">

			<p> <?php print ucfirst(strtolower($_SESSION['userLogIn'])); ?> </p>
			<!--<p> <?php print $_SESSION['testpassword']; ?> </p>-->
        </div>
<?php
	include_once "footer.php";
?>