<?php
include("config.php");

$sql = "SELECT id, Nome, Cognome, Email FROM Credenziali";
$result = $conn->query($sql);

echo "<tr>
    <th bgcolor='yellow'>id</th>
    <th bgcolor='yellow' onclick=\"sorting(1);\">Nome</th>
    <th bgcolor='yellow' onclick=\"sorting(2);\">Cognome</th>
    <th bgcolor='yellow' onclick=\"sorting(3);\">Email</th>
    <th bgcolor='yellow'>Aggiorna</th>
    <th bgcolor='yellow'>Elimina</th>
    </tr>";
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $riga=$row['id'];
        $nome=$row['Nome'];
        $cognome=$row['Cognome'];
        $email=$row['Email'];

        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td onclick='sorting(1);'>".$row['Nome']."</td>";
        echo "<td onclick='sorting(2);'>".$row['Cognome']."</td>";
        echo "<td onclick='sorting(3);'>".$row['Email']."</td>";
        echo "<td><button type=\"submit\" class=\"btn btn-primary\" name='btnUpdate' data-toggle='tooltip' data-placement='bottom' title='premi il bottone per aggiornare il record' onclick='Updating(\"$riga\", \"$nome\", \"$cognome\", \"$email\");'><span class=\"glyphicon glyphicon-pencil\"></span> Aggiorna</button></td>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<td><button type=\"submit\" class=\"btn btn-danger\" name='btnDelete' data-toggle='tooltip' data-placement='bottom' title='premi il bottone per eliminare il record' onclick='Delete(\"$riga\");'><span class=\"glyphicon glyphicon-remove\"></span> Elimina</button></td>";
        echo "</tr>";
    }
}

$conn->close();