<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_inut(INPUT_POST , "password", FILTER_SANITIZE_STRING);
    
    
    $salt = "$5$" . "rounds=5000" . uniqid(mt_rand(), true) . "$";
    
    $hashedPassword = crypt($password, $salt);
    
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email= '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt', ")
            . "exp = 0, "
            . "exp1 = 0, "
            . "exp2 = 0, "
            . "exp3 = 0, "
            . "exp4 = 0, ");
    
    $_SESSION["name"] = $username;
    
    if($query) {
        //Need this fr ajax on idec.php
        echo "true";
    }
    else {
       $_SESSION["name"] = $username;
    }

