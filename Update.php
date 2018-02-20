<?php
session_start();
if(isSet($_POST['identification'])&&isSet($_POST['name'])&&isSet($_POST['surname'])&&isSet($_POST['identification'])) {
    $_SESSION['id'] = $_POST['identification'];
    $_SESSION['nome'] = $_POST['name'];
    $_SESSION['cognome'] = $_POST['surname'];
    $_SESSION['mail'] = $_POST['email'];
}
?>

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
    <div class="page-header text-center">
        <h2>Modifica il record:</h2>
    </div>
    <br>
    <div class="container col-xs-8 col-lg-3">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
        <div class="form-group">
            <label for="nm">Nome:</label>
            <input type="text" class="form-control" name="name" id="nm" value="<?php echo $_SESSION['nome'];?>" required>
        </div>
        <div class="form-group">
            <label for="cnm">Cognome:</label>
            <input type="text" class="form-control" name="surname" id="cnm" value="<?php echo $_SESSION['cognome'];?>" required>
        </div>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" name="Email" id="mail" value="<?php echo $_SESSION['mail'];?>">
        </div>
        <div class="form-group">
            <label for="up">AGGIORNA:</label>
            <input type="submit" class="form-control" id="up">
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
        $email = htmlentities(mysqli_escape_string($conn, $_POST['Email']));
        $id = $_POST['id'];

        $sql = "UPDATE credenziali SET Nome='$nome', Cognome='$cognome', Email='$email' WHERE id='$id'";

        if ($conn->query($sql) == TRUE) {
            echo "Record updated successfully";
            header('Location: http://localhost/tabellaCRUD/CRUD/index.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
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
?>