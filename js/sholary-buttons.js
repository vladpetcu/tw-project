var topMargin = 0;
var leftMargin = 0;

let container1 = document.getElementsByClassName("skol")[0];
let container2 = document.getElementsByClassName("skol")[1];

container1.style.marginTop = parseInt((window.innerHeight / 2 ) - 75).toString() + "px";
container2.style.marginTop = parseInt((window.innerHeight / 2 ) - 75).toString() + "px";

if(window.innerWidth >= 500){
    container1.style.marginLeft = parseInt(((window.innerWidth / 2 ) - 150) / 2).toString() + "px";	
    container2.style.marginLeft = parseInt(((window.innerWidth / 2 ) - 150) / 2).toString() + "px";
}
else if(window.innerWidth < 500){
    container1.style.marginLeft = parseInt((window.innerWidth / 2 ) - 75).toString() + "px";	
    container2.style.marginLeft = parseInt((window.innerWidth / 2 ) - 75).toString() + "px";
}

window.onresize = function() {
    leftMargin = parseInt(((window.innerWidth / 2 ) - 150) / 2);
    topMargin = parseInt((window.innerHeight / 2 ) - 75);
    let leftUnit = leftMargin.toString() + "px";
    let topUnit = topMargin.toString() + "px";
    
    container1.style.marginTop = topUnit;
    container2.style.marginTop = topUnit;

    if(window.innerWidth >= 500){
        container1.style.marginLeft = leftUnit;
        container2.style.marginLeft = leftUnit;	
    }
    else if(window.innerWidth < 500){
        leftMargin = parseInt((window.innerWidth / 2 ) - 75);
        leftUnit = leftMargin.toString() + "px";
        container1.style.marginLeft = leftUnit;
        container2.style.marginLeft = leftUnit;	
    }	
}