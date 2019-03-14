
var menuBut = document.getElementById("mbut");				
var hdr = document.getElementById("index-header");
let menuContainer = document.getElementById("div-menu");
var hdrStyle = window.getComputedStyle(hdr);
let menuContainerStyle = window.getComputedStyle(menuContainer);

var hdr = document.getElementById("index-header");
var sticky = hdr.scrollTop;	
var mainSection = document.getElementsByClassName('main-section')[0];

            
function showMenu(){
    if(hdrStyle.getPropertyValue("min-height") == "80px" && menuContainerStyle.getPropertyValue("display") == "none"){
            hdr.style.minHeight = "250px";
            menuContainer.style.display = "block";
            mainSection.classList.add("top-minus");
            //hdr.classList.add("sticky");
    }
    else if(hdrStyle.getPropertyValue("min-height") == "250px" && menuContainerStyle.getPropertyValue("display") == "block"){
            hdr.style.minHeight = "80px";
            menuContainer.style.display = "none";
            mainSection.classList.remove("top-minus");
    }	
}

menuBut.onclick = showMenu;

window.onresize = function() {
    if(window.innerWidth <= 500){
        hdr.style.minHeight = "80px";
        menuContainer.style.display = "none";
        mainSection.classList.remove("top-minus");
        return;
    }
    else if(window.innerWidth > 500 && window.innerWidth<=960){
        hdr.style.minHeight = "90px";
        menuContainer.style.display = "block";
        mainSection.classList.remove("top-minus");
        return;
    }
    else if(window.innerWidth > 960){
        hdr.style.minHeight = "100px";
        menuContainer.style.display = "block";
        mainSection.classList.remove("top-minus");
        return;
    }
}