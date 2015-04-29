<?php
    require_once(__DIR__ . "/../model/config.php");    
    
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "password char (128) NOT NULL,"
            . "salt char (128) NOT NULL,"
            . "exp in(4),"
            . "exp1 in(4),"
            . "exp2 in(4),"
            . "exp3 in(4),"
            . "exp4 in(4),"
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>Successfully created tabel: users</p>";
    }
    else{
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }