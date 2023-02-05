<?php
session_start();
require_once 'connection.php';
global $conn;

$password = $_POST['password_log'];
$email = $_POST['email_log'];

if(empty($email) || empty($password)){
    $_SESSION['msg-email-err'] = 'You must enter all fields';
    exit();
}

$sql = getArrayQuery("SELECT Email , Password FROM User WHERE Email = '".$email."';");
if ($sql) {
    $user_row = $sql[0];
    $result = password_verify($password, $user_row['Password']);

    if($email = 'ADMIN' and $result = true){
        $_SESSION['ADMIN'] = $admin_row;
        header('Location: ../admin.php');
        exit;
    }

    if ($result) {
        $_SESSION['USER'] = $user_row;
        header('Location: ../account.php');
        exit;
    }
}
$_SESSION['msg-email-err'] = 'Incorrect email or password';
header('Location: ../login.php');