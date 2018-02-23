<?php
if(isSet($_GET['nome'])&&isSet($_GET['cognome'])&&isSet($_GET['email'])) {
    if(isValidEmail($_GET['email'])) {
        include("config.php");
        $nome = htmlentities(mysqli_escape_string($conn, $_GET['nome']));
        $cognome = htmlentities(mysqli_escape_string($conn, $_GET['cognome']));
        if (!isValidWord($nome) && !isValidWord($cognome)) {
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
        else{
            echo "Il nome e il cognome non possono contenere caratteri speciali";
        }
    }
    else{
        echo "<h2>Email non corretta</h2>";
    }
}

function isValidEmail($email){
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";

    if (eregi($pattern, $email)){
        return true;
    }
    else {
        return false;
    }
}

function isValidWord($word){
    $pattern = "/^[a-zA-Z\s]/";

    if (eregi($pattern, $word)){
        return true;
    }
    else {
        return false;
    }
}

?>