var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validatedEmail(){
    if (email.value.match(validRegex)) {
        email.style.border = "1px solid green";
        email.focus();
        return true;
	}else {
        // alert("Invalid email address");
        email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
    }
}

function validatePassword(){
    if (password.value.length < 6) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
}