<?php

include('dbadmin.php');

global $DB_USER;
global $DB_SERVER;
global $DB_DATABASE;
global $DB_PASSWORD;


$link = mysqli_connect( $DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_DATABASE)  // conecting with serwer
    or die("Помилка підключення #" .mysqli_connect_errno(). PHP_EOL);


mysqli_close($link); // close connect

?>
