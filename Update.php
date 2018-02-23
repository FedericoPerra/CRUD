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
<div class="container col" id="aggiorna">
    <div class="page-header text-center">
        <h2>Modifica il record:</h2>
    </div>
    <br>
    <div class="container col-xs-8 col-lg-3">
        <input type="hidden" id="id" value="<?php echo $_GET['id'];?>">
        <div class="form-group">
            <label for="nm">Nome:</label>
            <input type="text" class="form-control" name="name" id="nm" value="<?php echo $_GET['nome'];?>" required>
        </div>
        <div class="form-group">
            <label for="cnm">Cognome:</label>
            <input type="text" class="form-control" name="surname" id="cnm" value="<?php echo $_GET['cognome'];?>" required>
        </div>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" name="Email" id="mail" value="<?php echo $_GET['email'];?>">
        </div>
        <br>
        <div class="btn-group-vertical">
            <button type="submit" class="btn btn-success" id="insert" onclick="InviaUpdate(document.getElementById('id'),document.getElementById('nm').value,document.getElementById('cnm').value,document.getElementById('mail').value)"><span class="glyphicon glyphicon-ok"></span> Inserisci</button>
            <button type="submit" class="btn btn-danger" onclick="Annulla();"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
</div>
</body>
</html>