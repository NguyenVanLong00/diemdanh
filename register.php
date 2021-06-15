<?php
include("connect.php");

$result = false;

$name = isset($_GET['name']) ? $_GET['name'] : '';
$image = isset($_GET['image']) ? $_GET['image'] : '';

$username = isset($_GET['username']) ? $_GET['username'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

if ($username == '' || $password == '') {

    $query = "INSERT INTO `users`(`name`, `user_image`, `username`, `password`) VALUES ('" . $name . "','" . $image . "','" . $username . "','" . $password . "')";

    $check = $DB->query($query);

    if ($check === true) {
        $result = true;
    } else {
        $result = false;
    }

    echo json_encode(["register" => $result]);
}else {
    echo json_encode(["register" => false]);
}
