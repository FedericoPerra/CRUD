<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script language="JavaScript" type="text/JavaScript" src="scripts/Sorter.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Research.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/CreateTable.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onload="Create();">
<form method="post" action="addRecord.php">
<div class="page-header text-center">
    <h2>Tabella CRUD con libreria bootstrap</h2>
</div>
<div class="container">
    <h1 id="button"><button type="submit" class="btn success" formaction="addRecord.php">Aggiungi un record</button></h1>
    <table class="table table-hover" id="id_table">
        <tr>
            <th>id</th>
            <th onclick="sorting(1);">Nome</th>
            <th onclick="sorting(2);">Cognome</th>
            <th onclick="sorting(3);">Email</th>
            <th>Aggiorna</th>
            <th>Elimina</th>
        </tr>
</form>

<?php
include("config.php");

$sql = "SELECT id, Nome, Cognome, Email FROM Credenziali";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $riga=$row['id'];
        $nome=$row['Nome'];
        $cognome=$row['Cognome'];
        $email=$row['Email'];
        echo "<form action='Update.php' method='post'>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<input type='hidden' name='name' value=$nome>";
        echo "<input type='hidden' name='surname' value=$cognome>";
        echo "<input type='hidden' name='email' value=$email>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td onclick='sorting(1);'>".$row['Nome']."</td>";
        echo "<td onclick='sorting(2);'>".$row['Cognome']."</td>";
        echo "<td onclick='sorting(3);'>".$row['Email']."</td>";
        echo "<td><button type=\"submit\" class=\"btn btn-primary\" name='btnUpdate'>Aggiorna</button></td>";
        echo"</form>";
        echo "<form action='Delete.php' method='post'>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<td><button type=\"submit\" class=\"btn btn-danger\" name='btnDelete'>Elimina</button></td>";
        echo "</form>";
        echo "</tr>";
    }
}
echo "
</table>
<br>
<div class='form-group'>
    <label for='research'>Cerca:</label>
    <input type='text' id='research' class='form-control' onkeyup='Ricerca();'>
</div>   
</body>
</html>";

$conn->close();

?>
