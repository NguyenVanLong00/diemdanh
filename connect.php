<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="diemdanh";

// Create connection
$DB = new mysqli($servername, $username, $password,$database);

// Check connection
if ($DB->connect_error) {
  die("Connection failed: " . $DB->connect_error);
}
