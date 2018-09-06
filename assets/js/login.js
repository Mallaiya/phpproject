document.getElementById("email").value = "";
document.getElementById("password").value = "";
var isEmail = false,
    isPassword = false;

document.getElementById('email').addEventListener('focusout',function(){
    var emailReg = /^[a-zA-Z0-9_.]+@+[a-zA-Z]+[.]+[comin]+$/;
    var isEmailEmpty = document.getElementById("email").value;
    if(isEmailEmpty===""){
        document.getElementById('error-mail').textContent = "* Email should not be empty";
        isEmail = false;
    }
    else if(!isEmailEmpty.match(emailReg)){
        document.getElementById('error-mail').textContent = "* Invalid email";
        isEmail = false;
    }
    else{
        document.getElementById('error-mail').textContent = "";
        isEmail = true;
    }
});

document.getElementById('password').addEventListener('focusout',function(){
    var isPasswordEmpty = document.getElementById("password").value;
    if(isPasswordEmpty===""){
        document.getElementById('error-password').textContent = "* Password should not be empty";
        isPassword = false;
    }else{
        document.getElementById('error-password').textContent = "";
        isPassword = true;
    }
    
});

function isLoginValidationAccept(){
    document.getElementById('error-login').textContent = "";
    if(isEmail === true && isPassword === true){
        return true;
    }
    else{
        document.getElementById('error-login').innerHTML = "<br>* Fill all fields";
        return false;
    }
}