// function parseDate(input) {
//     var parts = input.match(/(\d+)/g);
//     return new Date(parts[0], parts[1]-1, parts[2]);
// }

function getCurrentDate(){
    let today = new Date();
    let day = today.getDate();
    let month = today.getMonth()+1;
    let year = today.getFullYear();
            
    if(day<10){
        day='0'+day
    } 
    if(month<10){
        month='0'+month
    }
    today = year+'-'+month+'-'+day;
    return today;
}

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

function validateTripForm(event){
    var box1 = document.querySelector("#icb1").checked;
    var box2 = document.querySelector("#icb2").checked;
    var box3 = document.querySelector("#icb3").checked;
    var box4 = document.querySelector("#icb4").checked;
    var box5 = document.querySelector("#icb5").checked;
    var box6 = document.querySelector("#icb6").checked;
    var cityName = document.getElementById("isearch-city").value;
        if(cityName.length <= 2){
            alert("City name must be longer!");
            document.getElementById("isearch-city").focus();
            return;
        }
    var maxBudget = document.getElementById("ibudget").value;
    var people = document.getElementById("ipeople").value;
        if(people <= 0){
            alert("The number of people must be at least 1!");
            document.getElementById("ipeople").focus();
            return;
        }
        if(maxBudget <= 0){
            alert("Please select a more positive price for your budget!");
            document.getElementById("ibudget").focus();
            return;
        }
    try{
        var cb = maxBudget / people;
        if(cb <10){
            alert("Please select a more positive price for your budget!")
            document.getElementById("ibudget").focus();
            return;
        }
    }
    catch(err){
        alert("The number of people must be at least 1!" + err);
        document.getElementById("ipeople").focus();
        return;
    }
    var flight = document.getElementById("flight-type").value;
        if((flight != "oneway") && (flight != "round")){
            alert("Something went wrong with the date/s, please try again!");
            document.getElementById("flight-type").focus();
            return;
        }
    var leavingDate = document.getElementById("ileavingdate").value;
    let todaysDate = getCurrentDate();
        if(leavingDate < todaysDate){
            alert("The trip date range start shoul be at least today!");
            document.getElementById("ileavingdate").focus();
            return;
        }
    var comingDate = "none";
        if(flight == "round"){
            comingDate = document.getElementById("icomingdate").value;
            if(comingDate < leavingDate){
                alert("The trip date range end cannot be before range start!");
                document.getElementById("icomingdate").focus();
                return;
            }   
        }
    var mintemp = document.getElementById("imindegrees").value;
        if(mintemp < -20){
            alert("You need to specify a minimum over -20 degrees!");
            document.getElementById("imindegrees").focus();
            return;
        }
    var maxtemp = document.getElementById("imaxdegrees").value;
        if(maxtemp > 50){
            alert("You need to specify a maximum under 50 degrees!");
            document.getElementById("imaxdegrees").focus();
            return;
        }
        if(mintemp == ""){
            mintemp = "none";
        }
        if(maxtemp == ""){
            maxtemp = "none";
        }
        if(maxtemp < mintemp && maxtemp != "none" && mintemp != "none"){
            alert("The temperature range maximum cannot be less that the minimum!");
            document.getElementById("imindegrees").focus();
            return;
        }
    var sky = document.getElementById("isky").value;
        if((sky != "sunny") && (sky != "cloudy") && (sky != "broken-clouds-to")){
            alert("Something went wrong with the sky preferences, please try again!");
            document.getElementById("isky").focus();
            return;
        }
    var humidity = document.getElementById("ihumidity").value;
    if(humidity < 0 || humidity > 100 ){
        alert("The humidity range is out of range!");
        document.getElementById("ihumidity").focus();
        return;
    }
    else if(humidity == ""){
        humidity = "none";
    }
    var tripName = document.getElementById("itripname").value;
        var namePattern = /^[a-zA-Z0-9 ]{2,30}$/;
        if(namePattern.test(tripName) == false || namePattern == "  "){
            alert("The trip name should contain alphanumeric characters (2 to 30)!");
            document.getElementById("itripname").focus();
            return;
        }
    
    var queryStr = "b1="+box1+"&b2="+box2+"&b3="+box3+"&b4="+box4+"&b5="+box5+"&b6="+box6+
        "&city="+cityName+"&price="+cb+"&people="+people+"&flight="+flight+"&leaving="+leavingDate+"&coming="+comingDate+
        "&mindeg="+mintemp+"&maxdeg="+maxtemp+"&sky="+sky+"&humidity="+humidity+"&name="+tripName;
    console.log(queryStr);

    // AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            callBackValidation(this.responseText);
        }
    };

    xmlhttp.open("GET", "../trip-validator.php?" + queryStr, true);
    xmlhttp.send();
}

function callBackValidation(stat){
    console.log(stat);
    let ok = true;
    // event.preventDefault();
    //verificare inputuri
    //  validateCity();
    
    // showValidationAnswer(ok);
    // return ok;
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

        // ajaxFunct();

        return true;
    }
    
}

var tripForm = document.getElementById("new-topic-form").onsubmit =  function (event){
    event.preventDefault();
    validateTripForm();
}

// When user clicks the submit button 
// --> Disable the default action 
// --> Call ajax to run check_signup.php to check each user input and print error messages 
// --> if everything goes well, submit the form using javascript
// --> form submits to model.php
// --> model writes to database