<?php
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];
echo $email;
echo $password;
?>