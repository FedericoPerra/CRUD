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
$id=$_POST['id'];

$sql = "UPDATE credenziali SET Nome='$nome', Cognome='$cognome', Email='$email' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();