<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "web2";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die('Could not Connect to My Sql:' . mysql_error());
    }
?>
