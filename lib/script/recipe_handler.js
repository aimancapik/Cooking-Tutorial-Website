function passvalues() {
    var smoltitle = document.getElementById("smoltitle").innerHTML;
    localStorage.setItem("textvalue",smoltitle);
    return false;
}

function getRecipeTitle() {
    var recipetitle = document.getElementById('recipe_title').innerHTML;
    return recipetitle;
  }

// document.getElementById("smoltitle").innerHTML = localStorage.getItem("textvalue");