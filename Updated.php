<?php
if(isSet($_GET['nome'])&&isSet($_GET['cognome'])&&isSet($_GET['email'])) {
    include("config.php");
    $nome = htmlentities(mysqli_escape_string($conn, $_GET['nome']));
    $cognome = htmlentities(mysqli_escape_string($conn, $_GET['cognome']));
    $email = htmlentities(mysqli_escape_string($conn, $_GET['email']));
    $id = $_GET['id'];

    $sql = "UPDATE credenziali SET Nome='$nome', Cognome='$cognome', Email='$email' WHERE id='$id'";

    if ($conn->query($sql) == TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

?>