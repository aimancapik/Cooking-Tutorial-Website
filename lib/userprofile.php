<?php
$title = "User Profile";
require_once('../layout/header.php');
?>
<script src="script/userprofile_handler.js"></script>

<div>
    <h1>Your Profile</h1>
</div>

<div>
    <p>Data Name</p>
    <p>Data Email</p>
</div>
<br>
<p id="myText" contenteditable >
    Edit this content. Click save to store it. Click reset to return to the default value.
</p>
<button onclick="saveChanges()" >Save</button>
<button onclick="clearStorage()" >Reset</button>


<?php
require_once('../layout/footer.php');
?>

<!-- aku tiru code ni tapi tu ah tak jadi, cer try tengok sesiapa( https://jsfiddle.net/james2doyle/Rg4ML/ ) -->
<!-- untuk edit details user -->