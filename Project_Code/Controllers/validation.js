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

    return !error;
}

function ValidateLogin() {

    var error = false;

    if (document.getElementById('email').value.search(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/) == -1) {
        error = true;
    }
    if (document.getElementById('password').value == "") {
        error = true;
    }

    return !error;

}


document.getElementById('*******Signupidname******').onsubmit = ValidateSignUp;

document.getElementById('****loginid****').onsubmit = ValidateLogin;