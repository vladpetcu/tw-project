
const dataFromDB = {
    image: "./images/personal.png",
    hash3: "Hash 3 here",	
    description: "This is the description",
    date: "24.03.2019",
    author: "Ionuț"
}

function renderNewsArticle(data) {
    let newsUlElem = document.getElementById("news-ul");
    let liElem = document.createElement("li");
    newsUlElem.insertBefore(liElem, newsUlElem.firstChild);
    
    let theNewLi = document.getElementById("news-ul").firstElementChild;
    let imgElem = document.createElement("img");
    let divElem = document.createElement("div");
    //inner img
    theNewLi.appendChild(imgElem);
    theNewLi.appendChild(divElem);

    let theNewDiv = theNewLi.getElementsByTagName('div')[0];
    let h3Elem = document.createElement("h3");
    let pElem = document.createElement("p");
    // inner h3 & p
    theNewDiv.appendChild(h3Elem);
    theNewDiv.appendChild(pElem);
    
    /*
    theNewLi.appendChild(pElem);*/
    //liElem.innerText = `"${data.description}" a fost creat de ${data.author} la data de ${data.date}.`;
}

function deleteLastArticle(newsList){
    newsList.children[newsList.childElementCount - 1].remove();
}

var maxNumberOfNews = 5;
var newsUl = document.getElementById("news-ul");
if(newsUl.childElementCount < maxNumberOfNews){
    renderNewsArticle(dataFromDB);
}
else if(newsUl.childElementCount == maxNumberOfNews){
    renderNewsArticle(dataFromDB);
    deleteLastArticle(newsUl);
}
else if (newsUl.childElementCount > maxNumberOfNews){
    console.log("Error: Numar li-uri prea mare - news page");
}