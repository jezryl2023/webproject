<?php 
    // include("connect.php");

    // $pl = $_POST['lname'];
    // $pf = $_POST['fname'];
    // $pa = $_POST['address'];
    // $pe = $_POST['email'];
    // $pu = $_POST['username'];
    // $pp = $_POST['password'];

    // $sql = "INSERT INTO user(user_lname, user_fname, user_address, user_email, username, password) VALUES('$pl','$pf','$pa','$pe','$pu',sha1('$pp'))";

    // $result = $conn->query($sql);

    // if($result==true){
    //     echo "<script>alert('User Info Saved!')</script>";
    //     echo "<script>window.location ='LogIn.php'</script>";
    // }
    // else{
    //     echo "<script>alert('Save Failed.')</script>";
    // }
?>

<?php
    include('connect.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $query = "INSERT INTO user(user_lname, user_fname, user_address, user_email, username, password) VALUES('$lname', '$fname', '$address', '$email', '$username', sha1('$password'))";

    $result = $conn->query($query);

    if($result==true){
        echo "<script>alert('Sign Up Completed!')</script>";
        echo "<script>window.location ='LogIn.php'</script>";
    }
    else{
        echo "<script>alert('Save Failed.')</script>";
    }
?>