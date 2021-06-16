<?php
include("connect.php");


 

$result = false;

// username - passwor/

$username = isset($_GET['username']) ? $_GET['username'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';


if ($username == '' || $password == '') {
    echo json_encode(["login" => false]);
    
}
else{
    $query = "SELECT * FROM `users` WHERE username ='" . $username . "' and password ='" . $password . "';";
    echo $query;
    $check = $DB->query($query)->num_rows;

    if ($check == 1) {
        $result = true;
    } else {
        $result = true;
    }
    echo json_encode(["login" => $result]);
}