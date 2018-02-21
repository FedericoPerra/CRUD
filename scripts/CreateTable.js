function Create(){
    alert("ciao");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("id_table").innerHTML += "<tr>";
            document.getElementById("id_table").innerHTML += "<th> ciao </th>";
            document.getElementById("id_table").innerHTML += "<th> ciao2 </th>";
            document.getElementById("id_table").innerHTML += "</tr>";
        }
    };
    xhttp.open("POST", "", true);
    xhttp.send();
}