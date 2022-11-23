<?php

function checkIfPassMatch($connect, $user, $pass)
{
    $check = mysqli_query($connect, "SELECT * FROM `profesores` WHERE `mail` like '$user' and `password` like '$pass'");
    if (mysqli_num_rows($check)) {
        return true;
    } else {
        return false;
    }
}

function checkIfExists($user, $connect)
{
    $check = mysqli_query($connect, "SELECT * FROM `profesores` WHERE `mail` like '$user'");
    if (mysqli_num_rows($check)) {
        return true;
    } else {
        return false;
    }
}

?>