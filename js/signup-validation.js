
function validoSignUp(){
    var regexEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var regexPas = /^[A-Z]{1}[a-z]{5,}\d{2}$/;

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var validimiEmail = regexEmail.test(email)
    var validimiPas = regexPas.test(password)
    
    console.log(validimiEmail)
    console.log(validimiPas)

    if(validimiEmail && validimiPas){
        alert('Regjistrimi perfundoi me sukses')
    }else{
        if(!validimiEmail){
            alert("Email should follow email format rules")
        }

        if(!validimiPas){
            alert("Password must start with a capital letter and end with 2 numbers and have at least 8 characters")
        }
    }
}
