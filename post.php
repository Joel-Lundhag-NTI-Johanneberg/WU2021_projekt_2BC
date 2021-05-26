<?php
	include_once "header.php";
?>
        <div class="posts">
        <?php
        // $postArr = file("./misc/posts.txt");
        // $postArr = array_reverse($postArr);
        // foreach($postArr as $f){
        //         echo $f;
        // }

        include_once "./misc/dbc.inc.php";
        $result = mysqli_query($con, "SELECT `post` FROM `posts`");
        while ($row = $result->fetch_row()) {
                $postArr[] = $row;
        }
        $postArr = array_reverse($postArr);
        for($i=0; $i!=count($postArr); $i++){
                echo $postArr[$i][0];
        }
        ?>
        </div>
<?php
	include_once "footer.php";
    ?>