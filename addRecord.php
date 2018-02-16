<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utenti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nome=$_POST['name'];
$cognome=$_POST['surname'];
$email=$_POST['Email'];

$sql = "INSERT INTO credenziali (Nome, Cognome, Email) VALUES ('$nome','$cognome','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();