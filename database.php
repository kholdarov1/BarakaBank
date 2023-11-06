<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbname = "barakabank";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbname);
if(!$conn) {
    die("Nimadir noto'g'ri bajarildi;");
}


?>