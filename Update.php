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
    <div class="page-header text-center col">
        <h2>Modifica il record:</h2>
    </div>

    <div class="container col-lg-4 col">
        <input type="hidden" id="id" value="<?php echo $_GET['id'];?>">
        <label for="nm">Nome:</label>
        <input type="text" class="form-control" name="name" id="nm" value="<?php echo $_GET['nome'];?>" required>
    </div>

    <div class="container col-lg-4 col">
        <label for="cnm">Cognome:</label>
        <input type="text" class="form-control" name="surname" id="cnm" value="<?php echo $_GET['cognome'];?>" required>
    </div>

    <div class="container col-lg-4 col">
        <label for="mail">Email:</label>
        <input type="email" class="form-control" name="Email" id="mail" value="<?php echo $_GET['email'];?>">
    </div>
    <br>

    <div class="container col-lg-4 col">
        <br>
        <button type="submit" class="btn btn-success" id="insert" onclick="InviaUpdate($('#id').val(), $('#nm').val(), $('#cnm').val(),$('#mail').val());"><span class="glyphicon glyphicon-ok"></span> Inserisci</button>
        <button type="submit" class="btn btn-danger" onclick="Annulla();"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
    </div>
</body>
</html>