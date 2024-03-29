function displayPinguin(){
    var pinguin = document.getElementById("no-topics-displayed");
    if(document.getElementsByClassName("topics").length == 0){
        if(window.getComputedStyle(pinguin).getPropertyValue("display") == "none"){
            pinguin.style.display = "flex";
        }
    }
    else{
        pinguin.style.display = "none";
    }
}

function playWithTrips(event){
    
    if(event.target && event.target.className == "active-inactive-topic"){
        var tripsList = document.getElementsByClassName("my-topics")[0];
        var clickedButton = event.target;
        var butClass = document.getElementsByClassName("active-inactive-topic");
        
        for(var index = 0; index < butClass.length; index++){
            if(butClass[index] == clickedButton){
                break;
            }
        }
        var targetTrip = document.getElementsByClassName("topics")[index]; 

        if(clickedButton.value == "on"){
            //de oprit serverul din cautat  
            // apel functie (trebuie apelat si la stergere trip)                    
       


            clickedButton.value = "off";
            clickedButton.innerText = "Activate";
            targetTrip.classList.add("inactive-topics");
        }
        else if (clickedButton.value == "off"){
            //de pornit cautarea (pt trip existent + la submit form)
           
            
            clickedButton.value = "on";
            clickedButton.innerText = "Deactivate";
            targetTrip.classList.remove("inactive-topics");
        }
    }
    else if(event.target && event.target.className == "delete-topic"){
        var tripsList = document.getElementsByClassName("my-topics")[0];
        var clickedButton = event.target;
        var butClass = document.getElementsByClassName("delete-topic");
        
        for(var index = 0; index < butClass.length; index++){
            if(butClass[index] == clickedButton){
                break;
            }
        }

        var targetTrip = document.getElementsByClassName("topics")[index];
        if( confirm("Are you sure you want to delete this trip?") == true ){
            //de oprit cautarea + mesaj de confirmare??

            tripsList.removeChild(targetTrip);
        }

    }
    displayPinguin();
}

document.addEventListener('click', playWithTrips);
window.onload = displayPinguin;