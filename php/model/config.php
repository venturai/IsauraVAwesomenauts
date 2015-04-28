<?php
    require_once(__DIR__ . "/Database.php");
    session_start();
    $path = '/AwesomenautsAlexL/php/';
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "awesomenauts_db";

    if(!isset($_SESSION["connection"])) {
        echo 'building';
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }