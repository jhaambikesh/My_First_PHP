<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$db_name = "php_blog";

$connection = mysqli_connect($hostname, $username, $password, $db_name);

if(mysqli_connect_error()) {
    echo mysqli_connect_error() ;
    exit;
}

echo "Database Connected Successfully";