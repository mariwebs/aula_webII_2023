<?php 
include "../controller/UsuarioController.php";

if(!empty($_POST)){
    $usuario = new UsuarioController();
    $usuario->salvar($_POST);
}

?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="Usuarioform.php" method="POST">
        <label>Nome</label><br>
        <input type="text" name="nome"/><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone"/><br>

        <input type="submit" value="Salvar"/><br>

    

</form>
    
    
  </body>
</html>