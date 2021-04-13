<?php
	include_once "header.php";
?>
        <div class="posts">
        <?php
        $postArr = file("./misc/posts.txt");
        $postArr = array_reverse($postArr);
        foreach($postArr as $f){
                echo $f;
        }
        ?>
        </div>
<?php
	include_once "footer.php";
    ?>