<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      background-image: url('IMG/cinza.avif');
      background-size: cover;
      background-attachment: fixed;
      font-family: 'Helvetica Neue', sans-serif;
      font-size: 20px;
      text-align: center;
    }

    .caixa-acesso {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      text-align: center;

      border: 5px solid gray;
      max-width: 287px;
      margin-left: 780.5px;
      margin-top: 290px;


    }



    h1 {
      color: black;
      font-size: 25px;
    }

    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: brown;
      border-bottom: 5px solid white;
      background: transparent;
      color: white;
    }

    button[type="submit"] {
      background-color: black;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 17px;
      cursor: pointer;
      opacity: 0.9;
      transition: initial;
    }

    button[type="submit"]:hover {
      background-color: rgb(48, 48, 48);
      opacity: 1;
    }

    form {
      text-align: center;
    }

    label {
      color: black;
      font-size: 22.5px;
    }

    .bi {
      fill: hotpink;
    }

    .mensagem-erro {
      color: white;
      font-family: 'Helvetica Neue', sans-serif;
      font-size: 15px;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <div class="caixa-acesso">
    <h1>Login de Usuário</h1>

    <form action="cadastro.php" method="POST">


      <p>
        <label>E-mail</label>
        <input type="text" name="email">

        <label>Senha</label>
        <input type="password" name="senha">


        <button type="submit">Entrar</button>
      </p>

      <a href="index.html" aria-label="Cadastre-se" class="">Cadastre-se</a>



      <?php
      if (isset($_POST["nome"]) || isset($_POST["email"]) || isset($_POST["senha"])) {

        if (strlen($_POST["nome"]) == 0) {
          $mensagemErro = 'Preencha os campos vazios';

        } else if (strlen($_POST["email"]) == 0) {
          $mensagemErro = 'Preencha os campos vazios';

        } else if (strlen($_POST["senha"]) == 0) {
          $mensagemErro = 'Preencha os campos vazios';

        }
      }






      ?>
      <?php
      if (!empty($mensagemErro)): ?>
        <p class="mensagem-erro">
          <?php echo $mensagemErro; ?>
        </p>
      <?php endif; ?>
    </form>
  </div>

</body>

</html>