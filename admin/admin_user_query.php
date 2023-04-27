<?php
    include("connect.php");

    $query = "SELECT * FROM user";

    $result = $conn->query($query);

    $data_arr = array();

    while($row = $result->fetch_object()){
        array_push($data_arr, $row);
    }
    echo json_encode($data_arr)
?>