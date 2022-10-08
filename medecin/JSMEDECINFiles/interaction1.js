var vername=/^[A-Z a-z-]{4,20}$/;
var verpassword=/^[a-zA-Z0-9?.@-_]{3,}$/;
var vertel=/^(06|07)[0-9]{8}$/;
var veradr=/^[a-zA-Z0-9-,]{2,}$/;
var verfee=/^[0-9.]{1,8}$/;
var verspec=/^[a-zA-Z éàè']{2,}$/;

function validNom(){
	if(!vername.test(document.getElementById("lastname").value)){
		event.preventDefault();
		document.getElementById("lastname").style.backgroundColor="red";
	}else{
		document.getElementById("lastname").style.backgroundColor="green";
	}
}

function validPrenom(){
	if(!vername.test(document.getElementById("firstname").value)){
		event.preventDefault();
		document.getElementById("firstname").style.backgroundColor="red";
	}else{
		document.getElementById("firstname").style.backgroundColor="green";
	}
}

function validPassword(){
	if(!verpassword.test(document.getElementById("password").value)){
		event.preventDefault();
		document.getElementById("password").style.backgroundColor="red";
	}else{
		document.getElementById("password").style.backgroundColor="green";
	}
}

function validConfPassword(){
	if(document.getElementById("password").value!=document.getElementById("confP").value || document.getElementById("confP").value=="" ){
		event.preventDefault();
		document.getElementById("confP").style.backgroundColor="red";
	}else{
		document.getElementById("confP").style.backgroundColor="green";
	}
}

function validTel(){
	if(!vertel.test(document.getElementById("tel").value)){
		event.preventDefault();
		document.getElementById("tel").style.backgroundColor="red";
	}else{
		document.getElementById("tel").style.backgroundColor="green";
	}
}

function validAdresse(){
	if(!veradr.test(document.getElementById("adresse").value)){
		event.preventDefault();
		document.getElementById("adresse").style.backgroundColor="red";
	}else{
		document.getElementById("adresse").style.backgroundColor="green";
	}
}

function validFee(){
	if(!verage.test(document.getElementById("fee").value)){
		event.preventDefault();
		document.getElementById("fee").style.backgroundColor="red";
	}else{
		document.getElementById("fee").style.backgroundColor="green";
	}
}

function validSpecialite(){
	if(!verspec.test(document.getElementById("sp").value)){
		event.preventDefault();
		document.getElementById("sp").style.backgroundColor="red";
	}else{
		document.getElementById("sp").style.backgroundColor="green";
	}
}

function valid(){
	validNom();
    validPrenom();
	validPassword();
    validAdresse();
    validTel();
    validAge();
    validConfPassword();
	validSpecialite()
    
    // if(document.getElementById("s1").style.color=="green"&&document.getElementById("s2").style.color=="green"&&document.getElementById("s3").style.color=="green"&&document.getElementById("s4").style.color=="green"&&document.getElementById("s5").style.color=="green"&&document.getElementById("s6").style.color=="green"&&document.getElementById("s7").style.color=="green"){
	// 	// document.getElementById("s1").innerHTML="";
	// 	// document.getElementById("s2").innerHTML="";
	// 	// document.getElementById("s3").innerHTML="";
	// 	// document.getElementById("s4").innerHTML="";
	// 	// document.getElementById("s5").innerHTML="";
	// 	// document.getElementById("s6").innerHTML="";
	// 	// document.getElementById("s7").innerHTML="";
	// 	// document.getElementById("s8").innerHTML="";
        
	// }
	
}
