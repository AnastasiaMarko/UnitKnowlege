<?php
$host = 'localhost'; // adress of server
$database = 'unitknowlege'; // name of DB
$user = 'root'; // name user
$password = ''; // password


$link = mysqli_connect($host, $user, $password, $database)  // conecting with serwer
    or die("Помилка" . mysqli_error($link));



mysqli_close($link); // close connect
?>
