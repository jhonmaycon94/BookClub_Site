<!DOCTYPE html>
<html lang="pt-BR"/>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>Página Inicial</title>
    <link rel="stylesheet" href="_css/form.css"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo|Pacifico&display=swap" rel="stylesheet"/>
  </head>
  <body>
    <!--cabeçalho-->
    <header id="cabecalho">
      <h1>Book Club Estância</h1>
      <nav id="nav_menu">
      </nav>
    </header>
    <div id="corpo">
      <form class="formulario" action="processa.php" method="post">
        <label for="nome">Nome Completo:</label><br/>
        <input type="text" name="nome" id="nome" size="25"><br/>
        <label for="idade">Idade:</label><br/>
        <input type="text" name="idade" id="idade" size="2" maxlength="3"><br/>
        <fieldset id="fs_sexo"><legend>Sexo:</legend>
          <label for="rb_feminino">Feminino</label>
          <input type="radio" name="sexo" id="rb_feminino"/>
          <label for="rb_masculino">Masculino</label>
          <input type="radio" name="sexo" id="rb_masculino">
        </fieldset>
        <label for="usuario">Usuário:</label><br/>
        <input type="text" name="usuario" id="usuario"><br/>
        <label for="senha">Senha:</label><br/>
        <input type="password" name="senha" id="senha" maxlength="8" size="10"><br/>
        <label for="confirma_senha">Confirmar Senha:</label><br/>
        <input type="password" name="confirma_senha" id="confirma_senha" maxlength="8" size="10"><br/>

      </form>
    </div>
      <!--rodapé-->
    <footer id="rodape">
      <p>&copy Jhon Maycon 2019</p>
    </footer>
  </body>
</html>
