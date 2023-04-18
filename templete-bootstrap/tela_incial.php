<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<?php include_once ("header.php"); ?>
<h1>Cadastrar novo Aluno</h1>
  
<div class="cadastro">
        <form action="mostrar_cadastro.php" method="post">
            <p>CPF: <br><input type="text" name="cpf"></p>
            <p>NOME: <br><input type="text" name="nome"></p>
            <p>MATRICULA: <br><input type="text" name="matricula"></p>
            <p>SALA: <br><input type="text" name="sala"></p>

            <button type="submit" class="btn">
            <b>salvar</b>
            </button>
        </form>
    </div>
<?php include_once ("footer.html"); ?>

</body>
</html>