<?php
	include_once "header.php";
?>
        <div class="text">
            <div class="postWrapper">
                <form id="newPost" method="POST" action="/misc/newPost.inc.php">
                    <p>Header</p>
                    <input id="postHeader" type ="text" name="header" autofocus>
                    <p>Text</p>
                    <textarea id="postText" name="paragraph" form="newPost"></textarea>
                    <a class="sButton" id="postNew"> Post </a>
                </form>
            </div>    
        </div>
<?php
	include_once "footer.php";
?>