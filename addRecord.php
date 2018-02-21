<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="">
    <div class="page-header">
        <h2>Aggiungi un record:</h2>
    </div>
    <div class="container col-xs-8 col-lg-3">
        <div class="form-group">
            <label for="nm">Nome:</label>
            <input type="text" class="form-control" name="name" id="nm" required>
        </div>
        <div class="form-group">
            <label for="cnm">Cognome:</label>
            <input type="text" class="form-control" name="surname" id="cnm" required>
        </div>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" name="Email" id="mail">
        </div>
        <div class="form-group">
            <label for="insert">INSERISCI:</label>
            <input type="submit" class="form-control" id="insert">
        </div>
    </div>
</form>
</body>
</html>

<?php
if(isSet($_POST['name'])&&isSet($_POST['surname'])&&isSet($_POST['Email'])) {
    if(isValidEmail($_POST['Email'])) {
        include("config.php");
        $nome = htmlentities(mysqli_escape_string($conn, $_POST['name']));
        $cognome = htmlentities(mysqli_escape_string($conn, $_POST['surname']));
        if (!isValidWord($nome)&&!isValidWord($cognome)) {
            $email = htmlentities(mysqli_escape_string($conn, $_POST['Email']));

            $sql = "INSERT INTO credenziali (Nome, Cognome, Email) VALUES ('$nome','$cognome','$email')";

            if ($conn->query($sql) == TRUE) {
                echo "<h2>New record created successfully</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            header('Location: http://localhost/tabellaCRUD/CRUD/index.php');
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


