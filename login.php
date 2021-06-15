<?php
include("connect.php");

$result = false;

$username = $_GET['uname'];
$password = $_GET['pword'];


$query = "SELECT * FROM `users` WHERE username ='".$username."' and password ='".$password."';";

$check = $DB->query($query)->num_rows;

if($check==1){
    $result=true;
} else {
    $result=false;
}

echo json_encode(["login"=>$result]);
