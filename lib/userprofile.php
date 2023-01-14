<?php
$title = "User Profile";
require_once('../layout/header.php');

if (isset($_POST['myText']) == null) {
    $mytext = 'Edit below.';
}else {
    $mytext = $_POST['myText'];
}
?>

<br>
<div>
    <h1>Your Profile</h1>
</div>

<div>
    <p>Data Name</p>
    <p>Data Email</p>
</div>
<br>
<form onsubmit="return trueSave();" method="post" action="">
    <p><?= $mytext ?></p>
    
    <br>
    <textarea id="myText" name="myText" rows="5" cols="">Edit here.</textarea>
    <input type="submit" value="Save"></input>
    <input type="reset" value="Clear"></input>
</form>

<?php
  require_once('../layout/footer.php');
?>