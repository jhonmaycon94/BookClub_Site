<?php
function sanitize($data, $conn){
  return $conn->mysqli->real_escape_string($data);
}
?>
