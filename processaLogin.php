<?php
include('core/initsession.php');

if(empty($_POST) === false){
  $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

  if(empty($username) === true || empty($senha) === true){
    $errors[] = 'Você precisa digitar um usuário ou senha';
  }else if(user_exists($username, $conn) === false){
      $errors[] = 'Usuário não encontrado, você já se registrou?';
  }else{
    $login = login($username, $senha,$conn);
    if($login === false){
      $errors[] = "usuário ou senha incorretos";
    }else {
      $_SESSION['user_id'] = $login;
      header("Location: profile.php");
    }
  }
  print_r($errors);
}
?>
