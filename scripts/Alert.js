function Info() {
    document.getElementById('info').style.visibility='visible';
    document.getElementById('info').innerHTML = 'Se vuoi ordinare alfabeticamente la tabella in base ad un campo, premi sulla rispettiva colonna';
}

function ResetInfo(){
    document.getElementById('info').style.visibility='hidden';
    document.getElementById('info').innerHTML = '';
}