function addNewTrip(){
    var myTopics = document.getElementsByClassName("my-topics")[0];
    let newSpan = document.createElement("span");
    
    let newH4 = document.createElement('h4');
    let newParagraph = document.createElement('p');
    let newDiv = document.createElement('div');
    let newButton1 = document.createElement('button');
    let newButton2 = document.createElement('button');
    

//......modelare date
    newH4.innerText = "Trip name din form"
    newParagraph.innerText = "Date luate din form";
    newButton1.innerText = "Deactivate";
    newButton1.value = "on";
    newButton2.innerText = "Delete";
    
    
    
//pana aicisa    
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

    console.log("end of function");
}

var form = document.getElementById("new-topic-form");
form.addEventListener('submit', addNewTrip);
//window.onload = addNewTrip;