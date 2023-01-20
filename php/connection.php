<?php
$servername = "localhost";
$username = "bogdan";
$database = "gemstone";
$password = "123";

$conn = new mysqli ($servername,$username,$password,$database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
function getArrayQuery($query){
    global $conn;
    $array = array();
    $conn->real_query($query);
    $result = $conn->use_result();

    if($result){
        while($row = $result->fetch_array(MYSQLI_ASSOC) ){
            $array[] = $row;
        }
    }
    return $array;
}
