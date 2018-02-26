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
    <script language="JavaScript" type="text/JavaScript" src="scripts/Alert.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/AJAX.js"></script>
</head>
<body onload="Selection();">
    <nav class="navbar navbar-inverse" id="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">TabellaCRUD</a>
            </div>
            <div id="form">
            </div>
            <div class="container">
            <ul class="nav navbar-form navbar-right">
                <div class="form-group has-feedback">
                    <input type='text' id='research' class='form-control' onkeyup='Ricerca();' placeholder='Cerca...'>
                    <i class="glyphicon glyphicon-search form-control-feedback"></i>
                </div>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 id="button"><button type="submit" class="btn success" onclick="AddRecordMenu();"><span class="glyphicon glyphicon-plus"></span> Aggiungi un record</button></h1>
        <span class="glyphicon glyphicon-info-sign" onmouseover="Info();" onmouseout="ResetInfo();"></span>
        <br>
        <p class="alert alert-info" id="info" style="visibility: hidden;"></p>
        <table class="table table-hover" id="id_table">
        </table>
    </div>
    <p id="prova" class="hidden"></p>
</body>
</html>