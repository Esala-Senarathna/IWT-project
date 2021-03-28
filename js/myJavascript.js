
/*scroll back to the top of the page*/
function backToTopFunction(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

//functions to show HIRE NOW when on mouse hover
function mouseOver(){
	document.getElementById("hireNow").innerHTML = "Starts at LKR 2000.00<br>HIRE NOW!!!";
	document.getElementById("hireNow").style.display = "block";
	document.getElementById("pkgNameChanger").innerHTML = "...Non - A/C Package...";
}

function mouseOut(){
	document.getElementById("hireNow").style.display = "none";
	document.getElementById("pkgNameChanger").innerHTML = "...Our Packages...";
}

function mouseOver1(){
	document.getElementById("hireNow1").innerHTML = "Starts at LKR 3000.00<br>HIRE NOW!!!";
	document.getElementById("hireNow1").style.display = "block";
	document.getElementById("pkgNameChanger").innerHTML = "...A/C Package...";
}
function mouseOut1(){
	document.getElementById("hireNow1").style.display = "none";
	document.getElementById("pkgNameChanger").innerHTML = "...Our Packages...";
}

function mouseOver2(){
	document.getElementById("hireNow2").innerHTML = "Starts at LKR 6000.00<br>HIRE NOW!!!";
	document.getElementById("hireNow2").style.display = "block";
	document.getElementById("pkgNameChanger").innerHTML = "...Wedding Car Package...";
}
function mouseOut2(){
	document.getElementById("hireNow2").style.display = "none";
	document.getElementById("pkgNameChanger").innerHTML = "...Our Packages...";
}

//addDriverByAdmin.html page password validation
var userPassword = document.getElementById("pswd");
document.getElementById("pswdDetails").style.display = "none";

userPassword.onfocus = function(){
	document.getElementById("pswdDetails").style.display = "block";
}

userPassword.onblur = function(){
	document.getElementById("pswdDetails").style.display = "none";
}

userPassword.onkeyup = function(){
	//lower case letter validation
	var lowerCaseLetters = /[a-z]/g;
	if(userPassword.value.match(lowerCaseLetters)){
		pswdLetters.classList.remove("pswdInvalid");
		pswdLetters.classList.add("pswdValid");
	}
	else {
		pswdLetters.classList.remove("pswdValid");
		pswdLetters.classList.add("pswdInvalid");
	}

	//capital (uppercase letters) validation
	var upperCaseLetters = /[A-Z]/g;
	if(userPassword.value.match(upperCaseLetters)){
		pswdCapital.classList.remove("pswdInvalid");
		pswdCapital.classList.add("pswdValid");
	}
	else {
		pswdCapital.classList.remove("pswdValid");
		pswdCapital.classList.add("pswdInvalid");
	}

	//valodation of numbers
	var numbers = /[0-9]/g;
	if(userPassword.value.match(numbers)){
		pswdNumbers.classList.remove("pswdInvalid");
		pswdNumbers.classList.add("pswdValid");
	}
	else {
		pswdNumbers.classList.remove("pswdValid");
		pswdNumbers.classList.add("pswdInvalid");
	}

	//validating the length of the password
	if(userPassword.value.length >= 5){
		pswdCharLimit.classList.remove("pswdInvalid");
		pswdCharLimit.classList.add("pswdValid");
	}
	else{
		pswdCharLimit.classList.remove("pswdValid");
		pswdCharLimit.classList.add("pswdInvalid");
	}
	if(userPassword.value.length <= 5){
		document.getElementById("pswdStrength").innerHTML = "Password Strength : Weak";
	}
	else if(userPassword.value.length <= 7){
		document.getElementById("pswdStrength").innerHTML = "Password Strength : Good";
	}
	else{
		document.getElementById("pswdStrength").innerHTML = "Password Strength : Strong";
	}
}
//checking password match with reenterpassword
function checkPassword(){
	word = document.getElementById("repswd");
	if(userPassword.value == word.value){
		alert("Password matching Succesfull");
	}
	else {
		alert("Password Mismatch!");
	}
}

//loading steps function for packages page
function loadSteps(name){
	if(name == "step1"){
		document.getElementById("stepImage").src = "images/70140531_custom.png";
		document.getElementById("stepHeading").innerHTML = "STEP 1";
		document.getElementById("stepDetails").innerHTML="First Register for a account as a customer and login to the user profile. As in our website only registered customers are privilaged to rebt vehicles";
	}
	else if(name == "step2"){
		document.getElementById("stepImage").src = "images/background.jpeg";
		document.getElementById("stepHeading").innerHTML = "STEP 2";
		document.getElementById("stepDetails").innerHTML="Then select a Package from A/C, Non-A/C or a wedding and browse for a vehicle. Select your prefered model and select order now";
	}
	else if(name == "step3"){
		document.getElementById("stepImage").src = "images/drive6.jpeg";
		document.getElementById("stepHeading").innerHTML = "STEP 3";
		document.getElementById("stepDetails").innerHTML="To place the order on the vehicle, fill the required date , time, pickup location, drop location. Once it is done add the payment details to the sytem";
	}
}
