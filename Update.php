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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="index.php">
    <br>
    <div class="container col-xs-8 col-lg-3">
        <div class="form-group">
            <label for="insert">RETURN AT HOME PAGE:</label>
            <input type="submit" class="form-control" id="insert">
        </div>
    </div>
</form>
</body>
</html>
