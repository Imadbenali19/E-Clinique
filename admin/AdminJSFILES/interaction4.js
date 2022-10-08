var vername=/^[A-Z a-z-]{4,20}$/;
var verpassword=/^[a-zA-Z0-9?.@-_]{3,}$/;
var vertel=/^(06|07)[0-9]{8}$/;
var veradr=/^[a-zA-Z0-9-,]{2,}$/;
var verfee=/^[0-9.]{1,}$/;
var verspec=/^[a-zA-Zéàè' ]{2,}$/;


function validNom(){
	if(!vername.test(document.getElementById("lastname").value)){
		event.preventDefault();
		document.getElementById("s1").innerHTML="Nom non valide!";
		document.getElementById("s1").style.color="red";
	}else{
		document.getElementById("s1").innerHTML="Nom valide!";
		document.getElementById("s1").style.color="green";
	}
}

function validPrenom(){
	if(!vername.test(document.getElementById("firstname").value)){
		event.preventDefault();
		document.getElementById("s2").innerHTML="Prenom non valide!";
		document.getElementById("s2").style.color="red";
	}else{
		document.getElementById("s2").innerHTML="Prenom valide!";
		document.getElementById("s2").style.color="green";
	}
}

function validPassword(){
	if(!verpassword.test(document.getElementById("password").value)){
		event.preventDefault();
		document.getElementById("s4").innerHTML="Mot de passe non valide!";
		document.getElementById("s4").style.color="red";
	}else{
		document.getElementById("s4").innerHTML="Mot de passe valide!";
		document.getElementById("s4").style.color="green";
	}
}

function validConfPassword(){
	if(document.getElementById("password").value!=document.getElementById("confP").value || document.getElementById("confP").value=="" ){
		event.preventDefault();
		document.getElementById("s5").innerHTML="Mots de passe différents!";
		document.getElementById("s5").style.color="red";
	}else{
		document.getElementById("s5").innerHTML="Mots de passe pareils!";
		document.getElementById("s5").style.color="green";
	}
}

function validTel(){
	if(!vertel.test(document.getElementById("tel").value)){
		event.preventDefault();
        document.getElementById("s6").innerHTML="N° Tel non valide!";
		document.getElementById("s6").style.color="red";
	}else{
		document.getElementById("s6").innerHTML="N° Tel valide!";
		document.getElementById("s6").style.color="green";
	}
}

function validAdresse(){
	if(!veradr.test(document.getElementById("adresse").value)){
		event.preventDefault();
        document.getElementById("s7").innerHTML="Adresse non valide!";
		document.getElementById("s7").style.color="red";
	}else{
		document.getElementById("s7").innerHTML="Adresse valide!";
		document.getElementById("s7").style.color="green";
	}
}

function validFee(){
	if(!verfee.test(document.getElementById("fee").value)){
		event.preventDefault();
        document.getElementById("s8").innerHTML="Frais non valide!";
		document.getElementById("s8").style.color="red";
	}else{
		document.getElementById("s8").innerHTML="Frais valide!";
		document.getElementById("s8").style.color="green";
	}
}

function validSpecialite(){
	if(!verspec.test(document.getElementById("sp").value)){
		event.preventDefault();
        document.getElementById("s9").innerHTML="Specialite non valide!";
		document.getElementById("s9").style.color="red";
	}else{
		document.getElementById("s9").innerHTML="Specialite valide!";
		document.getElementById("s9").style.color="green";
	}
}


function valid(){
	var c=0;
	validNom();
    validPrenom();
	validPassword();
    validAdresse();
    validTel();
    validFee();
    validConfPassword();
	validSpecialite()
    
    if(document.getElementById("s1").style.color=="green"&&document.getElementById("s2").style.color=="green"&&document.getElementById("s3").style.color=="green"&&document.getElementById("s4").style.color=="green"&&document.getElementById("s5").style.color=="green"&&document.getElementById("s6").style.color=="green"&&document.getElementById("s7").style.color=="green"&&document.getElementById("s8").style.color=="green"){
		// document.getElementById("s1").innerHTML="";
		// document.getElementById("s2").innerHTML="";
		// document.getElementById("s3").innerHTML="";
		// document.getElementById("s4").innerHTML="";
		// document.getElementById("s5").innerHTML="";
		// document.getElementById("s6").innerHTML="";
		// document.getElementById("s7").innerHTML="";
		// document.getElementById("s8").innerHTML="";
        
	}
	
}
