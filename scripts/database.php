<?php
    //database.php
    $db_location = "localhost";
    $db_username = "student215";
    $db_password = "orange";
    $db_database = "student215";
    $db_connection = mysql_connect($db_location,$db_username,$db_password)
        or die ("Error - Could not connect to MySQL Server");
    $db = mysql_select_db($db_database,$db_connection)
        or die ("Error - Could not open database");
?>
