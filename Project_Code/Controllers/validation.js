function ValidateSignUp() {

    var error = false;

    if (document.getElementById('firstName').value == "") {
        error = true;
    }
    if (document.getElementById('lastName').value == "") {
        error = true;
    }
    if (document.getElementById('email').value.search(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/) == -1) {
        error = true;
    }
    if (document.getElementById('password').value == "") {
        error = true;
    }
    if (document.getElementById('password-confirmation').value == "") {
        error = true;
    }
    if (document.getElementById('password').value != document.getElementById('password-confirmation').value) {
        error = true;
    }


    return !error;
}

function ValidateLogin() {

    var error = false;

    if (document.getElementById('email1').value.search(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/) == -1) {
        error = true;
    }
    if (document.getElementById('password1').value == "") {
        error = true;
    }

    return !error;

}


document.getElementById('signupDiv').onsubmit = ValidateSignUp;

document.getElementById('loginDiv').onsubmit = ValidateLogin;