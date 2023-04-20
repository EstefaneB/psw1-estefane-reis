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
<h1 class="h2">Editar</h1>
   <form class="modificar" action="mostrar_cadastro.php" method="post">
    <div> <p> Nome: <br><input type="text" name="nome" value=<?php echo $_POST["nome"];?> > </p> </div>
    <div> <p> Cpf: <br><input type="text" name="cpf" value=<?php echo $_POST['cpf'];?> > </p> </div>
    <div> <p> Matricula: <br><input type="text" name="matricula" value=<?php echo $_POST["matricula"];?> > </p> </div>
    <div> <p> Sala: <br><input type="text" name="sala" value=<?php echo $_POST["sala"];?> >  </p></div>
   
    <button type="submit" class="btn">
     <b>salvar</b>
     </button>
               
    </form>
    <?php include_once ("footer.html"); ?>
</body>
</html>