<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'projekt';

    $database = mysqli_connect($server, $username, $password, $database_name) or die('Error prilikom spajanja na bazu podataka: ' . mysqli_error());

?>