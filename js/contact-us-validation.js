function validoMesazhin(){
    if(document.getElementById('emri').value == null || document.getElementById('emri').value === ''){
        alert('Duhet të plotësoni emrin!');
        return;
    }
    else if(document.getElementById('email').value == null || document.getElementById('email').value === ''){
        alert('Duhet të plotësoni emailin!');
        return;
    }
    else if(!validoRegexE()){
        alert('Emaili nuk është plotësuar si duhet!')
        return;
    }else if(document.getElementById('mesazhi').value ==null || document.getElementById('mesazhi').value === ''){
        alert('Shkruani mesazhin tuaj!');
        return;
    }
    else {
        return;
    }
}
function validoRegexE(){
    var regex = /^([a-zA-Z\d\.\-\_]+)@([a-zA-Z0-9]+).([a-z]{2,10})$/;
    var email = document.getElementById('email').value;
    regex.test(email);
    var validimi = regex.test(email);
    return validimi;
}