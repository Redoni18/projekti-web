var userNameRegex = /^^[A-Za-z][A-Za-z0-9_]{5,}$$/

var username = document.getElementById('username').value

var value = userNameRegex.test(username)

document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault()
    if(value){
        console.log('true')
    }else{
        console.log('false')
    }
});
