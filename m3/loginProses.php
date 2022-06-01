<?php

$contsusername = "ricogann";
$contspassword = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

if($contsusername != $username && $contspassword != $password){
    echo '<script>alert("username/password salah!");</script>';
}else{
    header("location: home.php");
}

?>