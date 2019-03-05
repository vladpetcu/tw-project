
var menuBut = document.getElementById("mbut");
function showMenu(){
    var hdr = document.getElementById("index-header");
    var menuContainer = document.getElementById("div-menu");

    if( hdr.style.height == "" && (menuContainer.style.display == "" || menuContainer.style.display == "none")){
        hdr.style.minHeight = "25em";
        menuContainer.style.display = "block";
    }
    else if(menuContainer.style.display == "block"){
        hdr.style.minHeight = "";
        menuContainer.style.display = "none";
    }
}

menuBut.onclick = showMenu;