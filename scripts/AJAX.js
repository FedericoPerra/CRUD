function selection(){
    $("#id_table").load("Select.php");
    $("#id_table").hide();
    $("#id_table").fadeIn(1000);
}

function InviaUpdate(id, nome, cognome, email) {
    if (isValidEmail(email)) {  //controllo dell'email
        $("#prova").load("Updated.php?id=" + id + "&nome=" + nome + "&cognome=" + cognome + "&email=" + email, function () {
            $("#error").hide();
            selection();
        });
    }
    else {
        //scrive in un paragrafo l'errore
        $("#error").show();
        $("#error").text("email non valida");
    }
}

function Delete(id){
    $("#prova").load("Delete.php?id=" + id, function () {
        selection();
    });
}

function AddRecord(nome, cognome, email){
    if(isValidEmail(email)){
        $("#prova").load("addRecord.php?nome=" + nome + "&cognome=" + cognome + "&email=" + email, function () {
            selection();
            $("#error").hide();
        });
    }
    else {
        //scrive in un paragrafo l'errore
        $("#error").show();
        $("#error").text("email non valida");
    }
}

function Annulla(){
    $("#error").hide();
}

function isValidEmail(email){
    //regex per controllare la mail
    pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

function Updator(id, nome, cognome, email){
    $("#insert").unbind();
    $("#titolo").text("Modifica un record");
    $("#nm").val(nome);
    $("#cnm").val(cognome);
    $("#mail").val(email);
    $("#insert").click(function(){
        InviaUpdate(id, $('#nm').val(), $('#cnm').val(),$('#mail').val());
    });
}

function Adder(){
    $("#insert").unbind();
    $("#titolo").text("Aggiungi un record");
    $("#insert").click(function(){
        AddRecord($('#nm').val(), $('#cnm').val(),$('#mail').val());
    });
}