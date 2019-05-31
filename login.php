<?php include('includes/overall/overallHeader.php');?>

<!--formulario-->
<div id="form">
<form action="processaLogin.php" method="post">
  <div class="username_field">
    <label for="username">Usuário:</label><br/>
    <input type="text" name="username" id="username" value="" size="20">
  </div>
    <div class="senha_field">
      <label for="senha">Senha:</label><br/>
      <input type="password" name="senha" id="senha" size="20" maxlength="8">
    </div>
    <div class="bt_login_field">
      <button class="classname" type="submit" name="bt_login" id="bt_login" onclick="return validaLogin()">Login</button>
    </div>
</form>
</div>

<?php include('includes/overall/overallFooter.php');?>
