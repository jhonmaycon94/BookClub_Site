function validaCadastro(){

var nome = document.getElementById('nome');
var idade = document.getElementById('idade');
var usuario = document.getElementById('usuario');
var senha = document.getElementById('senha');
var confirmacao_senha = document.getElementById('confirma_senha');

if(nome.value == ""){
  alert("Preencha o campo nome");
  nome.focus();
  return false;
}

if(idade.value == ""){
  alert("Preencha o campo idade");
  nome.focus();
  return false;
}

if(usuario.value == ""){
  alert("Preencha o campo usuario");
  nome.focus();
  return false;
}

if(senha.value == ""){
  alert("Preencha o campo senha");
  nome.focus();
  return false;
}

if(senha.value.length<6){
  alert("A senha deve ter no mínimo 6 dígitos")
  senha.focus();
  return false;
}

if(confirmacao_senha.value != senha.value){
  alert("as senhas digitadas são diferentes");
  nome.focus();
  return false;
}

return true;
}
