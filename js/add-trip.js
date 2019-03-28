
async function showValidationAnswer(status){
    var imgGreen = document.getElementById("verified");
    var imgRed = document.getElementById("wrong");

    if( status == true){
        imgGreen.style.display = "block";
        setTimeout( function(){ imgGreen.style.display = "none"; }, 1500);
    }
    else if( status == false){
        imgRed.style.display = "block";
        setTimeout(function(){ imgRed.style.display = "none";}, 1500);
    }

}

function validateTripForm(){
    //verificare inputuri
    
    
    let ok = true;
    showValidationAnswer(ok);
    return ok;
}

function addNewTrip(event){

    //var myTopics = document.getElementsByClassName("my-topics")[0];
    var submitOk;
    
    submitOk = validateTripForm();
    if(submitOk == false){
        event.preventDefault();
        return false;
    }
    else if(submitOk == true){
        /*let newDiv = document.createElement("div");
        let newH4 = document.createElement('h4');
        let newParagraph = document.createElement('p');
        let newDivBut = document.createElement('div');
        let newButton1 = document.createElement('button');
        let newButton2 = document.createElement('button');
        
        
        newH4.innerText = "Trip name din form"
        newParagraph.innerText = "Date luate din form";
        newButton1.innerText = "Deactivate";
        newButton1.value = "on";
        newButton2.innerText = "Delete";
        
       
        newSpan.appendChild(newH4);
        newSpan.appendChild(newParagraph);
        newSpan.appendChild(newDiv);
        newDiv.appendChild(newButton1);
        newDiv.appendChild(newButton2);
        myTopics.appendChild(newSpan);
        
        newSpan.classList.add("topics");
        newDiv.classList.add("topic-buttons-div");
        newButton1.classList.add("active-inactive-topic");
        newButton2.classList.add("delete-topic");
        

        var pinguin = document.getElementById("no-topics-displayed");
        if(window.getComputedStyle(pinguin).getPropertyValue("display") == "flex"){
            pinguin.style.display = "none";
        }
        */

        event.preventDefault();
        return true;
    }
    
}


var tripForm = document.getElementById("new-topic-form");

if(tripForm.addEventListener){
    tripForm.addEventListener("submit", addNewTrip, false);  
}
else if(tripForm.attachEvent){
    tripForm.attachEvent("onsubmit", addNewTrip);
}

