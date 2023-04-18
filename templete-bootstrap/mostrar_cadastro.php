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
<table>
  <tr>
    <th>CPF</th>
    <th>NOME</th>
    <th>MATRICULA</th>
    <th>SALA</th>
  </tr> 

 
  <tr>
    <td><?php echo $_POST['cpf'];?></td>
    <td><?php echo $_POST["nome"];?></td>
    <td><?php echo $_POST["matricula"];?></td>
    <td><?php echo $_POST["sala"];?></td>
  </tr>
  <tr> 
</table>  

<form action="editar.php" method="post">
    <input type="hidden" name="nome" value=<?php echo $_POST["nome"];?> >
    <input type="hidden" name="cpf" value=<?php echo $_POST['cpf'];?> >
    <input type="hidden" name="matricula" value=<?php echo $_POST["matricula"];?> >
    <input type="hidden" name="sala" value=<?php echo $_POST["sala"];?> >


<button type="submit" class="btn" >
<b>Editar/Visualiza</b> 
</button>
</form>
<?php include_once ("footer.html"); ?>
</body>
</html>