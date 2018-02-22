<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Sorter.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Research.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
<form method="post" action="addRecord.php">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">TabellaCRUD</a>
            </div>
            <ul class="nav navbar-form navbar-right col-lg-3">
                <div class="form-group has-feedback">
                    <input type='text' id='research' class='form-control' onkeyup='Ricerca();' placeholder='cerca'>
                    <i class="glyphicon glyphicon-search form-control-feedback"></i>
                </div>
            </ul>
        </div>
    </nav>
<div class="container">
    <h1 id="button"><button type="submit" class="btn success" data-toggle="tooltip" data-placement='bottom' title="premi il bottone per aggiungere un record"><span class="glyphicon glyphicon-plus"></span> Aggiungi un record</button></h1>
    <br>
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
        echo "<td><button type=\"submit\" class=\"btn btn-primary\" name='btnUpdate' data-toggle='tooltip' data-placement='bottom' title='premi il bottone per aggiornare il record'><span class=\"glyphicon glyphicon-pencil\"></span> Aggiorna</button></td>";
        echo"</form>";
        echo "<form action='Delete.php' method='post'>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<td><button type=\"submit\" class=\"btn btn-danger\" name='btnDelete' data-toggle='tooltip' data-placement='bottom' title='premi il bottone per eliminare il record'><span class=\"glyphicon glyphicon-remove\"></span> Elimina</button></td>";
        echo "</form>";
        echo "</tr>";
    }
}
$control=false;
echo "
</table>
</div>
</body>
</html>";

$conn->close();

?>
