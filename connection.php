<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "test";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
// if ($conn)
//     echo "Connected to Database";
