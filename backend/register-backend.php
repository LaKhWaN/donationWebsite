<?php 
include_once "../connection.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $con->query($sql);
if($result->num_rows > 0){
    echo "Username already exists";
} else {
    if($password == $confirm_password){
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $con->query($sql);
        header("Location: ../login.php");
    } else header("Location: ../register.php");
}
?>