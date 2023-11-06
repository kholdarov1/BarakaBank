<?php
    include_once '../database.php';

    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO `user` (`user`, `password`, `email`) VALUES ('$user', '$password', '$email');");

    header("Location:  ../sign.php");
    exit();
    ?>