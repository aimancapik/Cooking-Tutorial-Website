<?php
$title = "User Profile";
require_once('../layout/header.php');

$mytext = $_POST['myText'];
?>
<!-- <script src="script/userprofile_handler.js"></script> -->

<div>
    <h1>Your Profile</h1>
</div>

<div>
    <p>Data Name</p>
    <p>Data Email</p>
</div>
<br>
<form onsubmit="return setText();" method="post" action="">
    <p><?= $mytext ?></p>
    
    <br>
    <<textarea id="myText" name="myText" value="Edit profile description here." rows="5" cols=""></textarea>
    <input type="submit" value="Save"></input>
    <input type="reset" value="Clear"></input>
</form>

<?php
  require_once('../layout/footer.php');
?>