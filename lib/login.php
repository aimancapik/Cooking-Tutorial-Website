<?php
$title = "Log In";
require_once('../layout/header_login.php');
?>
<script src="script/login_handler.js"></script>

<form name="RegForm">
    <div>
        <input type="text" name="email" placeholder="Email"/>
    </div>
    
    <div>
        <input type="password" name="password" placeholder="Password"/>
    </div>
    
    <div>
        <input type="button" name="send" value="LOG IN" onclick="return login()"/>
    </div>
</form>

<div>
    <a href="http://localhost/Cooking-Tutorial-Website/lib/signup.php">Sign Up</a>
</div>


<?php
require_once('../layout/footer.php');
?>