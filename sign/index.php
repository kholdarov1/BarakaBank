<?php

    $user = $_POST['user'];
    $password = $_POST['password'];

    include_once '../database.php';

    $result = mysqli_query($conn, "SELECT * FROM `user` WHERE user = '$user' && password = '$password';");

    if (mysqli_num_rows($result)===1){
            header("Location: ../Barakabank.php");
    }
    else{
        header("Location: ../sign.php");
    }

?>

