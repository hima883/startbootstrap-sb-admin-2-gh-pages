<?php

$SERVER = "localhost";
$USER = "root";
$PASS = "";
$DB = "sb_admin";

$conn = new mysqli($SERVER, $USER, $PASS, $DB);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
} else {
    echo "Connected Successfully";
}

?>