function Ricerca()
{
    Reset();
    var stringa = document.getElementById("research").value;
    if(stringa!="") {
        var table = document.getElementById("id_table");
        var celle = table.getElementsByTagName("td");
        for (var j = 0; j < celle.length; j++) {
            if (celle[j].innerHTML.search(stringa) != -1 && celle[j].innerHTML.search("<") == -1) {
                celle[j].style.backgroundColor = "yellow";
            }
        }
    }
}

function Reset() {
    var table = document.getElementById("id_table");
    var celle = table.getElementsByTagName("td");
    for(var j=0; j<celle.length; j++){
            celle[j].style.backgroundColor="white";
    }
}
