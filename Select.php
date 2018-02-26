<?php
include("config.php");

$sql = "SELECT id, Nome, Cognome, Email FROM Credenziali";
$result = $conn->query($sql);

echo "
    <thead>
    <tr>
    <th bgcolor='#4cae4c'>id</th>
    <th bgcolor='#4cae4c' onclick=\"sorting(1);\">Nome</th>
    <th bgcolor='#4cae4c' onclick=\"sorting(2);\">Cognome</th>
    <th bgcolor='#4cae4c' onclick=\"sorting(3);\">Email</th>
    <th bgcolor='#4cae4c'>Aggiorna</th>
    <th bgcolor='#4cae4c'>Elimina</th>
    </tr>
    </thead>";
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
        echo "<td><button type=\"submit\" class=\"btn btn-primary\" name='btnUpdate' onclick='Updating(\"$riga\", \"$nome\", \"$cognome\", \"$email\");'><span class=\"glyphicon glyphicon-pencil\"></span> Aggiorna</button></td>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<td><button type=\"submit\" class=\"btn btn-danger\" name='btnDelete' onclick='Delete(\"$riga\");'><span class=\"glyphicon glyphicon-remove\"></span> Elimina</button></td>";
        echo "</tr>";
    }
}

$conn->close();