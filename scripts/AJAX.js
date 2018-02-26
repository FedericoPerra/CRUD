function Selection(){
    $("#id_table").load("Select.php");
}


function Updating(row, name, surname, mail){
    $("#form").load("Update.php?id="+row+"&nome="+name+"&cognome="+surname+"&email="+mail);
}

function InviaUpdate(id, nome, cognome, email){
    $("#prova").load("Updated.php?id="+id+"&nome="+nome+"&cognome="+cognome+"&email="+email, function () {
        $("#form").text("");
        Selection();
    });
}

function Delete(id){
    $("#prova").load("Delete.php?id=" + id, function () {
        Selection();
    });
}

function AddRecordMenu(){
    $("#form").load("AddRecordMenu.html");
}

function CloseAddMenu(nome, cognome, email){
    $("#form").text("");
    $("#prova").load("addRecord.php?nome="+nome+"&cognome="+cognome+"&email="+email, function () {
        Selection();
    });
}

function Annulla(){
    $("#form").text("");
}

function alert(msg){
    alert(msg);
}