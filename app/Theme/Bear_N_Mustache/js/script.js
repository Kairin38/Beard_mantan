function openMenu() {
    var x = document.getElementById("mobi-nav");
    if (x.className === "mobi-nav") {
        x.className += " open";
    } else {
        x.className = "mobi-nav";
    }
}
