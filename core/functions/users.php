<?php
function user_exists($username, $conn){
  $query = $conn->query("SELECT * FROM usuarios WHERE username = '$username'");
  return ($query->num_rows > 0) ? true : false;
}

function user_id_from_username($username, $conn){
  $query = $conn->query("SELECT user_id FROM usuarios WHERE username = '$username'");
  $row = mysqli_fetch_assoc($query);
  return  $row['user_id'];
}

function login($username, $senha, $conn){
  $query = $conn->query("SELECT * FROM usuarios WHERE username = '$username' AND senha = $senha");
  return ($query->num_rows === 1) ? user_id_from_username($username,$conn) : false;
}

?>
