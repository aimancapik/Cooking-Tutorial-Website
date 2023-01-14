function passvalues() {
    var smoltitle = document.getElementById("smoltitle").innerHTML;
    localStorage.setItem("textvalue",smoltitle);
    return false;
}

// document.getElementById("smoltitle").innerHTML = localStorage.getItem("textvalue");