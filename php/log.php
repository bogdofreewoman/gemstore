<?php
session_start();
require_once 'connection.php';
global $conn;

$email = $_POST['email_log'];
$password = $_POST['password_log'];
$success = true;
$password = password_verify($password, PASSWORD_DEFAULT);

$sql = getArrayQuery("SELECT Email , Password FROM User WHERE Email ='$email';");

//if()