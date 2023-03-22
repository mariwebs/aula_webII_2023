<?php 
include "../controller/UsuarioController.php";

    $usuario = new UsuarioController();
    $load = $usuario->carregar();

    if(!empty($_GET['id'])){
        $usuario->deletar($_GET['id']);
        header("location: UsuarioList.php");
    }
   

?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <table>
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Telefone</th>
        </tr>
        <?php
        foreach($load as $item){
        echo"<tr>
                <td>$item->ID</td>
                <td>$item->Numero</td>
                <td>$item->Telefone</td>
                <td><a href='./Usuarioform.php?id=$item->id'>Editar</td>
                <td><a href='./Usuariolist.php?id=$item->id'
                onclick='return confirm(\"Deseja Excluir?\")'>Excluir</td>
            </tr>";
        }
        ?>
</table>
    
    
  </body>
</html>