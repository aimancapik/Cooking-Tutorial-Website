<?php
$title = "Recipe";
require_once('../layout/header.php');
?>

<script>
    document.getElementById("smoltitle").innerHTML = localStorage.getItem("textvalue");
</script>

<!-- <h1><?=($smoltitle != null ? $smoltitle : "")?></h1> -->
<span id="smoltitle"></span>

<div>
    <img src="../image/buger.jpg" />
</div>
<p>
    what is needed
</p>
<p>
    steps
</p>
<form>
    <input type="button" value="Back" onclick="history.back()">
</form>

<?php
require_once('../layout/footer.php');
?>