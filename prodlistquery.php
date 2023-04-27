<?php 
    include("connect.php");

    if(isset($_GET['prodneym'])){
        $prodsearch = "WHERE user_fname LIKE '%{$_GET['prodneym']}%'";
    }else{
        $prodsearch = "";
    }

    $query = "SELECT * FROM user $prodsearch";

    $result = $conn->query($query);

    $data_arr = array();

    while($row = $result->fetch_object()){
        array_push($data_arr, $row);
    }
    echo json_encode($data_arr);
?>