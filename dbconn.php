<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    #connection
    $dbconn = new mysqli($servername, $username, $password, $dbname);
    if ($dbconn->connect_error) {
        echo(die("Connection Failed: " . $dbconn->connect_error));
    } 
    // else {
    //     echo '<p class="stats">' . "DB Name : \n" . $dbname . " \n <br><br>" . "DB Connection Status : Connected Successfully </p>";
    // }
?>