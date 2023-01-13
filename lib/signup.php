<?php
$title = "Sign Up";
require_once('../layout/header_login.php');
?>
<script src="script/signup_handler.js"></script>

<form name="RegForm">
    <div>
        <input type="text" name="email" placeholder="Email"/>
    </div>

    <div>
        <input type="text" name="name" placeholder="Name"/>
    </div>
    
    <div>
        <input type="password" name="password" placeholder="Password"/>
    </div>

    <div>
        <input type="password" name="confpassword" placeholder="Confirm Password"/>
    </div>
    
    <div>
        <input type="button" name="send" value="SIGN UP" onclick="return signup()"/>
    </div>
</form>

<div>
    <a href="http://localhost/Cooking-Tutorial-Website/lib/login.php">Log In</a>
</div>

<?php
require_once('../layout/footer.php');
?>