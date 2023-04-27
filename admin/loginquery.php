<?php
    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['loginsubmit'])) {

        if($username == "" || $password == "") {
            echo "Either username or password field is empty.";
            echo "<br/>";
            echo "<a href='LogIn.php'>Go back</a>";
        } else {
            $query = "SELECT user_fname, username FROM user WHERE username = '$username' AND password = sha1('$password')";

            $result = $conn->query($query);
                            
            $row = $result->fetch_object();
                            
            if(is_array($row) && !empty($row)) {
                $_SESSION['name'] = $row->user_fname;
            } else {
                echo "Invalid username or password.";
                echo "<br/>";
                echo "<a href='LogIn.php'>Go back</a>";
            }

            if(isset($_SESSION['name'])) {
                header('Location: admin.php');			
            }
        }
    }
?>