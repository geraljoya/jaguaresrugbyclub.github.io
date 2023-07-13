<?php

    $mysqli = new MySQLi("localhost", "root","", "clubjaguar");
    if ($mysqli -> connect_errno) {
    die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());
    }else
    $cn = mysqli_connect("localhost","root","","clubjaguar") or die("Error");
?>