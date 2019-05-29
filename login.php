<!DOCTYPE html>
<html lang="pt-BR"/>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>Página Inicial</title>
    <link rel="stylesheet" href="_css/form.css"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo|Pacifico&display=swap" rel="stylesheet"/>
    <script src="_js/validaLogin.js"></script>
  </head>
  <body>
    <!--cabeçalho-->
    <header id="cabecalho">
      <h1>Book Club Estância</h1>
      <nav id="nav_menu">
      </nav>
    </header>
    <div id="corpo">
      <!--formulario-->
        <div id="form">
          <form action="processa.php" method="post">
              <div class="username_field">
                <label for="username">Usuário:</label><br/>
                <input type="text" name="username" id="username" value="" size="20">
              </div>
                <div class="senha_field">
                  <label for="senha">Senha:</label><br/>
                  <input type="password" name="senha" id="senha" size="20" maxlength="8">
                </div>
                <div class="bt_login_field">
                  <button type="submit" name="bt_login" id="bt_login" onclick="return validaLogin()">Login</button>
                </div>
            </form>
          </div>
    </div>
    <footer id="rodape">
      <p>&copy Jhon Maycon 2019</p>
    </footer>
</body>
</html>
