<?php
session_start();
require_once 'connection.php';
global $conn;

$email = $_POST['email'];
$f_name = $_POST['firstName'];
$s_name = $_POST['secondName'];
$password = $_POST['password_reg'];
$password_conf = $_POST['password_conf'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$success = true;

$sql = "SELECT Email FROM User";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]."Email" . $row["Email"]. "<br>";
}
die();

if (empty($password) || empty($password_conf)) {
    $success = false;
    $_SESSION['msg-err'] = 'You need enter password and confirm password inputs!';
}
if ($password !== $password_conf) {
    $success = false;
    $_SESSION['msg-err'] ='Password is not correct';
}

if ($success) {
    $_SESSION['msg-succ'] ='You Registered';
    mysqli_query($conn , "INSERT INTO `User` (`Email`,`LastName`,`FirstName`,`Password`) VALUES ('$email','$f_name','$s_name','$password_hash')");
}
header('Location: ../login.php');
