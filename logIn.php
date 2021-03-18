<?php
	include_once "header.php";
?>
        <div class="text">
            <form id="logDiv" method="POST" action="/misc/logIn.inc.php">
                <div>
                    <p>Username</p>
                    <input id="user" type ="text" name="user" autofocus>
                </div>
                <div>
                    <p>Password</p>
                    <input id="pass" type="password" name="password">
                    <a class="sButton" id="logInPage"> Log In</a>
                </div>
                <div>
                    <br>
                    <p> Trial account Username: tester </p>
                    <p> Trial account Password: tstpass </p>
                </div>
            </form>
        </div>
<?php
	include_once "footer.php";
?>