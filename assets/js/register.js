document.getElementById("name").value = "";
document.getElementById("email").value = "";
document.getElementById("username").value = "";
document.getElementById("male").checked = false;
document.getElementById("female").checked = false;
document.getElementById("phone").value = "";
document.getElementById("password").value = "";
document.getElementById("confirm").value = "";
document.getElementById("db-info").value = "";

var isFullname = false,
    isEmail = false,
    isUsername = false,
    isGender = false,
    isPhoneNumber = false,
    isPassword = false,
    isConfirmPassword = false;

var password, confirmPassword;

document.getElementById('name').addEventListener('focusout', function() {
    var isNameEmpty = document.getElementById("name").value;
    var nameReg = /^[a-zA-Z.\s]+$/;
    if (isNameEmpty === "") {
        document.getElementById('error-name').textContent = "* Invalid Name";
        isFullname = false;
    }
    else {
        document.getElementById('error-name').textContent = "";
        isFullname = true;
    }
});
document.getElementById('name').addEventListener('keyup', function() {
    var isNameEmpty = document.getElementById("name").value;
     var nameReg = /^[a-zA-Z.\s]+$/;
   if(!isNameEmpty.match(nameReg)){
        document.getElementById('error-name').textContent = "* Use albabets and dots(.) only";
        isFullname = false;
    }else {
        document.getElementById('error-name').textContent = "";
        isFullname = true;
    }
});
document.getElementById('name').addEventListener('focusin', function() {
    document.getElementById('error-name').textContent = "";
});

document.getElementById('email').addEventListener('focusout', function() {
    var emailReg = /^[a-zA-Z0-9_.]+@+[a-zA-Z]+[.]+[comin]+$/;
    var isEmailEmpty = document.getElementById("email").value;      
    if (isEmailEmpty === "") {
        document.getElementById('error-mail').textContent = "* Email should not be empty";
        isEmail = false;
    } else if (!isEmailEmpty.match(emailReg)) {
        document.getElementById('error-mail').textContent = "* Invalid Email";
        isEmail = false;
    } else {
        document.getElementById('error-mail').textContent = "";
        isEmail = true;
    }
});
document.getElementById('email').addEventListener('focusin', function() {
    document.getElementById('error-mail').textContent = "";
});

document.getElementById('username').addEventListener('focusout', function() {
    var isUserNameEmpty = document.getElementById("username").value;
    if (isUserNameEmpty === "") {
        document.getElementById('error-username').textContent = "* Invalid Name";
        isUsername = false;
    } else {
        document.getElementById('error-username').textContent = "";
        isUsername = true;
    }
});
document.getElementById('username').addEventListener('focusin', function() {
    document.getElementById('error-username').textContent = "";
});


document.getElementById('male').addEventListener('click', function() {
    if (!document.getElementById('male').checked) {
        document.getElementById('error-gender').textContent = "* Gender not selected";
        isGender = false;
    } else {
        document.getElementById('error-gender').textContent = "";
        isGender = true;
    }
});
document.getElementById('male').addEventListener('focusout', function() {
    if (!document.getElementById('male').checked) {
        document.getElementById('error-gender').textContent = "* Gender not selected";
        isGender = false;
    } else {
        document.getElementById('error-gender').textContent = "";
        isGender = true;
    }
});

document.getElementById('female').addEventListener('click', function() {
    if (!document.getElementById('female').checked) {
        document.getElementById('error-gender').textContent = "* Gender not selected";
        isGender = false;
    } else {
        document.getElementById('error-gender').textContent = "";
        isGender = true;
    }
});
document.getElementById('female').addEventListener('focusout', function() {
    if (!document.getElementById('female').checked) {
        document.getElementById('error-gender').textContent = "* Gender not selected";
        isGender = false;
    } else {
        document.getElementById('error-gender').textContent = "";
        isGender = true;
    }
});

document.getElementById('phone').addEventListener('focusout', function() {
    var isPhoneEmpty = document.getElementById("phone").value;
    var phReg = /^[0-9]+$/;
    if ((isPhoneEmpty === "" || isPhoneEmpty.length != 10) || !isPhoneEmpty.match(phReg)) {
        document.getElementById('error-phone').textContent = "* Invalid Phone Number";
        isPhoneNumber = false;
    } else {
        document.getElementById('error-phone').textContent = "";
        isPhoneNumber = true;
    }
});

document.getElementById('phone').addEventListener('keyup', function(event) {
    var isPhoneEmpty = document.getElementById("phone").value;
    var phReg = /^[0-9]+$/;
    if(event.keyCode == 9){
       document.getElementById('error-phone').textContent = "";
       }
    else if ((isPhoneEmpty === "" || isPhoneEmpty.length != 10) || !isPhoneEmpty.match(phReg)) {
        document.getElementById('error-phone').textContent = "* Invalid Phone Number";
        isPhoneNumber = false;
    } else {
        document.getElementById('error-phone').textContent = "";
        isPhoneNumber = true;
    }
});

document.getElementById('phone').addEventListener('focusin', function() {
    document.getElementById('error-phone').textContent = "";
});

document.getElementById('password').addEventListener('keyup', function() {
    var isPasswordEmpty = document.getElementById("password").value;
    if (isPasswordEmpty === "") {
        document.getElementById('error-password').textContent = "* Password is empty";
        isPassword = false;
    } else if (isPasswordEmpty.length < 8) {
        document.getElementById('error-password').textContent = "* Password should be more that 8 character";
        isPassword = false;
    } else {
        document.getElementById('error-password').textContent = "";
        password = isPasswordEmpty;
        isPassword = true;
    }
});

document.getElementById('password').addEventListener('focusout', function() {
    var isPasswordEmpty = document.getElementById("password").value;
    if (isPasswordEmpty === "") {
        document.getElementById('error-password').textContent = "* Password is empty";
        isPassword = false;
    } else if (isPasswordEmpty.length < 8) {
        document.getElementById('error-password').textContent = "* Password should be more that 8 character";
        isPassword = false;
    } else {
        document.getElementById('error-password').textContent = "";
        password = isPasswordEmpty;
        isPassword = true;
    }
});


document.getElementById('confirm').addEventListener('focusout', function() {
    var isConfirmEmpty = document.getElementById("confirm").value;
    if (isConfirmEmpty === "") {
        document.getElementById('error-confirm-password').textContent = "* Password is empty";
        isConfirmPassword = false;
    } else if (isConfirmEmpty.length < 8) {
        document.getElementById('error-confirm-password').textContent = "* Password should be more that 8 character";
        isConfirmPassword = false;
    } else {
        document.getElementById('error-confirm-password').textContent = "";
        confirmPassword = isConfirmEmpty;
        isConfirmPassword = true;
    }
    if (password !== confirmPassword) {
        document.getElementById('error-password').textContent = "";
        document.getElementById('error-confirm-password').textContent = "* Password not match";
        isConfirmPassword = false;
    } else {
        document.getElementById('error-password').textContent = "";
        document.getElementById('error-confirm-password').textContent = "";
        isConfirmPassword = true;
    }
});
document.getElementById('confirm').addEventListener('keyup', function() {
    var isConfirmEmpty = document.getElementById("confirm").value;
    if (isConfirmEmpty === "") {
        document.getElementById('error-confirm-password').textContent = "* Password is empty";
        isConfirmPassword = false;
    } else if (isConfirmEmpty.length < 8) {
        document.getElementById('error-confirm-password').textContent = "* Password should be more that 8 character";
        isConfirmPassword = false;
    } else {
        document.getElementById('error-confirm-password').textContent = "";
        confirmPassword = isConfirmEmpty;
        isConfirmPassword = true;
    }
    if (password !== confirmPassword) {
        document.getElementById('error-password').textContent = "";
        document.getElementById('error-confirm-password').textContent = "* Password not match";
        isConfirmPassword = false;
    } else {
        document.getElementById('error-password').textContent = "";
        document.getElementById('error-confirm-password').textContent = "";
        isConfirmPassword = true;
    }
});
document.getElementById('confirm').addEventListener('focusin', function() {
    document.getElementById('error-confirm-password').textContent = "";
});

function isSignupValidationAccept(){
    document.getElementById('error-submit').textContent = "";
    if(isFullname === true && isEmail === true && isUsername === true && isGender === true && isPhoneNumber === true && isPassword === true && isConfirmPassword === true){
        return true;
    }
    else{
        document.getElementById('error-submit').innerHTML = "<br>* Fill all fields";
        return false;
    }
}