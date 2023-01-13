function login() {
    //ni pasword aku sementara, nnti kau connect la database khoo
    var mypassword = 'SAYAKACANG';
    var can_login = true;

    var email =
        document.forms.RegForm.email.value;
    var password =
        document.forms.RegForm.password.value;
    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
    
    if (email == "") {
        window.alert("Please enter your e-mail address.");
        email.focus();
        can_login = false;
    }

    if (!regEmail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        can_login = false;
    }
    
    if (password == "") {
        alert("Please enter your password");
        password.focus();
        can_login = false;
    }

    if(password != mypassword){
        alert("Invalid email or password");
        password.focus();
        can_login = false;
    }

    if (can_login == true) {
        alert("Log In successful");
        window.location.href = "http://localhost/Cooking-Tutorial-Website/lib/index.php";
        return can_login;
    }
}
