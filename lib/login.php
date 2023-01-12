<?php
$title = "Login";
require_once('../layout/header.php');
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


<?php
require_once('../layout/footer.php');
?>