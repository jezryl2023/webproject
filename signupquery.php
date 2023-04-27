<?php 
    include("connect.php");

    $pl = $_POST['lname'];
    $pf = $_POST['fname'];
    $pa = $_POST['address'];
    $pe = $_POST['email'];
    $pu = $_POST['username'];
    $pp = $_POST['password'];

    $sql = "INSERT INTO user(user_lname, user_fname, user_address, user_email, username, password) VALUES('$pl','$pf','$pa','$pe','$pu',sha1('$pp'))";

    $result = $conn->query($sql);

    if($result==true){
        echo "<script>alert('User Info Saved!')</script>";
        echo "<script>window.location ='prodlist.php'</script>";
    }
    else{
        echo "<script>alert('Save Failed.')</script>";
    }
?>