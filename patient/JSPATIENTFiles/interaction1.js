var loginForm=document.getElementById('loginform');
var registerForm=document.getElementById('registerform');
var indicat=document.getElementById('id');

function login(){
  registerform.style.transform = 'translateX(300px)';
  loginform.style.transform = 'translateX(300px)';
  indicat.style.transform='translateX(0px)';
}


function register(){
  registerform.style.transform = 'translateX(0px)';
  loginform.style.transform = 'translateX(0px)';
  indicat.style.transform='translateX(100px)';
}