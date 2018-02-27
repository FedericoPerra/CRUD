<?php
if(isSet($_GET['nome'])&&isSet($_GET['cognome'])&&isSet($_GET['email'])) {
    include("config.php");
    $nome = htmlentities(mysqli_escape_string($conn, $_GET['nome']));
    $cognome = htmlentities(mysqli_escape_string($conn, $_GET['cognome']));
    $email = htmlentities(mysqli_escape_string($conn, $_GET['email']));

    $sql = "INSERT INTO credenziali (Nome, Cognome, Email) VALUES ('$nome','$cognome','$email')";

    if ($conn->query($sql) == TRUE) {
        echo "<h2>New record created successfully</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


