<?php

include_once "../connection.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT password FROM users WHERE username = '$username'";
$result = $con->query($sql);
if($result->num_rows == 1){
    if($result->fetch_assoc()['password'] == $password){
        session_start();
        $_SESSION['auth'] = true;
        header("Location: ../index.php");
    } else header("Location: ../login.php");
} else{
    header("Location: ../login.php");
}
?>