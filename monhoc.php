<?php
include("connect.php");

$result = [
    "monhoc"=>[]
];

$user_id =isset($_GET['user_id']) ? $_GET['user_id'] : '';

if ($username == '') {

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