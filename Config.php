<?php
$servername="localhost";
$username="normalUser";
$password="normalUser";
$dbname="utenti";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}