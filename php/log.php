<?php
session_start();
require_once 'connection.php';
global $conn;

$email = $_POST['email_log'];
$password = $_POST['password_log'];
$success = true;


$sql = getArrayQuery("SELECT Email , Password FROM User WHERE Email ='$email';");

$user_row = $sql[0];
$hash = $user_row['Password'];
$result = password_verify($password,$hash);
$email_db = $user_row['Email'];

if(empty($email)){
    $_SESSION['msg-email-err'] = 'You must enter your Email';
    $success = false;
}

if($email != $email_db){
    $_SESSION['msg-email-err'] = 'We don`t have this Account, please Register';
    $success = false;
    header('Location: ../login.php');
    exit();
}

if(empty($password)){
    $_SESSION['msg-pass-err'] = 'You must enter your Password';
    $success = false;
}

if(!$result){
    $_SESSION['msg-pass-err'] = 'You must enter your right Password';
    $success = false;
}

if($success){
    $_SESSION['msg-succ'] ='You Log in';
    header('Location: ../account.php');
    exit;
}

header('Location: ../login.php');