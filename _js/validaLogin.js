function validaLogin(){
var username = document.getElementById('username');
var senha = document.getElementById('senha');

if(username.value == ""){
  alert("Preencha o campo usuario!");
  username.focus();
  return false;
}
if(senha.value == ""){
  alert("Preencha o campo senha!")
  senha.focus();
  return false;
}

if(senha.value.length<6){
  alert("A senha deve ter no mínimo 6 dígitos")
  senha.focus();
  return false;
}

return true;
}
