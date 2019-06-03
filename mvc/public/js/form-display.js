
var crtBudget = document.getElementById("current-budget");
var budgetBubble = document.getElementById("budget-bubble");
var percent = 0;

function changeCurrentBudget(event){

    if( this.value > 0){
        percent = (this.value / this.max) * 95;
        budgetWidth = window.getComputedStyle(budget).getPropertyValue("width");
        budgetWidth = parseFloat(budgetWidth.slice(0, budgetWidth.length - 2));
        let mg = parseFloat((percent / 100) * budgetWidth);
        budgetBubble.style.marginLeft = mg.toString() + "px";
    }
    else if( this.value == 0){
        budgetBubble.style.marginLeft = "0";
    }
    budgetBubble.innerText = this.value;

    crtBudget.innerText = parseInt(this.value / inPeople.value).toString();
}

function changeCurrentBudgetPerTicket(event){
    if(this.value >=1)
        crtBudget.innerText = parseInt(budget.value / this.value).toString();
    else
    crtBudget.innerText = "0";
}

function makeDateActiveInactive(event){
    let dateContainer = document.getElementById("coming-date-container");
    if(this.value == "round"){
        dateContainer.style.opacity = 1;
        console.log(window.getComputedStyle(dateContainer).getPropertyValue("cursor"));
        dateContainer.style.pointerEvents = "auto";
    }
    else if( this.value == "oneway"){
        dateContainer.style.opacity = 0.5;
        dateContainer.style.pointerEvents = "none";
    }
}

var budget = document.getElementById("ibudget");
var inPeople = document.getElementById("ipeople");
var flightType = document.getElementById("flight-type");

budget.oninput = changeCurrentBudget;
budget.onchange = changeCurrentBudget;
inPeople.oninput = changeCurrentBudgetPerTicket;
flightType.onchange = makeDateActiveInactive;