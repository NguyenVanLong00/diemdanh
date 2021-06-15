<?php
include("connect.php");

$result = false;

$name = isset($_GET['name'])?$_GET['name']:'';
$image = isset($_GET['image'])?$_GET['image']:'';

$username = $_GET['uname'];
$password = $_GET['pword'];

$query = "INSERT INTO `users`(`name`, `user_image`, `username`, `password`) VALUES ('".$name."','".$image."','".$username."','".$password."')";

$check = $DB->query($query);

if($check===true){
    $result=true;
} else {
    $result=false;
}

echo json_encode(["register"=>$result]);
