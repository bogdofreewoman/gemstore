<?php
session_start();
require_once 'connection.php';
global $conn;

$email = $_POST['email_log'];
$password = $_POST['password_log'];
$password = password_verify($password, PASSWORD_DEFAULT);
$success = true;

$sql = getArrayQuery("SELECT Email , Password FROM User WHERE Email ='$email';");

$user_row = $sql[0];
var_dump($user_row['Password']);
//var_dump($sql);


//if(empty($email)){
//    $_SESSION['msg-email-err'] = 'You must enter your email';
//    $success = false;
//}
//
//if(empty($password)){
//    $_SESSION['msg-pass-err'] = 'You must enter your email';
//    $success = false;
//}
//
//if()
//
//if($success){
//    $_SESSION['msg-succ'] ='You Log in';
//
//}
//
//header('Location: ../login.php');