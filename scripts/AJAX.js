function selection(){
    $("#id_table").load("Select.php");
    $("#id_table").hide();
    $("#id_table").fadeIn(1000);
}

function update(id, nome, cognome, email) {
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

function cancella(id){
    $("#prova").load("cancella.php?id=" + id, function () {
        selection();
    });
}

function aggiungi(nome, cognome, email){
    if(isValidEmail(email)){
        $("#prova").load("AddRecord.php?nome=" + nome + "&cognome=" + cognome + "&email=" + email, function () {
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

function annulla(){
    $("#error").hide();
}

function isValidEmail(email){
    //regex per controllare la mail
    pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

function formAggiorna(id, nome, cognome, email){
    $("#insert").unbind();
    $("#titolo").text("Modifica un record");
    $("#nm").val(nome);
    $("#cnm").val(cognome);
    $("#mail").val(email);
    $("#insert").click(function(){
        update(id, $('#nm').val(), $('#cnm').val(),$('#mail').val());
    });
}

function formAggiungi(){
    $("#insert").unbind();
    $("#titolo").text("Aggiungi un record");
    $("#insert").click(function(){
        aggiungi($('#nm').val(), $('#cnm').val(),$('#mail').val());
    });
}

function info() {
    //imposta il contenuto del paragrafo info sull'evento onmouseover
    $('#info').show();
    $('#info').text('Se vuoi ordinare alfabeticamente la tabella in base ad un campo, premi sulla rispettiva colonna');
}

function resetInfo(){
    //cancella il contenuto del paragrafo info sull'evento onmouseout
    $('#info').hide();
    $('#info').text('');
}