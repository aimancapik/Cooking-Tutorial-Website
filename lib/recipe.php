<?php
$title = "Recipe";
require_once('../layout/header.php');
?>

<h1 id="recipetitle"></h1>

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

<script>
    const recipetitle = window.localStorage.getItem('recipe_title');

    document.getElementById('recipetitle').innerText = recipetitle;
</script>

<?php
require_once('../layout/footer.php');
?>