var elem1 = document.getElementsByClassName("to-signup")[0];
var elem2 = document.getElementsByClassName("to-login")[0];

function switchToSignupForm(){
	var divLogin = document.getElementById("log-form");
	var divSignup = document.getElementById("sign-form");
	
	if(divLogin.style.display == "block" && divSignup.style.display == "none"){
		divLogin.style.display = "none";
		divSignup.style.display = "block";
	}
	else
		console.log("Error: switchToSignupForm()");
}

function switchToLoginForm(){
	var divSignup = document.getElementById("sign-form");
	var divLogin = document.getElementById("log-form");
	
	if(divLogin.style.display == "none" && divSignup.style.display == "block"){
		divLogin.style.display = "block";
		divSignup.style.display = "none";
	}
	else
		console.log("Error: switchToLoginForm()");
} 

elem1.onclick = switchToSignupForm;
elem2.onclick = switchToLoginForm;

document.getElementById('sign-form').addEventListener('submit', function(event){
	let p1 = document.getElementById('pwd-sign');
	let p2 = document.getElementById('pwd-sign-repeat');
	let ch = document.getElementById('terms-sign');
	if(p1.value != p2.value){
		event.preventDefault();
	}
});
