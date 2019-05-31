<?php include('includes/overall/overallHeader.php');?>
<form class="formulario" action="processa.php" method="post">
  <label for="nome">Nome Completo:</label><br/>
  <input type="text" name="nome" id="nome" size="25"/><br/>
  <label for="idade">Idade:</label><br/>
  <input type="text" name="idade" id="idade" size="2" maxlength="3"/><br/>
  <legend>Sexo:</legend>
    <label for="rb_feminino">Feminino</label>
    <input type="radio" name="sexo" id="rb_feminino" value="feminino"/>
    <label for="rb_masculino">Masculino</label>
    <input type="radio" name="sexo" id="rb_masculino" value="masculino"/><br/>
  <label for="usuario">Usuário:</label><br/>
  <input type="text" name="usuario" id="usuario"/><br/>
  <label for="senha">Senha:</label><br/>
  <input type="password" name="senha" id="senha" maxlength="8" size="10"/><br/>
  <label for="confirma_senha">Confirmar Senha:</label><br/>
  <input type="password" name="confirma_senha" id="confirma_senha" maxlength="8" size="10"/><br/>
  <button type="submit" id="bt_cadastro" onclick="return validaCadastro()">Enviar</button>
</form>
<?php include('includes/overall/overallFooter.php');?>
