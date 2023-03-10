<?php
session_start();
require_once 'connection.php';
global $conn;

$email = $_POST['email_reg'];
$f_name = $_POST['firstName'];
$s_name = $_POST['secondName'];
$password = $_POST['password_reg'];
$password_conf = $_POST['password_conf'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$success = true;

$sql = getArrayQuery("SELECT Email FROM User WHERE Email = '$email';");
$count = count($sql);

if(empty($email)){
    $success = false;
    $_SESSION['msg-email-err'] = 'You must enter your email';
}

if($count > 0) {
    $success = false;
    $_SESSION['msg-email-err'] = 'This Email is already used';
}

if(empty($f_name)){
    $success = false;
    $_SESSION['msg-name-err'] ='You must write your name (pls)';
}

if (empty($password) || empty($password_conf)) {
    $success = false;
    $_SESSION['msg-pass-err'] = 'You need enter password and confirm password inputs!';
}

if ($password !== $password_conf) {
    $success = false;
    $_SESSION['msg-pass-err'] ='Password is not correct';
}

if(strlen($password) < 8){
    $success = false;
    $_SESSION['msg-pass-err'] ='Symbols must be more than Eight';
}

if ($success) {
    $_SESSION['msg-succ'] ='You Registered';
    mysqli_query($conn , "INSERT INTO `User` (`Email`,`LastName`,`FirstName`,`Password`) VALUES ('$email','$f_name','$s_name','$password_hash')");

}

header('Location: ../registration.php');