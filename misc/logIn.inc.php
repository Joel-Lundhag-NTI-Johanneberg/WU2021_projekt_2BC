<?php
    $file = 'info.txt';
    $searchfor = $_POST["user"];

    header('Content-Type: text/plain');

    // get the file contents, assuming the file to be readable (and exist)
    $contents = file_get_contents($file);
    // escape special characters in the query
    $pattern = preg_quote($searchfor, '/');
    // finalise the regular expression, matching the whole line
    $pattern = "/^.*$pattern.*\$/m";
    // search, and store all matching occurences in $matches
    if(preg_match_all($pattern, $contents, $matches)){
        $matches = implode($matches[0]);
        // check password match
        $passwords = preg_split("/[\s\s]+/", $matches);
        verify($passwords);
    }
    else{
        //send back
        header("Location: ../logIn.php");
    }
    function verify($passwords) {
        for($i=0; $i < count($passwords); $i++) {
            if (password_verify($_POST["password"], $passwords[$i])) {
                session_start();
                $_SESSION['userLogIn'] = $passwords[$i-1];
                header("Location: ../account.php");
                //$_SESSION['testpassword'] = password_hash("tstpass", PASSWORD_DEFAULT);
                return;
            }
        }
        header("Location: ../logIn.php");
    }
?>