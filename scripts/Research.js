function Ricerca()
{
    reset();
    var stringa=document.getElementById("research").value;
    var table = document.getElementById("id_table");
    var celle = table.getElementsByTagName("td");
    for(var j=0; j<celle.length; j++){
        var n = celle[j].search(stringa);
        if(n<0){
            celle[j].style.backgroundColor="yellow";
        }
    }
}


function reset() {
    var table = document.getElementById("id_table");
    var celle = table.getElementsByTagName("td");
    for(var j=0; j<celle.length; j++){
            celle[j].style.backgroundColor="white";
    }
}
