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

$sqlQuery = "SELECT * from person";

$resultSet = mysqli_query($connection, $sqlQuery);

if($resultSet === false) :
    echo mysqli_error();
    exit;
 else :
    $personList = mysqli_fetch_all($resultSet);
    foreach ($personList as $person) :
        foreach ($person as $p) :
            echo $p; ?>

    <br><br>

    <?php
        endforeach;
        endforeach;
        endif;
        ?>
