var unreadNotif = document.getElementById("unread-notifications");
var allNotif = document.getElementById("all-notifications");

function switchToUnreadNotif(){
    let unreadNotifContainer = document.getElementsByClassName("notif-container")[0];
    let allNotifContainer = document.getElementsByClassName("notif-container")[1];
    unreadNotifContainer.style.display = "block";
    allNotifContainer.style.display = "none";
    unreadNotif.classList.add("current-notif");
    allNotif.classList.remove("current-notif");
}

function switchToAllNotif(){
    let unreadNotifContainer = document.getElementsByClassName("notif-container")[0];
    let allNotifContainer = document.getElementsByClassName("notif-container")[1];
    unreadNotifContainer.style.display = "none";
    allNotifContainer.style.display = "block";
    unreadNotif.classList.remove("current-notif");
    allNotif.classList.add("current-notif");
}


window.onload = switchToUnreadNotif;
unreadNotif.addEventListener('click', switchToUnreadNotif);
allNotif.addEventListener('click', switchToAllNotif);