<?php

function checkIfExists($user, $connect)
{
    echo "<br>";
    echo "user: ". $user;
    echo "<br>";
    $check = mysqli_query($connect, "SELECT * FROM `profesores` WHERE `mail` like '$user'");
    if (mysqli_num_rows($check)) {
        return true;
    } else {
        return false;
    }
}

?>