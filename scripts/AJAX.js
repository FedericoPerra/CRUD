function Selection(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("id_table").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Select.php", true);
    xmlhttp.send();
}

function Updating(row, name, surname, mail){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("form").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Update.php?id="+row+"&nome="+name+"&cognome="+surname+"&email="+mail, true);
    xmlhttp.send();
}

function InviaUpdate(id, nome, cognome, email){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //sistemare
            document.getElementById("form").innerHTML="";
            Selection();
        }
    };
    xmlhttp.open("GET", "Updated.php?id="+id+"&nome="+nome+"&cognome="+cognome+"&email="+email, true);
    xmlhttp.send();
}

function Delete(id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            Selection();
        }
    };
    xmlhttp.open("GET", "Delete.php?id=" + id, true);
    xmlhttp.send();
}

function AddRecordMenu(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("form").innerHTML += this.responseText;
        }
    };
    xmlhttp.open("GET", "addRecordMenu.html", true);
    xmlhttp.send();
}

function CloseAddMenu(nome, cognome, email){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("form").innerHTML = "";
            Selection();
        }
    };
    xmlhttp.open("GET", "addRecord.php?nome="+nome+"&cognome="+cognome+"&email="+email, true);
    xmlhttp.send();
}