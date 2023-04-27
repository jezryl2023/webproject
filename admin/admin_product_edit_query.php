<?php
include('connect.php');

$product = $_POST['product'];
$type = $_POST['type'];
$price = $_POST['price'];
$id = $_POST['id'];

$query = "UPDATE product SET prod_name='$product', prod_type='$type', prod_price='$price' WHERE prod_id='$id'";


if($conn->query($query)==TRUE){
    echo 'Record updated!';
}
?>