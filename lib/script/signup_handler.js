function signup() {
    //ni just untuk validation purposes, nnti kau connect la database khoo
    var can_signup = true;

    var email =  document.forms.RegForm.email.value;
    var name = document.forms.RegForm.name.value;
    var password = document.forms.RegForm.password.value;
    var confpassword = document.forms.RegForm.confpassword.value


    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
    var regName = /[^a-zA-Z0-9\-\/]/;
    
    if (email == "") {
        window.alert("Please enter your e-mail address.");
        email.focus();
        can_signup = false;
    }

    if (!regEmail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        can_signup = false;
    }

    if (name == "") {
        window.alert("Please enter your name.");
        name.focus();
        can_signup = false;
    }

    if (regName.test(name)) {
        window.alert("Please enter your name properly.");
        name.focus();
        can_signup = false;
    }
    
    if (password == "") {
        alert("Please enter your password.");
        password.focus();
        can_signup = false;
    }

    if (confpassword == "") {
        alert("Please enter confirm password.");
        confpassword.focus();
        can_signup = false;
    }

    if(confpassword != password){
        alert("Password and Confirm Password are not matched.");
        password.focus();
        can_signup = false;
    }

    if (can_signup == true) {
        alert("Sign Up successful. Now proceed to Log In.");
        window.location.href = "http://localhost/Cooking-Tutorial-Website/lib/login.php";
        return can_signup;
    }
}

// <?php
              
// if(isset($_POST['textdata']))
// {
// $data=$_POST['textdata'];
// $fp = fopen('data.txt', 'a');
// fwrite($fp, $data);
// fclose($fp);
// }
// ?>
