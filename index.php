<?php 
include("connect.php");

$myArr = [
    "John"=>[1,2,3,4,5]
];

$myJSON = json_encode($myArr);

echo $myJSON;

