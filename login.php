<?php
include("connect.php");

$result = false;

$username = isset($_GET['username']) ? $_GET['username'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

if ($username == '' || $password == '') {

    $query = "SELECT * FROM `users` WHERE username ='" . $username . "' and password ='" . $password . "';";

    $check = $DB->query($query)->num_rows;

    if ($check == 1) {
        $result = true;
    } else {
        $result = false;
    }
    echo json_encode(["login" => $result]);
}
else{
    echo json_encode(["login" => $false]);
}